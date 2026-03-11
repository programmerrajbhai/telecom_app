<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Transfer Money</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-[Poppins]">
<div class="max-w-[480px] mx-auto bg-white min-h-screen shadow-2xl">
    
    <div class="px-5 py-4 flex items-center bg-gradient-to-r from-blue-600 to-indigo-700 text-white rounded-b-3xl shadow-lg">
        <a href="index.php" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h1 class="ml-4 font-bold text-lg">Send Money</h1>
    </div>

    <div class="p-5 mt-4 space-y-5">
        <div class="bg-blue-50 border border-blue-100 rounded-2xl p-4 flex items-center gap-3">
            <div class="bg-blue-100 p-2 rounded-full text-blue-600">
                <i class="fa-solid fa-circle-info"></i>
            </div>
            <p class="text-xs text-blue-800">Transfer balance instantly to another user in our network without any fee.</p>
        </div>

        <form class="space-y-4">
            <div>
                <label class="text-sm text-gray-500 font-medium ml-1">Receiver Account (Phone)</label>
                <div class="relative mt-1">
                    <i class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="tel" placeholder="01XXXXXXXXX" class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                </div>
            </div>

            <div>
                <label class="text-sm text-gray-500 font-medium ml-1">Amount</label>
                <div class="relative mt-1">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 font-bold text-gray-500">৳</span>
                    <input type="number" placeholder="100" class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                </div>
            </div>
            
            <div>
                <label class="text-sm text-gray-500 font-medium ml-1">Your App PIN</label>
                <div class="relative mt-1">
                    <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="password" placeholder="••••" class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                </div>
            </div>

            <button type="button" onclick="alert('Transfer Function Active Hobe Backend add korle!')" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 rounded-xl mt-6 shadow-md transition">
                Send Now <i class="fa-solid fa-paper-plane ml-2"></i>
            </button>
        </form>
    </div>
</div>
</body>
</html>