<?php
// profile.php
session_start();

// Security: Jodi user login kora na thake, login page-e pathiye dibe
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require_once 'classes/Database.php';
require_once 'classes/User.php';

$db = (new Database())->connect();
$userObj = new User($db);

// Logged in user er id theke data ber kora
$user_id = $_SESSION['user_id'];
$userData = $userObj->getUserDetails($user_id);

// Jodi name faka thake, default 'User' dekhabe
$name = !empty($userData['name']) ? $userData['name'] : 'User';
$phone = !empty($userData['phone']) ? $userData['phone'] : 'N/A';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>My Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; }
        .app-container { max-width: 480px; margin: 0 auto; background-color: #f8fafc; min-height: 100vh; position: relative; padding-bottom: 20px;}
    </style>
</head>
<body>
<div class="app-container shadow-2xl">
    
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-5 pt-8 pb-24 rounded-b-[40px] relative shadow-md">
        <a href="index.php" class="absolute top-5 left-5 text-white bg-white/10 hover:bg-white/20 w-10 h-10 flex items-center justify-center rounded-full backdrop-blur-sm transition">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h1 class="text-center text-white font-bold text-lg mt-1">My Profile</h1>
    </div>

    <div class="px-5 -mt-16 relative z-10">
        <div class="bg-white rounded-3xl p-6 shadow-xl border border-gray-100 flex flex-col items-center">
            <div class="w-24 h-24 rounded-full border-4 border-white shadow-lg -mt-16 bg-blue-50 overflow-hidden relative">
                <img src="https://ui-avatars.com/api/?name=<?= urlencode($name) ?>&size=150&background=eff6ff&color=2563eb&bold=true" class="w-full h-full object-cover" alt="Avatar">
                
                <div class="absolute bottom-1 right-1 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>
            </div>
            
            <h2 class="font-bold text-xl text-gray-800 mt-4"><?= htmlspecialchars($name) ?></h2>
            <p class="text-gray-500 text-sm font-medium mt-1"><i class="fa-solid fa-phone text-xs mr-1 text-blue-400"></i> <?= htmlspecialchars($phone) ?></p>
            
            <div class="mt-4 bg-green-50 border border-green-100 text-green-700 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider flex items-center gap-1.5">
                <i class="fa-solid fa-circle-check"></i> Verified User
            </div>
        </div>
    </div>

    <div class="p-5 space-y-3 mt-2">
        <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest ml-2 mb-3">Account Settings</h3>
        
        <div class="bg-white rounded-3xl p-2 shadow-sm border border-gray-100">
            <a href="#" class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-2xl transition group cursor-pointer">
                <div class="flex items-center gap-4">
                    <div class="bg-blue-50 text-blue-500 w-11 h-11 flex items-center justify-center rounded-full group-hover:scale-105 transition-transform"><i class="fa-solid fa-lock"></i></div>
                    <span class="font-semibold text-gray-700 text-sm">Change PIN / Password</span>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-300 text-sm"></i>
            </a>
            
            <div class="h-[1px] bg-gray-50 mx-4 my-1"></div>
            
            <a href="#" class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-2xl transition group cursor-pointer">
                <div class="flex items-center gap-4">
                    <div class="bg-purple-50 text-purple-500 w-11 h-11 flex items-center justify-center rounded-full group-hover:scale-105 transition-transform"><i class="fa-solid fa-shield-halved"></i></div>
                    <span class="font-semibold text-gray-700 text-sm">Two-Step Verification</span>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-300 text-sm"></i>
            </a>
            
            <div class="h-[1px] bg-gray-50 mx-4 my-1"></div>

            <a href="support.php" class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-2xl transition group cursor-pointer">
                <div class="flex items-center gap-4">
                    <div class="bg-orange-50 text-orange-500 w-11 h-11 flex items-center justify-center rounded-full group-hover:scale-105 transition-transform"><i class="fa-solid fa-headset"></i></div>
                    <span class="font-semibold text-gray-700 text-sm">Help & Support</span>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-300 text-sm"></i>
            </a>
        </div>

        <a href="logout.php" class="mt-8 flex items-center justify-center gap-2 w-full bg-red-50 hover:bg-red-500 text-red-600 hover:text-white font-bold py-4 rounded-2xl shadow-sm transition-all active:scale-95 group">
            <i class="fa-solid fa-arrow-right-from-bracket group-hover:-translate-x-1 transition-transform"></i> Secure Logout
        </a>
    </div>

</div>
</body>
</html>