<?php
// add_fund.php
session_start();

// Security Check
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require_once 'classes/Database.php';

$db = (new Database())->connect();
$user_id = $_SESSION['user_id'];

$message = "";
$msg_type = "";

// Form Submit Handle
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = floatval($_POST['amount']);
    $method = $_POST['method']; // bkash or nagad
    $sender_number = trim($_POST['sender_number']);
    $trx_id = trim($_POST['trx_id']);

    if($amount < 10) {
        $message = "সর্বনিম্ন ১০ টাকা অ্যাড করতে পারবেন।";
        $msg_type = "error";
    } elseif(empty($sender_number) || empty($trx_id)) {
        $message = "অনুগ্রহ করে সেন্ডার নাম্বার এবং TrxID দিন।";
        $msg_type = "error";
    } else {
        try {
            // Check if this TrxID is already used
            $checkStmt = $db->prepare("SELECT id FROM transactions WHERE trx_id = :trx_id LIMIT 1");
            $checkStmt->execute(['trx_id' => $trx_id]);
            
            if($checkStmt->rowCount() > 0) {
                $message = "এই TrxID টি ইতিমধ্যে ব্যবহার করা হয়েছে!";
                $msg_type = "error";
            } else {
                // ইউজারের ব্যালেন্স এখন আর সাথে সাথে আপডেট হবে না!
                // শুধুমাত্র transactions টেবিলে 'Pending' হিসেবে সেভ হবে।

                $query = "INSERT INTO transactions (user_id, type, amount, status, method, sender_number, trx_id) 
                          VALUES (:user_id, 'add_fund', :amount, 'Pending', :method, :sender_number, :trx_id)";
                
                $stmt = $db->prepare($query);
                $stmt->execute([
                    'user_id' => $user_id, 
                    'amount' => $amount,
                    'method' => $method,
                    'sender_number' => $sender_number,
                    'trx_id' => $trx_id
                ]);

                $message = "আপনার রিকোয়েস্ট সফলভাবে সাবমিট হয়েছে। এডমিন ভেরিফাই করার পর ব্যালেন্স অ্যাড হবে।";
                $msg_type = "success";
            }
            
        } catch (Exception $e) {
            $message = "দুঃখিত, ট্রানজেকশন ফেইল হয়েছে। আবার চেষ্টা করুন।";
            $msg_type = "error";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>ব্যালেন্স অ্যাড - Paikary Telecom</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Hind Siliguri', 'Poppins', sans-serif; background-color: #f8fafc; }
        .app-container { max-width: 480px; margin: 0 auto; background-color: #f8fafc; min-height: 100vh; position: relative; padding-bottom: 40px;}
        .glass-header { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255, 255, 255, 0.5); }
    </style>
</head>
<body>
<div class="app-container shadow-2xl relative">
    
    <div class="glass-header sticky top-0 z-50 px-5 py-4 flex items-center">
        <a href="index.php" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-50 hover:bg-gray-100 transition shadow-sm text-gray-700">
            <i class="fa-solid fa-chevron-left"></i>
        </a>
        <h1 class="ml-4 font-bold text-lg text-gray-800 tracking-wide">ব্যালেন্স অ্যাড</h1>
    </div>

    <div class="p-5 space-y-6">
        
        <form method="POST" class="space-y-6">
            
            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100">
                <label class="text-sm font-bold text-gray-700 mb-3 block">পরিমাণ লিখুন (টাকা)</label>
                <div class="relative">
                    <span class="absolute left-5 top-1/2 -translate-y-1/2 text-2xl font-bold text-blue-600">৳</span>
                    <input type="number" name="amount" id="amountInput" placeholder="0.00" required class="w-full pl-12 pr-4 py-4 text-2xl font-bold bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition">
                </div>
                <div class="flex gap-2 mt-4">
                    <button type="button" onclick="setAmount(500)" class="flex-1 py-2 bg-blue-50 text-blue-600 rounded-xl text-sm font-bold border border-blue-100 hover:bg-blue-100 transition">+ ৫০০</button>
                    <button type="button" onclick="setAmount(1000)" class="flex-1 py-2 bg-blue-50 text-blue-600 rounded-xl text-sm font-bold border border-blue-100 hover:bg-blue-100 transition">+ ১০০০</button>
                    <button type="button" onclick="setAmount(5000)" class="flex-1 py-2 bg-blue-50 text-blue-600 rounded-xl text-sm font-bold border border-blue-100 hover:bg-blue-100 transition">+ ৫০০০</button>
                </div>
            </div>

            <div>
                <label class="text-sm font-bold text-gray-700 mb-3 block">পেমেন্ট মাধ্যম নির্বাচন করুন</label>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex flex-col items-center justify-center p-4 border-2 border-gray-100 rounded-2xl cursor-pointer transition hover:border-pink-300 has-[:checked]:border-pink-500 has-[:checked]:bg-pink-50">
                        <input type="radio" name="method" value="bkash" class="hidden" checked onchange="updateInstruction('bkash')">
                        <i class="fa-solid fa-paper-plane text-3xl text-pink-500 mb-2"></i>
                        <span class="font-bold text-gray-700">বিকাশ</span>
                    </label>
                    
                    <label class="flex flex-col items-center justify-center p-4 border-2 border-gray-100 rounded-2xl cursor-pointer transition hover:border-orange-300 has-[:checked]:border-orange-500 has-[:checked]:bg-orange-50">
                        <input type="radio" name="method" value="nagad" class="hidden" onchange="updateInstruction('nagad')">
                        <i class="fa-solid fa-money-bill-wave text-3xl text-orange-500 mb-2"></i>
                        <span class="font-bold text-gray-700">নগদ</span>
                    </label>
                </div>
            </div>

            <div class="bg-blue-600 text-white p-6 rounded-3xl shadow-lg relative overflow-hidden">
                <div class="absolute -right-10 -top-10 w-32 h-32 bg-white opacity-10 rounded-full blur-2xl"></div>
                <p class="text-xs text-blue-200 font-semibold mb-1 uppercase tracking-wider">এই নাম্বারে সেন্ড মানি করুন (পার্সোনাল)</p>
                <div class="flex justify-between items-center bg-white/20 p-3 rounded-xl border border-white/30 mt-2 backdrop-blur-sm">
                    <span id="depositNumber" class="text-2xl font-bold tracking-widest font-[Poppins]">01310100239</span>
                    <button type="button" onclick="copyNumber()" class="bg-white text-blue-600 w-10 h-10 rounded-lg flex items-center justify-center hover:scale-105 transition shadow-md active:bg-gray-100">
                        <i class="fa-solid fa-copy"></i>
                    </button>
                </div>
                <p class="text-[11px] text-blue-100 mt-3 text-center">টাকা পাঠানোর পর নিচের ফর্মটি পূরণ করুন</p>
            </div>

            <div class="bg-white p-5 rounded-3xl shadow-sm border border-gray-100 space-y-4">
                <div>
                    <label class="text-xs font-bold text-gray-500 mb-1 block">যে নাম্বার থেকে টাকা পাঠিয়েছেন</label>
                    <div class="relative">
                        <i class="fa-solid fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="tel" name="sender_number" placeholder="01XXXXXXXXX" required class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition font-[Poppins]">
                    </div>
                </div>

                <div>
                    <label class="text-xs font-bold text-gray-500 mb-1 block">ট্রানজেকশন আইডি (TrxID)</label>
                    <div class="relative">
                        <i class="fa-solid fa-hashtag absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" name="trx_id" placeholder="e.g. 8J92HS7X" required class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition font-[Poppins] uppercase">
                    </div>
                </div>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-4 rounded-2xl shadow-lg shadow-blue-500/40 transition-transform active:scale-95 flex items-center justify-center gap-2 text-lg">
                রিকোয়েস্ট সাবমিট করুন <i class="fa-solid fa-paper-plane text-sm"></i>
            </button>

        </form>
    </div>
</div>

<div id="customAlert" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
    <div id="alertBackdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm opacity-0 transition-opacity duration-300" onclick="closeAlert()"></div>
    
    <div id="alertBox" class="bg-white rounded-[30px] p-6 w-full max-w-[320px] relative z-10 transform scale-95 opacity-0 transition-all duration-300 shadow-2xl text-center">
        <div id="alertIcon" class="w-20 h-20 rounded-full mx-auto flex items-center justify-center mb-5 text-4xl border-4 border-white shadow-lg">
            <i class="fa-solid fa-bell"></i>
        </div>
        
        <h3 id="alertTitle" class="text-xl font-bold text-gray-800 mb-2 tracking-wide">টাইটেল</h3>
        <p id="alertMessage" class="text-sm text-gray-500 mb-6 font-medium leading-relaxed">এখানে মেসেজ দেখাবে।</p>
        
        <button id="alertBtn" onclick="closeAlert()" class="w-full font-bold py-3.5 rounded-2xl transition-transform active:scale-95 shadow-md">
            ঠিক আছে
        </button>
    </div>
</div>

<script>
    // Quick Amount Button
    function setAmount(val) {
        document.getElementById('amountInput').value = val;
    }

    // Dynamic Instruction Box Color
    function updateInstruction(method) {
        const instructionBox = document.querySelector('.bg-blue-600') || document.querySelector('.bg-pink-500') || document.querySelector('.bg-orange-500');
        if(method === 'bkash') {
            instructionBox.className = "bg-pink-500 text-white p-6 rounded-3xl shadow-lg relative overflow-hidden transition-colors duration-300";
            instructionBox.querySelector('button').className = "bg-white text-pink-600 w-10 h-10 rounded-lg flex items-center justify-center hover:scale-105 transition shadow-md active:bg-gray-100";
        } else if(method === 'nagad') {
            instructionBox.className = "bg-orange-500 text-white p-6 rounded-3xl shadow-lg relative overflow-hidden transition-colors duration-300";
            instructionBox.querySelector('button').className = "bg-white text-orange-600 w-10 h-10 rounded-lg flex items-center justify-center hover:scale-105 transition shadow-md active:bg-gray-100";
        }
    }

    // Initialize Box Color
    document.addEventListener('DOMContentLoaded', () => {
        const checkedMethod = document.querySelector('input[name="method"]:checked').value;
        updateInstruction(checkedMethod);
    });

    // ================= CUSTOM ALERT LOGIC =================
    function showAlert(title, message, type = 'info') {
        const modal = document.getElementById('customAlert');
        const backdrop = document.getElementById('alertBackdrop');
        const box = document.getElementById('alertBox');
        const icon = document.getElementById('alertIcon');
        const btn = document.getElementById('alertBtn');
        
        document.getElementById('alertTitle').innerText = title;
        document.getElementById('alertMessage').innerText = message;

        // Styling based on Type
        if (type === 'success') {
            icon.className = "w-20 h-20 rounded-full mx-auto flex items-center justify-center mb-5 text-4xl border-4 border-white shadow-lg bg-green-100 text-green-500";
            icon.innerHTML = '<i class="fa-solid fa-check"></i>';
            btn.className = "w-full font-bold py-3.5 rounded-2xl transition-transform active:scale-95 shadow-md bg-green-500 hover:bg-green-600 text-white";
            
            // Redirect to history page after 2 seconds on success
            btn.onclick = function() { window.location.href = "history.php"; };
        } else if (type === 'error') {
            icon.className = "w-20 h-20 rounded-full mx-auto flex items-center justify-center mb-5 text-4xl border-4 border-white shadow-lg bg-red-100 text-red-500";
            icon.innerHTML = '<i class="fa-solid fa-xmark"></i>';
            btn.className = "w-full font-bold py-3.5 rounded-2xl transition-transform active:scale-95 shadow-md bg-red-500 hover:bg-red-600 text-white";
            btn.onclick = closeAlert;
        } else {
            icon.className = "w-20 h-20 rounded-full mx-auto flex items-center justify-center mb-5 text-4xl border-4 border-white shadow-lg bg-blue-100 text-blue-500";
            icon.innerHTML = '<i class="fa-solid fa-info"></i>';
            btn.className = "w-full font-bold py-3.5 rounded-2xl transition-transform active:scale-95 shadow-md bg-blue-500 hover:bg-blue-600 text-white";
            btn.onclick = closeAlert;
        }

        // Show Animation
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        setTimeout(() => {
            backdrop.classList.remove('opacity-0');
            box.classList.remove('scale-95', 'opacity-0');
            box.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeAlert() {
        const modal = document.getElementById('customAlert');
        const backdrop = document.getElementById('alertBackdrop');
        const box = document.getElementById('alertBox');

        // Hide Animation
        backdrop.classList.add('opacity-0');
        box.classList.remove('scale-100', 'opacity-100');
        box.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 300);
    }

    // Copy Logic with Custom Alert
    function copyNumber() {
        const number = document.getElementById('depositNumber').innerText;
        navigator.clipboard.writeText(number).then(() => {
            showAlert('সফল!', 'নাম্বার কপি করা হয়েছে: ' + number, 'info');
        }).catch(err => {
            showAlert('দুঃখিত!', 'নাম্বার কপি করা যায়নি।', 'error');
        });
    }

    // ================= SHOW PHP MESSAGES =================
    <?php if($message != ""): ?>
        document.addEventListener('DOMContentLoaded', () => {
            showAlert(
                '<?= $msg_type == "success" ? "সফল!" : "দুঃখিত!" ?>', 
                '<?= $message ?>', 
                '<?= $msg_type ?>'
            );
        });
    <?php endif; ?>
</script>
</body>
</html>