<?php
// index.php
require_once 'classes/Database.php';
require_once 'classes/User.php';

$db = (new Database())->connect();
$userObj = new User($db);

// Fetching dummy user ID 1
$userData = $userObj->getUserDetails(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Premium Telecom App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; }
        .app-container { max-width: 480px; margin: 0 auto; background-color: #f8fafc; min-height: 100vh; position: relative; padding-bottom: 80px;}
        .glass-header { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255, 255, 255, 0.3); }
        .premium-shadow { box-shadow: 0 10px 40px -10px rgba(0,0,0,0.08); }
        .no-scrollbar::-webkit-scrollbar { display: none; }
    </style>
</head>
<body>

<div class="app-container shadow-2xl">
    
    <div class="glass-header sticky top-0 z-50 px-5 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-blue-600 to-purple-600 p-[2px]">
                <img src="https://ui-avatars.com/api/?name=Raj&background=ffffff&color=2563eb" class="rounded-full w-full h-full border-2 border-white" alt="Profile">
            </div>
            <div>
                <p class="text-xs text-gray-500 font-medium">Welcome back,</p>
                <h1 class="font-bold text-gray-800 leading-tight">Paikary Telecom</h1>
            </div>
        </div>
        <button class="relative p-2 text-gray-600 hover:text-blue-600 transition">
            <i class="fa-regular fa-bell text-xl"></i>
            <span class="absolute top-1 right-1 flex h-2.5 w-2.5">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-red-500"></span>
            </span>
        </button>
    </div>

    <div class="px-5 mt-4 space-y-6">
        
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-3xl p-6 text-white premium-shadow relative overflow-hidden">
            <div class="absolute -right-10 -top-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
            
            <div class="flex justify-between items-start mb-6 relative z-10">
                <div>
                    <p class="text-blue-100 text-sm font-medium mb-1">Total Balance</p>
                    <h2 class="text-3xl font-bold tracking-tight">৳ <?= number_format($userData['balance'], 2) ?></h2>
                </div>
                <div class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full border border-white/30">
                    <span class="text-xs font-semibold uppercase tracking-wider text-white"><?= htmlspecialchars($userData['role']) ?></span>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-3 relative z-10">
                <button class="flex flex-col items-center justify-center space-y-2 bg-white/10 hover:bg-white/20 transition rounded-2xl py-3 border border-white/10">
                    <i class="fa-solid fa-plus text-lg"></i>
                    <span class="text-[10px] font-medium">Add Fund</span>
                </button>
                <button class="flex flex-col items-center justify-center space-y-2 bg-white/10 hover:bg-white/20 transition rounded-2xl py-3 border border-white/10">
                    <i class="fa-solid fa-paper-plane text-lg"></i>
                    <span class="text-[10px] font-medium">Transfer</span>
                </button>
                <button class="flex flex-col items-center justify-center space-y-2 bg-white/10 hover:bg-white/20 transition rounded-2xl py-3 border border-white/10">
                    <i class="fa-solid fa-clock-rotate-left text-lg"></i>
                    <span class="text-[10px] font-medium">History</span>
                </button>
                <button class="flex flex-col items-center justify-center space-y-2 bg-white/10 hover:bg-white/20 transition rounded-2xl py-3 border border-white/10">
                    <i class="fa-solid fa-users text-lg"></i>
                    <span class="text-[10px] font-medium">My Users</span>
                </button>
            </div>
        </div>

        <div>
            <div class="flex justify-between items-end mb-4">
                <h3 class="font-bold text-gray-800 text-lg">Services</h3>
                <a href="#" class="text-blue-600 text-xs font-semibold hover:underline">View All</a>
            </div>
            
            <div class="grid grid-cols-4 gap-4">
                <div class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-14 h-14 bg-white rounded-2xl premium-shadow flex items-center justify-center group-hover:scale-105 transition-transform border border-gray-100">
                        <i class="fa-solid fa-mobile-screen-button text-2xl text-blue-500"></i>
                    </div>
                    <span class="text-xs text-gray-600 font-medium text-center">Flexiload</span>
                </div>
                
                <div class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-14 h-14 bg-white rounded-2xl premium-shadow flex items-center justify-center group-hover:scale-105 transition-transform border border-gray-100">
                        <i class="fa-solid fa-bolt text-2xl text-orange-500"></i>
                    </div>
                    <span class="text-xs text-gray-600 font-medium text-center">Drive Pack</span>
                </div>

                <div class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-14 h-14 bg-white rounded-2xl premium-shadow flex items-center justify-center group-hover:scale-105 transition-transform border border-gray-100">
                        <i class="fa-solid fa-wifi text-2xl text-teal-500"></i>
                    </div>
                    <span class="text-xs text-gray-600 font-medium text-center">Internet</span>
                </div>

                <div class="flex flex-col items-center space-y-2 group cursor-pointer">
                    <div class="w-14 h-14 bg-white rounded-2xl premium-shadow flex items-center justify-center group-hover:scale-105 transition-transform border border-gray-100">
                        <i class="fa-solid fa-file-invoice-dollar text-2xl text-purple-500"></i>
                    </div>
                    <span class="text-xs text-gray-600 font-medium text-center">Pay Bill</span>
                </div>
            </div>
        </div>

        <div class="rounded-3xl overflow-hidden premium-shadow relative h-36">
            <img src="https://images.unsplash.com/photo-1614680376593-902f74cf0d41?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover" alt="Promo">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-transparent flex items-center p-6">
                <div class="text-white">
                    <span class="bg-red-500 text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider mb-2 inline-block">Flash Sale</span>
                    <h3 class="font-bold text-lg leading-tight">Special Drive Pack</h3>
                    <p class="text-xs text-gray-200 mt-1">Get 50GB @ ৳299 only!</p>
                </div>
            </div>
        </div>

    </div>

    <div class="fixed bottom-0 w-full max-w-[480px] bg-white border-t border-gray-100 px-6 py-3 flex justify-between items-center z-50 rounded-t-3xl premium-shadow">
        <a href="#" class="flex flex-col items-center text-blue-600">
            <i class="fa-solid fa-house text-xl mb-1"></i>
            <span class="text-[10px] font-medium">Home</span>
        </a>
        <a href="#" class="flex flex-col items-center text-gray-400 hover:text-blue-600 transition">
            <i class="fa-solid fa-chart-pie text-xl mb-1"></i>
            <span class="text-[10px] font-medium">Reports</span>
        </a>
        
        <div class="relative -top-6">
            <button class="w-14 h-14 bg-blue-600 rounded-full text-white flex items-center justify-center shadow-lg shadow-blue-500/40 border-4 border-[#f8fafc] hover:scale-105 transition-transform">
                <i class="fa-solid fa-qrcode text-2xl"></i>
            </button>
        </div>

        <a href="#" class="flex flex-col items-center text-gray-400 hover:text-blue-600 transition">
            <i class="fa-solid fa-headset text-xl mb-1"></i>
            <span class="text-[10px] font-medium">Support</span>
        </a>
        <a href="#" class="flex flex-col items-center text-gray-400 hover:text-blue-600 transition">
            <i class="fa-solid fa-user text-xl mb-1"></i>
            <span class="text-[10px] font-medium">Profile</span>
        </a>
    </div>

</div>

</body>
</html>