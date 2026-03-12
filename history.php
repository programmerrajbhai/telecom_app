<?php
// history.php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require_once 'classes/Database.php';
$db = (new Database())->connect();
$user_id = $_SESSION['user_id'];

// Database theke history fetch kora (Latest ta aage dekhabe)
$stmt = $db->prepare("SELECT * FROM transactions WHERE user_id = :user_id ORDER BY created_at DESC");
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
$transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Helper function date formating er jonno
function formatTrxDate($dbDate) {
    $date = new DateTime($dbDate);
    $today = new DateTime('today');
    $yesterday = new DateTime('yesterday');
    
    if ($date->format('Y-m-d') == $today->format('Y-m-d')) {
        return "Today, " . $date->format('h:i A');
    } elseif ($date->format('Y-m-d') == $yesterday->format('Y-m-d')) {
        return "Yesterday, " . $date->format('h:i A');
    } else {
        return $date->format('d M, h:i A');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Transaction History</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; } 
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .fade-in { animation: fadeIn 0.3s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(5px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body>
<div class="max-w-[480px] mx-auto bg-gray-50 min-h-screen shadow-2xl relative pb-10">
    
    <div class="sticky top-0 bg-white/90 backdrop-blur-md z-50 px-5 py-4 border-b border-gray-100 flex items-center">
        <a href="index.php" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-50 hover:bg-gray-100 transition">
            <i class="fa-solid fa-arrow-left text-gray-700"></i>
        </a>
        <h1 class="ml-4 font-bold text-lg text-gray-800">History</h1>
    </div>

    <div class="flex overflow-x-auto px-5 py-3 gap-3 no-scrollbar bg-white border-b border-gray-50" id="filter-buttons">
        <button data-filter="all" class="filter-btn active-btn px-5 py-1.5 rounded-full bg-blue-600 text-white text-xs font-semibold whitespace-nowrap shadow-md shadow-blue-500/30 transition">All</button>
        <button data-filter="flexiload" class="filter-btn px-5 py-1.5 rounded-full bg-gray-50 border border-gray-200 text-gray-600 text-xs font-medium whitespace-nowrap hover:bg-gray-100 transition">Flexiload</button>
        <button data-filter="transfer" class="filter-btn px-5 py-1.5 rounded-full bg-gray-50 border border-gray-200 text-gray-600 text-xs font-medium whitespace-nowrap hover:bg-gray-100 transition">Transfer</button>
        <button data-filter="add_fund" class="filter-btn px-5 py-1.5 rounded-full bg-gray-50 border border-gray-200 text-gray-600 text-xs font-medium whitespace-nowrap hover:bg-gray-100 transition">Add Fund</button>
    </div>

    <div class="p-5 space-y-3" id="trx-list">
        
        <?php if(count($transactions) > 0): ?>
            <?php foreach($transactions as $trx): 
                // Dynamic styling based on transaction type
                $type = $trx['type']; // e.g., 'flexiload', 'add_fund', 'transfer'
                $amount = number_format($trx['amount'], 2);
                $status = ucfirst($trx['status']); // e.g., 'Success', 'Pending'
                $date_str = formatTrxDate($trx['created_at']);

                $icon = 'fa-circle-info'; $bg = 'bg-gray-50'; $text = 'text-gray-500'; $sign = ''; $amountColor = 'text-gray-800';
                
                if($type == 'flexiload' || $type == 'drive') {
                    $icon = 'fa-mobile-screen'; $bg = 'bg-blue-50'; $text = 'text-blue-500'; $sign = '-';
                } elseif($type == 'add_fund') {
                    $icon = 'fa-arrow-down'; $bg = 'bg-green-50'; $text = 'text-green-500'; $sign = '+'; $amountColor = 'text-green-600';
                } elseif($type == 'transfer') {
                    $icon = 'fa-arrow-up'; $bg = 'bg-red-50'; $text = 'text-red-500'; $sign = '-';
                }
            ?>
            
            <div class="trx-card bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between hover:shadow-md transition" data-type="<?= $type ?>">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full <?= $bg ?> <?= $text ?> flex items-center justify-center">
                        <i class="fa-solid <?= $icon ?>"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-800 text-sm"><?= ucwords(str_replace('_', ' ', $type)) ?></h3>
                        <p class="text-[10px] text-gray-500 mt-0.5"><?= $date_str ?></p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-sm font-bold <?= $amountColor ?>"><?= $sign ?> ৳ <?= $amount ?></p>
                    <?php if($status == 'Success'): ?>
                        <span class="text-[10px] text-green-500 font-bold"><i class="fa-solid fa-check-circle mr-1"></i>Success</span>
                    <?php elseif($status == 'Pending' || $status == 'Processing'): ?>
                        <span class="text-[10px] text-orange-500 font-bold"><i class="fa-solid fa-clock mr-1"></i>Pending</span>
                    <?php else: ?>
                        <span class="text-[10px] text-red-500 font-bold"><i class="fa-solid fa-times-circle mr-1"></i>Failed</span>
                    <?php endif; ?>
                </div>
            </div>

            <?php endforeach; ?>
        <?php else: ?>
            <div class="text-center py-10">
                <div class="w-16 h-16 bg-gray-100 text-gray-400 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fa-solid fa-receipt text-2xl"></i>
                </div>
                <p class="text-gray-500 font-medium">No transactions yet!</p>
            </div>
        <?php endif; ?>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const trxCards = document.querySelectorAll('.trx-card');

        const activeClasses = ['bg-blue-600', 'text-white', 'shadow-md', 'shadow-blue-500/30'];
        const inactiveClasses = ['bg-gray-50', 'border', 'border-gray-200', 'text-gray-600'];

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Style Active/Inactive
                filterBtns.forEach(b => {
                    b.classList.remove(...activeClasses);
                    b.classList.add(...inactiveClasses);
                });
                this.classList.remove(...inactiveClasses);
                this.classList.add(...activeClasses);

                // Filter logic
                const filterValue = this.getAttribute('data-filter');
                trxCards.forEach(card => {
                    card.classList.remove('fade-in');
                    if (filterValue === 'all' || card.getAttribute('data-type') === filterValue) {
                        card.style.display = 'flex';
                        setTimeout(() => card.classList.add('fade-in'), 10);
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
</body>
</html>