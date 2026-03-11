<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Bill</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-[Poppins]">
<div class="max-w-[480px] mx-auto bg-gray-50 min-h-screen shadow-2xl">
    <div class="sticky top-0 bg-white z-50 px-5 py-4 border-b border-gray-100 flex items-center">
        <a href="index.php" class="mr-4 text-gray-700 hover:text-blue-600"><i class="fa-solid fa-chevron-left text-xl"></i></a>
        <h1 class="font-bold text-lg text-gray-800">Pay Bill</h1>
    </div>

    <div class="p-5">
        <h2 class="text-sm font-bold text-gray-500 uppercase mb-4">Select Biller Category</h2>
        
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center justify-center cursor-pointer hover:border-yellow-400 hover:shadow-md transition">
                <i class="fa-regular fa-lightbulb text-4xl text-yellow-500 mb-2"></i>
                <span class="font-semibold text-gray-700">Electricity</span>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center justify-center cursor-pointer hover:border-blue-400 hover:shadow-md transition">
                <i class="fa-solid fa-fire-burner text-4xl text-blue-500 mb-2"></i>
                <span class="font-semibold text-gray-700">Gas</span>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center justify-center cursor-pointer hover:border-cyan-400 hover:shadow-md transition">
                <i class="fa-solid fa-faucet-drip text-4xl text-cyan-500 mb-2"></i>
                <span class="font-semibold text-gray-700">Water</span>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center justify-center cursor-pointer hover:border-purple-400 hover:shadow-md transition">
                <i class="fa-solid fa-globe text-4xl text-purple-500 mb-2"></i>
                <span class="font-semibold text-gray-700">Internet</span>
            </div>
        </div>
    </div>
</div>
</body>
</html>