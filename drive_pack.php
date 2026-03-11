<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Drive Packs - Wholesale</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        /* Smooth fade in for filtered items */
        .fade-in { animation: fadeIn 0.3s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(5px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-[#f8fafc] font-[Poppins]">
<div class="max-w-[480px] mx-auto bg-white min-h-screen shadow-2xl">
    
    <div class="sticky top-0 bg-white/90 backdrop-blur-md z-50 px-5 py-4 border-b border-gray-100 flex items-center justify-between">
        <div class="flex items-center">
            <a href="index.php" class="mr-4 text-gray-700 hover:text-blue-600 transition"><i class="fa-solid fa-chevron-left text-xl"></i></a>
            <h1 class="font-bold text-lg text-gray-800">Special Drives</h1>
        </div>
        <i class="fa-solid fa-filter text-blue-600 cursor-pointer p-2 bg-blue-50 rounded-full"></i>
    </div>

    <div class="flex overflow-x-auto px-5 py-3 gap-3 no-scrollbar border-b border-gray-50" id="filter-buttons">
        <button data-filter="all" class="filter-btn active-btn px-5 py-2 rounded-full bg-blue-600 text-white text-sm font-semibold whitespace-nowrap shadow-md shadow-blue-500/30 transition">All</button>
        <button data-filter="gp" class="filter-btn px-5 py-2 rounded-full bg-gray-50 border border-gray-200 text-gray-600 text-sm font-medium whitespace-nowrap hover:bg-gray-100 transition">GP</button>
        <button data-filter="airtel" class="filter-btn px-5 py-2 rounded-full bg-gray-50 border border-gray-200 text-gray-600 text-sm font-medium whitespace-nowrap hover:bg-gray-100 transition">Airtel</button>
        <button data-filter="robi" class="filter-btn px-5 py-2 rounded-full bg-gray-50 border border-gray-200 text-gray-600 text-sm font-medium whitespace-nowrap hover:bg-gray-100 transition">Robi</button>
        <button data-filter="banglalink" class="filter-btn px-5 py-2 rounded-full bg-gray-50 border border-gray-200 text-gray-600 text-sm font-medium whitespace-nowrap hover:bg-gray-100 transition">Banglalink</button>
    </div>

    <div class="p-5 space-y-4 pb-10" id="offer-list">
        
        <div class="offer-card gp border border-blue-100 bg-gradient-to-r from-blue-50 to-white rounded-2xl p-4 shadow-sm relative overflow-hidden group hover:shadow-md transition cursor-pointer">
            <div class="absolute top-0 right-0 bg-blue-500 text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">GP • Bundle</div>
            <div class="flex justify-between items-center mt-2">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">30 GB + 500 Min</h3>
                    <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-clock mr-1"></i>30 Days</p>
                    <p class="text-[10px] bg-blue-100 text-blue-700 px-2 py-0.5 rounded-md font-semibold mt-2 inline-block">Hot Offer</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm line-through">৳ 599</p>
                    <p class="text-blue-600 font-bold text-3xl">৳ 180</p>
                </div>
            </div>
            <button class="w-full mt-4 bg-blue-50 text-blue-600 border border-blue-100 hover:bg-blue-500 hover:text-white font-semibold py-2 rounded-xl transition">Buy Now</button>
        </div>

        <div class="offer-card gp border border-blue-100 bg-gradient-to-r from-blue-50 to-white rounded-2xl p-4 shadow-sm relative overflow-hidden group hover:shadow-md transition cursor-pointer">
            <div class="absolute top-0 right-0 bg-blue-500 text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">GP • Internet</div>
            <div class="flex justify-between items-center mt-2">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">40 GB Internet</h3>
                    <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-clock mr-1"></i>30 Days</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm line-through">৳ 499</p>
                    <p class="text-blue-600 font-bold text-3xl">৳ 150</p>
                </div>
            </div>
            <button class="w-full mt-4 bg-blue-50 text-blue-600 border border-blue-100 hover:bg-blue-500 hover:text-white font-semibold py-2 rounded-xl transition">Buy Now</button>
        </div>

        <div class="offer-card gp border border-blue-100 bg-gradient-to-r from-blue-50 to-white rounded-2xl p-4 shadow-sm relative overflow-hidden group hover:shadow-md transition cursor-pointer">
            <div class="absolute top-0 right-0 bg-blue-500 text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">GP • Minute</div>
            <div class="flex justify-between items-center mt-2">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">1000 Minutes</h3>
                    <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-clock mr-1"></i>30 Days</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm line-through">৳ 609</p>
                    <p class="text-blue-600 font-bold text-3xl">৳ 220</p>
                </div>
            </div>
            <button class="w-full mt-4 bg-blue-50 text-blue-600 border border-blue-100 hover:bg-blue-500 hover:text-white font-semibold py-2 rounded-xl transition">Buy Now</button>
        </div>

        <div class="offer-card airtel border border-red-100 bg-gradient-to-r from-red-50 to-white rounded-2xl p-4 shadow-sm relative overflow-hidden group hover:shadow-md transition cursor-pointer">
            <div class="absolute top-0 right-0 bg-red-500 text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">Airtel • Internet</div>
            <div class="flex justify-between items-center mt-2">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">15 GB Internet</h3>
                    <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-clock mr-1"></i>30 Days</p>
                    <p class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded-md font-semibold mt-2 inline-block">Best Seller</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm line-through">৳ 299</p>
                    <p class="text-red-600 font-bold text-3xl">৳ 100</p>
                </div>
            </div>
            <button class="w-full mt-4 bg-red-50 text-red-600 border border-red-100 hover:bg-red-500 hover:text-white font-semibold py-2 rounded-xl transition">Buy Now</button>
        </div>

        <div class="offer-card airtel border border-red-100 bg-gradient-to-r from-red-50 to-white rounded-2xl p-4 shadow-sm relative overflow-hidden group hover:shadow-md transition cursor-pointer">
            <div class="absolute top-0 right-0 bg-red-500 text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">Airtel • Bundle</div>
            <div class="flex justify-between items-center mt-2">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">50 GB + 1000 Min</h3>
                    <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-clock mr-1"></i>30 Days</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm line-through">৳ 799</p>
                    <p class="text-red-600 font-bold text-3xl">৳ 320</p>
                </div>
            </div>
            <button class="w-full mt-4 bg-red-50 text-red-600 border border-red-100 hover:bg-red-500 hover:text-white font-semibold py-2 rounded-xl transition">Buy Now</button>
        </div>

        <div class="offer-card airtel border border-red-100 bg-gradient-to-r from-red-50 to-white rounded-2xl p-4 shadow-sm relative overflow-hidden group hover:shadow-md transition cursor-pointer">
            <div class="absolute top-0 right-0 bg-red-500 text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">Airtel • SMS</div>
            <div class="flex justify-between items-center mt-2">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">500 SMS</h3>
                    <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-clock mr-1"></i>30 Days</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm line-through">৳ 30</p>
                    <p class="text-red-600 font-bold text-3xl">৳ 10</p>
                </div>
            </div>
            <button class="w-full mt-4 bg-red-50 text-red-600 border border-red-100 hover:bg-red-500 hover:text-white font-semibold py-2 rounded-xl transition">Buy Now</button>
        </div>

        <div class="offer-card robi border border-red-200 bg-gradient-to-r from-red-50 to-white rounded-2xl p-4 shadow-sm relative overflow-hidden group hover:shadow-md transition cursor-pointer">
            <div class="absolute top-0 right-0 bg-red-600 text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">Robi • Bundle</div>
            <div class="flex justify-between items-center mt-2">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">40 GB + 800 Min</h3>
                    <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-clock mr-1"></i>30 Days</p>
                    <p class="text-[10px] bg-red-100 text-red-700 px-2 py-0.5 rounded-md font-semibold mt-2 inline-block">Flash Offer</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm line-through">৳ 699</p>
                    <p class="text-red-600 font-bold text-3xl">৳ 280</p>
                </div>
            </div>
            <button class="w-full mt-4 bg-red-50 text-red-600 border border-red-100 hover:bg-red-600 hover:text-white font-semibold py-2 rounded-xl transition">Buy Now</button>
        </div>

        <div class="offer-card robi border border-red-200 bg-gradient-to-r from-red-50 to-white rounded-2xl p-4 shadow-sm relative overflow-hidden group hover:shadow-md transition cursor-pointer">
            <div class="absolute top-0 right-0 bg-red-600 text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">Robi • Internet</div>
            <div class="flex justify-between items-center mt-2">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">20 GB Internet</h3>
                    <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-clock mr-1"></i>30 Days</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm line-through">৳ 349</p>
                    <p class="text-red-600 font-bold text-3xl">৳ 110</p>
                </div>
            </div>
            <button class="w-full mt-4 bg-red-50 text-red-600 border border-red-100 hover:bg-red-600 hover:text-white font-semibold py-2 rounded-xl transition">Buy Now</button>
        </div>

        <div class="offer-card banglalink border border-orange-100 bg-gradient-to-r from-orange-50 to-white rounded-2xl p-4 shadow-sm relative overflow-hidden group hover:shadow-md transition cursor-pointer">
            <div class="absolute top-0 right-0 bg-orange-500 text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">Banglalink • Bundle</div>
            <div class="flex justify-between items-center mt-2">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">25 GB + 500 Min</h3>
                    <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-clock mr-1"></i>30 Days</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm line-through">৳ 499</p>
                    <p class="text-orange-600 font-bold text-3xl">৳ 170</p>
                </div>
            </div>
            <button class="w-full mt-4 bg-orange-50 text-orange-600 border border-orange-100 hover:bg-orange-500 hover:text-white font-semibold py-2 rounded-xl transition">Buy Now</button>
        </div>

        <div class="offer-card banglalink border border-orange-100 bg-gradient-to-r from-orange-50 to-white rounded-2xl p-4 shadow-sm relative overflow-hidden group hover:shadow-md transition cursor-pointer">
            <div class="absolute top-0 right-0 bg-orange-500 text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">Banglalink • Internet</div>
            <div class="flex justify-between items-center mt-2">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg">10 GB Internet</h3>
                    <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-clock mr-1"></i>30 Days</p>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm line-through">৳ 199</p>
                    <p class="text-orange-600 font-bold text-3xl">৳ 80</p>
                </div>
            </div>
            <button class="w-full mt-4 bg-orange-50 text-orange-600 border border-orange-100 hover:bg-orange-500 hover:text-white font-semibold py-2 rounded-xl transition">Buy Now</button>
        </div>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const offerCards = document.querySelectorAll('.offer-card');

        // Initial styling classes for active and inactive buttons
        const activeClasses = ['bg-blue-600', 'text-white', 'shadow-md', 'shadow-blue-500/30'];
        const inactiveClasses = ['bg-gray-50', 'border', 'border-gray-200', 'text-gray-600'];

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // 1. Remove active state from all buttons
                filterBtns.forEach(b => {
                    b.classList.remove(...activeClasses);
                    b.classList.add(...inactiveClasses);
                });

                // 2. Add active state to the clicked button
                this.classList.remove(...inactiveClasses);
                this.classList.add(...activeClasses);

                // 3. Get the filter value (e.g., 'all', 'gp', 'airtel')
                const filterValue = this.getAttribute('data-filter');

                // 4. Show/Hide cards based on filter
                offerCards.forEach(card => {
                    // Remove animation class to re-trigger it
                    card.classList.remove('fade-in');

                    if (filterValue === 'all' || card.classList.contains(filterValue)) {
                        card.style.display = 'block';
                        // Add small delay to trigger CSS animation smoothly
                        setTimeout(() => card.classList.add('fade-in'), 10);
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>

</body>
</html>