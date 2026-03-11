<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Transaction History</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; } .no-scrollbar::-webkit-scrollbar { display: none; }</style>
</head>
<body>
<div class="max-w-[480px] mx-auto bg-gray-50 min-h-screen shadow-2xl relative">
    
    <div class="sticky top-0 bg-white z-50 px-5 py-4 border-b border-gray-100 flex items-center">
        <a href="index.php" class="text-gray-700 hover:text-blue-600"><i class="fa-solid fa-arrow-left text-xl"></i></a>
        <h1 class="ml-4 font-bold text-lg text-gray-800">History</h1>
    </div>

    <div class="flex overflow-x-auto px-5 py-3 gap-3 no-scrollbar bg-white border-b border-gray-50">
        <button class="px-5 py-1.5 rounded-full bg-blue-600 text-white text-xs font-semibold whitespace-nowrap shadow-md">All</button>
        <button class="px-5 py-1.5 rounded-full bg-gray-100 text-gray-600 text-xs font-medium whitespace-nowrap">Flexiload</button>
        <button class="px-5 py-1.5 rounded-full bg-gray-100 text-gray-600 text-xs font-medium whitespace-nowrap">Payment</button>
        <button class="px-5 py-1.5 rounded-full bg-gray-100 text-gray-600 text-xs font-medium whitespace-nowrap">Add Fund</button>
    </div>

    <div class="p-5 space-y-3">
        <p class="text-xs text-gray-400 font-bold uppercase mb-2">Today</p>
        
        <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-red-50 text-red-500 flex items-center justify-center"><i class="fa-solid fa-arrow-up"></i></div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">Send Money</h3>
                    <p class="text-[11px] text-gray-500">To: 01608664308 • 10:30 AM</p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-sm font-bold text-gray-800">- ৳ 500.00</p>
                <span class="text-[10px] text-green-500 font-bold">Success</span>
            </div>
        </div>

        <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center"><i class="fa-solid fa-mobile-screen"></i></div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">Flexiload (GP)</h3>
                    <p class="text-[11px] text-gray-500">To: 017XXXXXX • 09:15 AM</p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-sm font-bold text-gray-800">- ৳ 20.00</p>
                <span class="text-[10px] text-green-500 font-bold">Success</span>
            </div>
        </div>

        <p class="text-xs text-gray-400 font-bold uppercase mt-4 mb-2">Yesterday</p>
        <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-green-50 text-green-500 flex items-center justify-center"><i class="fa-solid fa-arrow-down"></i></div>
                <div>
                    <h3 class="font-bold text-gray-800 text-sm">Add Fund (bKash)</h3>
                    <p class="text-[11px] text-gray-500">TrxID: 8J9XXXXX • 08:00 PM</p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-sm font-bold text-green-600">+ ৳ 1000.00</p>
                <span class="text-[10px] text-green-500 font-bold">Success</span>
            </div>
        </div>
    </div>
</div>
</body>
</html>