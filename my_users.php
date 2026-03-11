<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>My Users</title>
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
            <h1 class="ml-4 font-bold text-lg text-gray-800">My Users</h1>
        </div>
        <button class="w-10 h-10 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-100 transition">
            <i class="fa-solid fa-user-plus"></i>
        </button>
    </div>

    <div class="p-5 space-y-4">
        <div class="relative">
            <i class="fa-solid fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
            <input type="text" placeholder="Search user by phone or name..." class="w-full pl-11 pr-4 py-3 bg-white border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
        </div>

        <div class="space-y-3">
            <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between hover:shadow-md transition cursor-pointer">
                <div class="flex items-center gap-3">
                    <img src="https://ui-avatars.com/api/?name=Rahim&background=random" class="w-12 h-12 rounded-full border-2 border-blue-100">
                    <div>
                        <h3 class="font-bold text-gray-800 text-sm">Abdur Rahim</h3>
                        <p class="text-xs text-gray-500">017XXXXXXXX</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-sm font-bold text-blue-600">৳ 1,250.00</p>
                    <span class="text-[10px] bg-green-100 text-green-600 px-2 py-0.5 rounded-full font-bold uppercase">Active</span>
                </div>
            </div>

            <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between hover:shadow-md transition cursor-pointer">
                <div class="flex items-center gap-3">
                    <img src="https://ui-avatars.com/api/?name=Karim&background=random" class="w-12 h-12 rounded-full border-2 border-gray-100 opacity-70">
                    <div>
                        <h3 class="font-bold text-gray-800 text-sm">Abdul Karim</h3>
                        <p class="text-xs text-gray-500">019XXXXXXXX</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-sm font-bold text-gray-600">৳ 0.00</p>
                    <span class="text-[10px] bg-red-100 text-red-600 px-2 py-0.5 rounded-full font-bold uppercase">Inactive</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>