<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-[Poppins]">
<div class="max-w-[480px] mx-auto bg-gray-50 min-h-screen shadow-2xl pb-20">
    <div class="bg-blue-600 px-5 pt-6 pb-16 rounded-b-[40px] relative">
        <div class="flex items-center justify-between text-white">
            <a href="index.php" class="hover:bg-white/20 p-2 rounded-full transition"><i class="fa-solid fa-chevron-left"></i></a>
            <h1 class="font-bold text-lg">Daily Report</h1>
            <i class="fa-solid fa-calendar-days p-2"></i>
        </div>
        <div class="text-center text-white mt-6">
            <p class="text-sm text-blue-200">Today's Total Sale</p>
            <h2 class="text-4xl font-bold mt-1">৳ 12,450</h2>
        </div>
    </div>

    <div class="px-5 -mt-8 space-y-4">
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-2xl shadow-md border border-gray-100 flex items-center gap-3">
                <div class="w-10 h-10 bg-green-100 text-green-500 rounded-full flex items-center justify-center text-lg"><i class="fa-solid fa-chart-line"></i></div>
                <div>
                    <p class="text-[10px] text-gray-500 font-bold uppercase">Profit</p>
                    <p class="text-sm font-bold text-gray-800">৳ 450.00</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-2xl shadow-md border border-gray-100 flex items-center gap-3">
                <div class="w-10 h-10 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center text-lg"><i class="fa-solid fa-mobile-screen"></i></div>
                <div>
                    <p class="text-[10px] text-gray-500 font-bold uppercase">Recharges</p>
                    <p class="text-sm font-bold text-gray-800">124 Pcs</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm p-5 border border-gray-100">
            <h3 class="font-bold text-gray-700 mb-3 text-sm">Sale Breakdown</h3>
            <div class="space-y-3">
                <div class="flex justify-between items-center border-b border-gray-50 pb-2">
                    <span class="text-sm text-gray-600">Flexiload</span>
                    <span class="font-bold text-gray-800">৳ 2,450</span>
                </div>
                <div class="flex justify-between items-center border-b border-gray-50 pb-2">
                    <span class="text-sm text-gray-600">Drive Packs</span>
                    <span class="font-bold text-gray-800">৳ 8,000</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-600">Bill Pay</span>
                    <span class="font-bold text-gray-800">৳ 2,000</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>