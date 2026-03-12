<?php
session_start();
if(isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit;
}

require_once 'classes/Database.php';
require_once 'classes/User.php';

$error = "";

// Fast login er variable gulo
$is_fast_login_success = false;
$fast_phone = "";
$fast_pin = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = (new Database())->connect();
    $userObj = new User($db);

    // ======== FAST LOGIN LOGIC ========
    if (isset($_POST['fast_login'])) {
        // Random name: jemon 'Guest_4921'
        $name = "Guest_" . rand(1000, 9999);
        
        // Random BD Phone Number: 01 + (3,4,5,6,7,8,9) + 8 digits
        $operators = ['3', '4', '5', '6', '7', '8', '9'];
        $phone = "01" . $operators[array_rand($operators)] . rand(10000000, 99999999);
        
        // Random 4 digit PIN
        $pin = str_pad(rand(1000, 9999), 4, '0', STR_PAD_LEFT);

        // Database e insert kora
        $result = $userObj->register($name, $phone, $pin);
        
        if ($result['status'] == 'success') {
            // Account toiri howar por sathe sathe login koriye dewa
            $user_id = $userObj->login($phone, $pin);
            if ($user_id) {
                $_SESSION['user_id'] = $user_id;
                $is_fast_login_success = true; // Screen update korar jonno flag
                $fast_phone = $phone;
                $fast_pin = $pin;
            }
        } else {
            $error = "Fast Login Failed. Try again.";
        }
    } 
    // ======== NORMAL LOGIN LOGIC ========
    else if (isset($_POST['normal_login'])) {
        $phone = $_POST['phone'];
        $pin = $_POST['pin'];

        $user_id = $userObj->login($phone, $pin);

        if ($user_id) {
            $_SESSION['user_id'] = $user_id;
            header("Location: index.php");
            exit;
        } else {
            $error = "Invalid Phone Number or PIN!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login - Paikary Telecom</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
<div class="max-w-[400px] w-full bg-white p-8 rounded-[40px] shadow-2xl relative overflow-hidden mx-4 my-8">
    <div class="absolute top-[-50px] right-[-50px] w-40 h-40 bg-blue-500 rounded-full mix-blend-multiply filter blur-2xl opacity-50"></div>
    <div class="absolute bottom-[-50px] left-[-50px] w-40 h-40 bg-purple-500 rounded-full mix-blend-multiply filter blur-2xl opacity-50"></div>

    <?php if($is_fast_login_success): ?>
        <div class="relative z-10 text-center py-4">
            <div class="w-20 h-20 bg-green-100 text-green-500 rounded-full flex items-center justify-center mx-auto mb-4 border-4 border-white shadow-lg">
                <i class="fa-solid fa-check text-4xl"></i>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Account Created!</h1>
            <p class="text-sm text-gray-500 mt-2 mb-6">Take a screenshot to save your random login details.</p>

            <div class="bg-blue-50/50 p-5 rounded-3xl border border-blue-100 text-left mb-8 relative shadow-inner">
                <i class="fa-solid fa-copy absolute top-5 right-5 text-blue-300"></i>
                <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Phone Number</p>
                <p class="text-xl font-bold text-gray-800 mb-3 tracking-widest"><?= htmlspecialchars($fast_phone) ?></p>
                
                <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">4-Digit PIN</p>
                <p class="text-2xl font-bold text-purple-600 tracking-widest"><?= htmlspecialchars($fast_pin) ?></p>
            </div>

            <a href="index.php" class="block w-full bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-bold py-4 rounded-2xl shadow-lg shadow-green-500/40 transition-transform active:scale-95 text-center">
                Go to Dashboard <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
        </div>

    <?php else: ?>
        <div class="relative z-10 text-center mb-8">
            <div class="w-20 h-20 bg-gradient-to-tr from-blue-600 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                <i class="fa-solid fa-bolt text-3xl text-white"></i>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Welcome Back</h1>
            <p class="text-sm text-gray-500 mt-1">Sign in to continue</p>
        </div>

        <?php if($error): ?>
            <div class="bg-red-50 text-red-600 text-sm font-semibold p-3 rounded-xl text-center mb-4 border border-red-100">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="relative z-10 mb-6">
            <input type="hidden" name="fast_login" value="1">
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white font-bold py-3.5 rounded-2xl shadow-md shadow-blue-500/30 transition-transform active:scale-95 flex items-center justify-center gap-2">
                <i class="fa-solid fa-bolt text-yellow-300"></i> 1-Click Fast Login
            </button>
        </form>

        <div class="flex items-center my-4 relative z-10">
            <div class="flex-grow h-px bg-gray-200"></div>
            <span class="px-4 text-xs text-gray-400 font-semibold uppercase">Or login manually</span>
            <div class="flex-grow h-px bg-gray-200"></div>
        </div>

        <form method="POST" class="space-y-5 relative z-10">
            <input type="hidden" name="normal_login" value="1">
            
            <div>
                <label class="text-xs font-bold text-gray-500 uppercase ml-1">Phone Number</label>
                <div class="relative mt-1">
                    <i class="fa-solid fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="tel" name="phone" placeholder="01XXXXXXXXX" required class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
                </div>
            </div>

            <div>
                <label class="text-xs font-bold text-gray-500 uppercase ml-1">4-Digit PIN</label>
                <div class="relative mt-1">
                    <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="password" name="pin" placeholder="••••" required maxlength="4" class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
                </div>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-4 rounded-2xl shadow-lg shadow-blue-500/40 transition-transform active:scale-95">
                Login Now <i class="fa-solid fa-arrow-right ml-2"></i>
            </button>
        </form>

        <div class="mt-8 text-center relative z-10">
            <p class="text-sm text-gray-600">Don't have an account? <a href="register.php" class="text-blue-600 font-bold hover:underline">Register</a></p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>