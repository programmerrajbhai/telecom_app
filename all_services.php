<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>All Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; }</style>
</head>
<body>
<div class="max-w-[480px] mx-auto bg-gray-50 min-h-screen shadow-2xl relative pb-10">
    
    <div class="sticky top-0 bg-white/90 backdrop-blur-md z-50 px-5 py-4 border-b border-gray-100 flex items-center justify-between">
        <div class="flex items-center">
            <a href="index.php" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-50 hover:bg-gray-100 transition">
                <i class="fa-solid fa-chevron-left text-gray-700"></i>
            </a>
            <h1 class="ml-4 font-bold text-lg text-gray-800">All Services</h1>
        </div>
    </div>

    <div class="p-5 space-y-6">
        
        <div class="relative">
            <i class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
            <input type="text" id="searchInput" placeholder="Search for a service..." class="w-full pl-11 pr-4 py-3.5 bg-white border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm transition">
        </div>

        <div class="service-category">
            <h2 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-3 ml-1">Mobile Recharge</h2>
            <div class="bg-white p-4 rounded-3xl shadow-sm border border-gray-100 grid grid-cols-4 gap-4">
                <a href="flexiload.php" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="flexiload recharge topup">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-blue-100">
                        <i class="fa-solid fa-mobile-screen-button text-2xl text-blue-600"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Flexiload</span>
                </a>
                
                <a href="drive_pack.php" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="drive pack bundle offer">
                    <div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-red-100">
                        <i class="fa-solid fa-bolt text-2xl text-red-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Drive Pack</span>
                </a>

                <a href="internet.php" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="internet data mb gb">
                    <div class="w-14 h-14 bg-teal-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-teal-100">
                        <i class="fa-solid fa-wifi text-2xl text-teal-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Internet</span>
                </a>

                <a href="drive_pack.php" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="minute talk time">
                    <div class="w-14 h-14 bg-orange-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-orange-100">
                        <i class="fa-solid fa-phone-volume text-2xl text-orange-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Minute</span>
                </a>
            </div>
        </div>

        <div class="service-category">
            <h2 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-3 ml-1">Utility Bills</h2>
            <div class="bg-white p-4 rounded-3xl shadow-sm border border-gray-100 grid grid-cols-4 gap-4">
                <a href="pay_bill.php" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="electricity bill palli bidyut desko">
                    <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-yellow-100">
                        <i class="fa-regular fa-lightbulb text-2xl text-yellow-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Electricity</span>
                </a>
                
                <a href="pay_bill.php" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="gas bill titas">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-blue-100">
                        <i class="fa-solid fa-fire-burner text-2xl text-blue-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Gas Bill</span>
                </a>

                <a href="pay_bill.php" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="water bill wasa">
                    <div class="w-14 h-14 bg-cyan-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-cyan-100">
                        <i class="fa-solid fa-faucet-drip text-2xl text-cyan-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Water</span>
                </a>

                <a href="pay_bill.php" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="internet bill wifi broadband">
                    <div class="w-14 h-14 bg-purple-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-purple-100">
                        <i class="fa-solid fa-globe text-2xl text-purple-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Broadband</span>
                </a>
                
                <a href="pay_bill.php" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="tv cable dish akash dth">
                    <div class="w-14 h-14 bg-indigo-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-indigo-100">
                        <i class="fa-solid fa-tv text-2xl text-indigo-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Akash DTH</span>
                </a>
            </div>
        </div>

        <div class="service-category">
            <h2 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-3 ml-1">Mobile Banking</h2>
            <div class="bg-white p-4 rounded-3xl shadow-sm border border-gray-100 grid grid-cols-4 gap-4">
                <a href="#" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="bkash send money cashout">
                    <div class="w-14 h-14 bg-pink-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-pink-100 border border-pink-100">
                        <i class="fa-solid fa-paper-plane text-2xl text-pink-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">bKash</span>
                </a>
                
                <a href="#" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="nagad send money">
                    <div class="w-14 h-14 bg-orange-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-orange-100 border border-orange-100">
                        <i class="fa-solid fa-money-bill-wave text-2xl text-orange-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Nagad</span>
                </a>

                <a href="#" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="rocket dutch bangla">
                    <div class="w-14 h-14 bg-purple-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-purple-100 border border-purple-100">
                        <i class="fa-solid fa-rocket text-2xl text-purple-600"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Rocket</span>
                </a>
                
                <a href="#" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="upay banking">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-blue-100 border border-blue-100">
                        <div class="w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center font-bold text-xs">U</div>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Upay</span>
                </a>
            </div>
        </div>

        <div class="service-category">
            <h2 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-3 ml-1">Gaming & Topup</h2>
            <div class="bg-white p-4 rounded-3xl shadow-sm border border-gray-100 grid grid-cols-4 gap-4">
                <a href="#" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="free fire diamond topup gaming">
                    <div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-red-100">
                        <i class="fa-solid fa-gem text-2xl text-red-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Free Fire</span>
                </a>
                
                <a href="#" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="pubg uc topup gaming">
                    <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-yellow-100">
                        <i class="fa-solid fa-helmet-un text-2xl text-yellow-600"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">PUBG UC</span>
                </a>

                <a href="#" class="flex flex-col items-center space-y-2 group cursor-pointer service-item" data-name="google play gift card">
                    <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center group-hover:scale-105 transition-transform group-hover:bg-green-100">
                        <i class="fa-brands fa-google-play text-2xl text-green-500"></i>
                    </div>
                    <span class="text-[11px] text-gray-600 font-medium text-center">Google Play</span>
                </a>
            </div>
        </div>

    </div>
</div>

<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        let filter = this.value.toLowerCase();
        let items = document.querySelectorAll('.service-item');
        
        items.forEach(function(item) {
            let searchKeywords = item.getAttribute('data-name').toLowerCase();
            if (searchKeywords.includes(filter)) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>