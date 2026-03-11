<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-[Poppins]">
<div class="max-w-[480px] mx-auto bg-gray-50 min-h-screen">
    
    <div class="bg-blue-600 px-5 pt-8 pb-20 rounded-b-[40px] relative">
        <a href="index.php" class="absolute top-5 left-5 text-white hover:bg-white/20 p-2 rounded-full transition"><i class="fa-solid fa-arrow-left"></i></a>
        <h1 class="text-center text-white font-bold text-lg">My Profile</h1>
    </div>

    <div class="px-5 -mt-12">
        <div class="bg-white rounded-3xl p-6 shadow-lg border border-gray-100 flex flex-col items-center">
            <div class="w-20 h-20 rounded-full border-4 border-white shadow-md -mt-16 bg-blue-100 overflow-hidden">
                <img src="https://ui-avatars.com/api/?name=Raj&size=150&background=random" class="w-full h-full object-cover">
            </div>
            <h2 class="font-bold text-xl text-gray-800 mt-3">Raj Ahmad</h2>
            <p class="text-gray-500 text-sm">01608664308</p>
            <span class="mt-2 bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">Verified User</span>
        </div>
    </div>

    <div class="p-5 space-y-3 mt-2">
        <h3 class="text-xs font-bold text-gray-400 uppercase ml-2 mb-2">Account Settings</h3>
        
        <div class="bg-white rounded-2xl p-2 shadow-sm border border-gray-100">
            <a href="#" class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-xl transition">
                <div class="flex items-center gap-4">
                    <div class="bg-blue-50 text-blue-500 w-10 h-10 flex items-center justify-center rounded-full"><i class="fa-solid fa-lock"></i></div>
                    <span class="font-medium text-gray-700 text-sm">Change PIN / Password</span>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-300 text-sm"></i>
            </a>
            <div class="h-[1px] bg-gray-50 mx-4"></div>
            <a href="#" class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-xl transition">
                <div class="flex items-center gap-4">
                    <div class="bg-purple-50 text-purple-500 w-10 h-10 flex items-center justify-center rounded-full"><i class="fa-solid fa-shield-halved"></i></div>
                    <span class="font-medium text-gray-700 text-sm">Two-Step Verification</span>
                </div>
                <i class="fa-solid fa-chevron-right text-gray-300 text-sm"></i>
            </a>
        </div>

        <a href="#" class="mt-6 flex items-center justify-center gap-2 w-full bg-red-50 hover:bg-red-100 text-red-600 font-bold py-4 rounded-2xl transition">
            <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
        </a>
    </div>

</div>
</body>
</html>