<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Add Fund</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; }</style>
</head>
<body>
<div class="max-w-[480px] mx-auto bg-white min-h-screen shadow-2xl relative">
    
    <div class="sticky top-0 bg-white/80 backdrop-blur-md z-50 px-5 py-4 border-b border-gray-100 flex items-center">
        <a href="index.php" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-50 hover:bg-gray-100 transition">
            <i class="fa-solid fa-chevron-left text-gray-700"></i>
        </a>
        <h1 class="ml-4 font-bold text-lg text-gray-800">Add Fund</h1>
    </div>

    <div class="p-5 space-y-6">
        <div>
            <label class="text-sm font-medium text-gray-600 mb-2 block">Enter Amount</label>
            <div class="relative">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-2xl font-bold text-blue-600">৳</span>
                <input type="number" placeholder="0.00" class="w-full pl-12 pr-4 py-4 text-2xl font-bold bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition">
            </div>
            <div class="flex gap-2 mt-3">
                <button class="flex-1 py-2 bg-blue-50 text-blue-600 rounded-xl text-sm font-medium border border-blue-100 hover:bg-blue-100">+500</button>
                <button class="flex-1 py-2 bg-blue-50 text-blue-600 rounded-xl text-sm font-medium border border-blue-100 hover:bg-blue-100">+1000</button>
                <button class="flex-1 py-2 bg-blue-50 text-blue-600 rounded-xl text-sm font-medium border border-blue-100 hover:bg-blue-100">+5000</button>
            </div>
        </div>

        <div>
            <label class="text-sm font-medium text-gray-600 mb-3 block">Select Payment Method</label>
            <div class="space-y-3">
                <label class="flex items-center justify-between p-4 border border-gray-200 rounded-2xl cursor-pointer hover:border-pink-500 transition has-[:checked]:border-pink-500 has-[:checked]:bg-pink-50/50">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold text-xs">bKash</div>
                        <span class="font-semibold text-gray-700">bKash Auto</span>
                    </div>
                    <input type="radio" name="method" class="w-5 h-5 accent-pink-500" checked>
                </label>
                
                <label class="flex items-center justify-between p-4 border border-gray-200 rounded-2xl cursor-pointer hover:border-orange-500 transition has-[:checked]:border-orange-500 has-[:checked]:bg-orange-50/50">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-xs">Nagad</div>
                        <span class="font-semibold text-gray-700">Nagad Payment</span>
                    </div>
                    <input type="radio" name="method" class="w-5 h-5 accent-orange-500">
                </label>
            </div>
        </div>

        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-2xl shadow-lg shadow-blue-500/30 transition-transform active:scale-95">
            Proceed to Pay
        </button>
    </div>
</div>
</body>
</html>