<?php
// index.php
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

$user_id = $_SESSION['user_id'];
$userData = $userObj->getUserDetails($user_id);

// User er nam jodi database e thake, na thakle default 'User'
$display_name = !empty($userData['name']) ? $userData['name'] : 'User';
$first_name = explode(' ', trim($display_name))[0]; // Shudhu vikkotir prothom nam dekhabe
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Paikary Telecom Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; }
        .app-container { max-width: 480px; margin: 0 auto; background-color: #f8fafc; min-height: 100vh; position: relative; padding-bottom: 90px;}
        .glass-header { background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255, 255, 255, 0.4); }
        .premium-shadow { box-shadow: 0 10px 40px -10px rgba(0,0,0,0.08); }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body>

<div class="app-container shadow-2xl">
    
    <div class="glass-header sticky top-0 z-50 px-5 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <div class="w-11 h-11 rounded-full bg-gradient-to-tr from-blue-600 to-purple-600 p-[2px] shadow-md">
                <img src="https://ui-avatars.com/api/?name=<?= urlencode($display_name) ?>&background=ffffff&color=2563eb&bold=true" class="rounded-full w-full h-full border-2 border-white object-cover" alt="Profile">
            </div>
            <div>
                <p class="text-[11px] text-gray-500 font-medium uppercase tracking-wider">Welcome back</p>
                <h1 class="font-bold text-gray-800 leading-tight text-lg"><?= htmlspecialchars($first_name) ?></h1>
            </div>
        </div>
        <a href="notifications.php" class="relative p-2 bg-white rounded-full shadow-sm text-gray-600 hover:text-blue-600 border border-gray-100 transition">
            <i class="fa-regular fa-bell text-lg"></i>
            <span class="absolute top-0 right-0 flex h-3 w-3">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-3 w-3 border-2 border-white bg-red-500"></span>
            </span>
        </a>
    </div>

    <div class="px-5 mt-5 space-y-6">
        
        <div class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-700 rounded-3xl p-6 text-white premium-shadow relative overflow-hidden">
            <div class="absolute -right-6 -top-6 w-32 h-32 bg-white opacity-10 rounded-full blur-2xl"></div>
            <div class="absolute -left-6 -bottom-6 w-32 h-32 bg-pink-400 opacity-20 rounded-full blur-2xl"></div>
            
            <div class="flex justify-between items-start mb-6 relative z-10">
                <div>
                    <p class="text-blue-100 text-xs font-medium mb-1 uppercase tracking-wide">Main Balance</p>
                    <div class="flex items-center gap-2">
                        <h2 class="text-3xl font-bold tracking-tight">৳ <?= number_format($userData['balance'], 2) ?></h2>
                        <button class="w-6 h-6 rounded-full bg-white/20 flex items-center justify-center hover:bg-white/30 transition"><i class="fa-solid fa-rotate-right text-xs"></i></button>
                    </div>
                </div>
                <div class="bg-white/20 backdrop-blur-md px-3 py-1 rounded-full border border-white/30 shadow-inner">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-white"><i class="fa-solid fa-star text-yellow-300 mr-1"></i> <?= htmlspecialchars($userData['role']) ?></span>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-3 relative z-10">
                <a href="add_fund.php" class="flex flex-col items-center justify-center space-y-2 bg-white/10 hover:bg-white/20 transition rounded-2xl py-3 border border-white/10 backdrop-blur-sm">
                    <i class="fa-solid fa-wallet text-lg"></i>
                    <span class="text-[10px] font-medium">Add Fund</span>
                </a>
                <a href="transfer.php" class="flex flex-col items-center justify-center space-y-2 bg-white/10 hover:bg-white/20 transition rounded-2xl py-3 border border-white/10 backdrop-blur-sm">
                    <i class="fa-solid fa-paper-plane text-lg"></i>
                    <span class="text-[10px] font-medium">Transfer</span>
                </a>
                <a href="history.php" class="flex flex-col items-center justify-center space-y-2 bg-white/10 hover:bg-white/20 transition rounded-2xl py-3 border border-white/10 backdrop-blur-sm">
                    <i class="fa-solid fa-clock-rotate-left text-lg"></i>
                    <span class="text-[10px] font-medium">History</span>
                </a>
                <a href="my_users.php" class="flex flex-col items-center justify-center space-y-2 bg-white/10 hover:bg-white/20 transition rounded-2xl py-3 border border-white/10 backdrop-blur-sm">
                    <i class="fa-solid fa-users text-lg"></i>
                    <span class="text-[10px] font-medium">My Users</span>
                </a>
            </div>
        </div>

        <div>
            <div class="flex justify-between items-end mb-4">
                <h3 class="font-bold text-gray-800 text-lg">Special Offers</h3>
            </div>
            
            <div class="grid grid-cols-4 gap-4">
                <a href="drive_pack.php?type=internet" class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-14 h-14 bg-gradient-to-tr from-teal-400 to-teal-500 rounded-[18px] premium-shadow flex items-center justify-center group-hover:-translate-y-1 transition-transform border border-teal-200">
                        <i class="fa-solid fa-wifi text-2xl text-white"></i>
                    </div>
                    <span class="text-[11px] text-gray-700 font-semibold text-center">Internet</span>
                </a>
                
                <a href="drive_pack.php?type=minute" class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-14 h-14 bg-gradient-to-tr from-orange-400 to-orange-500 rounded-[18px] premium-shadow flex items-center justify-center group-hover:-translate-y-1 transition-transform border border-orange-200">
                        <i class="fa-solid fa-phone-volume text-2xl text-white"></i>
                    </div>
                    <span class="text-[11px] text-gray-700 font-semibold text-center">Minute</span>
                </a>

                <a href="drive_pack.php?type=bundle" class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-14 h-14 bg-gradient-to-tr from-purple-400 to-purple-500 rounded-[18px] premium-shadow flex items-center justify-center group-hover:-translate-y-1 transition-transform border border-purple-200">
                        <i class="fa-solid fa-layer-group text-2xl text-white"></i>
                    </div>
                    <span class="text-[11px] text-gray-700 font-semibold text-center">Bundle</span>
                </a>

                <a href="drive_pack.php?type=drive" class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-14 h-14 bg-gradient-to-tr from-red-400 to-red-500 rounded-[18px] premium-shadow flex items-center justify-center group-hover:-translate-y-1 transition-transform border border-red-200 relative">
                        <span class="absolute -top-1 -right-1 bg-yellow-400 text-xs text-white rounded-full w-4 h-4 flex items-center justify-center border border-white"><i class="fa-solid fa-fire text-[8px]"></i></span>
                        <i class="fa-solid fa-bolt text-2xl text-white"></i>
                    </div>
                    <span class="text-[11px] text-gray-700 font-semibold text-center">Drive</span>
                </a>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-5 border border-gray-100 shadow-sm">
            <div class="flex justify-between items-end mb-4">
                <h3 class="font-bold text-gray-800 text-base">Essential Services</h3>
                <a href="all_services.php" class="text-blue-600 text-[11px] bg-blue-50 px-3 py-1 rounded-full font-semibold hover:bg-blue-100 transition">View All</a>
            </div>
            
            <div class="grid grid-cols-4 gap-4">
                <a href="flexiload.php" class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform text-blue-500">
                        <i class="fa-solid fa-mobile-screen-button text-xl"></i>
                    </div>
                    <span class="text-[10px] text-gray-600 font-medium text-center">Flexiload</span>
                </a>
                
                <a href="pay_bill.php" class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-12 h-12 bg-yellow-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform text-yellow-500">
                        <i class="fa-regular fa-lightbulb text-xl"></i>
                    </div>
                    <span class="text-[10px] text-gray-600 font-medium text-center">Pay Bill</span>
                </a>

                <a href="drive_pack.php?type=myoffer" class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-12 h-12 bg-pink-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform text-pink-500">
                        <i class="fa-solid fa-gift text-xl"></i>
                    </div>
                    <span class="text-[10px] text-gray-600 font-medium text-center">My Offer</span>
                </a>

                <a href="all_services.php" class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-12 h-12 bg-gray-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform text-gray-500 border border-gray-100">
                        <i class="fa-solid fa-grip text-xl"></i>
                    </div>
                    <span class="text-[10px] text-gray-600 font-medium text-center">More</span>
                </a>
            </div>
        </div>

        <a href="drive_pack.php" class="block rounded-3xl overflow-hidden premium-shadow relative h-36 group">
            <img src="https://images.unsplash.com/photo-1614680376593-902f74cf0d41?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Promo">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-transparent flex items-center p-6">
                <div class="text-white">
                    <span class="bg-red-500 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2 inline-block shadow-lg">Flash Sale</span>
                    <h3 class="font-bold text-lg leading-tight mt-1">Special GP Drive</h3>
                    <p class="text-xs text-blue-100 mt-1">Get 50GB + 1000Min @ ৳499</p>
                </div>
            </div>
            <div class="absolute bottom-3 left-0 w-full flex justify-center space-x-1.5">
                <div class="w-4 h-1.5 bg-white rounded-full"></div>
                <div class="w-1.5 h-1.5 bg-white/50 rounded-full"></div>
                <div class="w-1.5 h-1.5 bg-white/50 rounded-full"></div>
            </div>
        </a>

    </div>

    <div class="fixed bottom-0 w-full max-w-[480px] bg-white border-t border-gray-100 px-6 py-3 flex justify-between items-center z-50 rounded-t-[30px] premium-shadow">
        <a href="index.php" class="flex flex-col items-center text-blue-600">
            <i class="fa-solid fa-house text-xl mb-1"></i>
            <span class="text-[10px] font-semibold">Home</span>
        </a>
        <a href="reports.php" class="flex flex-col items-center text-gray-400 hover:text-blue-600 transition">
            <i class="fa-solid fa-chart-pie text-xl mb-1"></i>
            <span class="text-[10px] font-medium">Reports</span>
        </a>
        
        <div class="relative -top-7">
            <a href="scan_qr.php" class="w-14 h-14 bg-gradient-to-tr from-blue-600 to-indigo-600 rounded-full text-white flex items-center justify-center shadow-xl shadow-blue-500/40 border-[5px] border-[#f8fafc] hover:-translate-y-1 transition-transform">
                <i class="fa-solid fa-qrcode text-xl"></i>
            </a>
        </div>

        <a href="support.php" class="flex flex-col items-center text-gray-400 hover:text-blue-600 transition">
            <i class="fa-solid fa-headset text-xl mb-1"></i>
            <span class="text-[10px] font-medium">Support</span>
        </a>
        <a href="profile.php" class="flex flex-col items-center text-gray-400 hover:text-blue-600 transition">
            <i class="fa-regular fa-user text-xl mb-1"></i>
            <span class="text-[10px] font-medium">Profile</span>
        </a>
    </div>

</div>

</body>
</html>