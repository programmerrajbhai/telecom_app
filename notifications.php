<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Notifications</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; }</style>
</head>
<body>
<div class="max-w-[480px] mx-auto bg-gray-50 min-h-screen shadow-2xl relative pb-10">
    
    <div class="sticky top-0 bg-white/80 backdrop-blur-md z-50 px-5 py-4 border-b border-gray-100 flex items-center justify-between">
        <div class="flex items-center">
            <a href="index.php" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-50 hover:bg-gray-100 transition">
                <i class="fa-solid fa-chevron-left text-gray-700"></i>
            </a>
            <h1 class="ml-4 font-bold text-lg text-gray-800">Notifications</h1>
        </div>
        <button class="text-xs font-semibold text-blue-600 hover:text-blue-800 transition">
            Mark all as read
        </button>
    </div>

    <div class="p-5 space-y-3">
        
        <div class="bg-blue-50/50 p-4 rounded-2xl border border-blue-100 shadow-sm flex items-start gap-4 relative cursor-pointer hover:bg-blue-50 transition">
            <div class="absolute top-4 right-4 w-2 h-2 bg-blue-600 rounded-full"></div>
            <div class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0 mt-1">
                <i class="fa-solid fa-shield-halved text-xl"></i>
            </div>
            <div class="pr-4">
                <h3 class="font-bold text-gray-800 text-sm">Security Alert</h3>
                <p class="text-xs text-gray-600 mt-1 leading-relaxed">Your account was logged in from a new device (Chrome on Windows). If this wasn't you, please change your PIN immediately.</p>
                <p class="text-[10px] text-gray-400 font-medium mt-2"><i class="fa-regular fa-clock mr-1"></i> Just now</p>
            </div>
        </div>

        <div class="bg-blue-50/50 p-4 rounded-2xl border border-blue-100 shadow-sm flex items-start gap-4 relative cursor-pointer hover:bg-blue-50 transition">
            <div class="absolute top-4 right-4 w-2 h-2 bg-blue-600 rounded-full"></div>
            <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-purple-500 to-pink-500 text-white flex items-center justify-center flex-shrink-0 mt-1">
                <i class="fa-solid fa-gift text-xl"></i>
            </div>
            <div class="pr-4">
                <h3 class="font-bold text-gray-800 text-sm">Flash Sale Alert! 🚀</h3>
                <p class="text-xs text-gray-600 mt-1 leading-relaxed">Get 50GB GP Drive pack at only ৳299. Offer valid for the next 2 hours. Hurry up!</p>
                <p class="text-[10px] text-gray-400 font-medium mt-2"><i class="fa-regular fa-clock mr-1"></i> 30 mins ago</p>
            </div>
        </div>

        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mt-6 mb-2 ml-1">Earlier</p>

        <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-4 cursor-pointer hover:shadow-md transition">
            <div class="w-12 h-12 rounded-full bg-green-50 text-green-500 flex items-center justify-center flex-shrink-0 mt-1">
                <i class="fa-solid fa-circle-check text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-gray-800 text-sm">Add Fund Successful</h3>
                <p class="text-xs text-gray-600 mt-1 leading-relaxed">৳ 1,000 has been successfully added to your balance via bKash. TrxID: 8J92HS7X.</p>
                <p class="text-[10px] text-gray-400 font-medium mt-2"><i class="fa-regular fa-clock mr-1"></i> Yesterday, 08:30 PM</p>
            </div>
        </div>

        <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-4 cursor-pointer hover:shadow-md transition">
            <div class="w-12 h-12 rounded-full bg-orange-50 text-orange-500 flex items-center justify-center flex-shrink-0 mt-1">
                <i class="fa-solid fa-paper-plane text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-gray-800 text-sm">Money Transferred</h3>
                <p class="text-xs text-gray-600 mt-1 leading-relaxed">You have successfully transferred ৳ 500 to 017XXXXXX (Abdur Rahim).</p>
                <p class="text-[10px] text-gray-400 font-medium mt-2"><i class="fa-regular fa-clock mr-1"></i> 12 Oct, 10:15 AM</p>
            </div>
        </div>

        <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-4 cursor-pointer hover:shadow-md transition">
            <div class="w-12 h-12 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center flex-shrink-0 mt-1">
                <i class="fa-solid fa-bullhorn text-xl"></i>
            </div>
            <div>
                <h3 class="font-bold text-gray-800 text-sm">Server Maintenance</h3>
                <p class="text-xs text-gray-600 mt-1 leading-relaxed">Dear user, bKash add fund service will be unavailable tonight from 12 AM to 2 AM due to server maintenance.</p>
                <p class="text-[10px] text-gray-400 font-medium mt-2"><i class="fa-regular fa-clock mr-1"></i> 10 Oct, 04:00 PM</p>
            </div>
        </div>

    </div>
</div>
</body>
</html>