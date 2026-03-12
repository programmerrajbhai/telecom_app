<?php
// drive_pack.php - 100% Dynamic with 50+ Offers

// Database er bodole PHP Array use kora holo (Future e eta database theke asbe)
// Types: internet, minute, bundle, sms
// my_offer: true/false
$offers = [
    // ================== MY OFFERS (Super Cheap Deals) ==================
    ['op' => 'gp', 'type' => 'bundle', 'title' => '50 GB + 1000 Min', 'val' => '30 Days', 'reg' => '899', 'off' => '399', 'badge' => 'My Offer', 'my_offer' => true],
    ['op' => 'airtel', 'type' => 'internet', 'title' => '40 GB Secret Deal', 'val' => '30 Days', 'reg' => '499', 'off' => '150', 'badge' => 'Special', 'my_offer' => true],
    ['op' => 'robi', 'type' => 'minute', 'title' => '2000 Minutes', 'val' => '30 Days', 'reg' => '1200', 'off' => '380', 'badge' => 'My Offer', 'my_offer' => true],
    ['op' => 'banglalink', 'type' => 'bundle', 'title' => '100 GB + 2000 Min', 'val' => '30 Days', 'reg' => '1499', 'off' => '650', 'badge' => 'VIP', 'my_offer' => true],
    ['op' => 'gp', 'type' => 'internet', 'title' => '20 GB (Night)', 'val' => '7 Days', 'reg' => '250', 'off' => '55', 'badge' => 'My Offer', 'my_offer' => true],
    ['op' => 'airtel', 'type' => 'bundle', 'title' => '25 GB + 500 Min', 'val' => '30 Days', 'reg' => '599', 'off' => '190', 'badge' => 'Hot', 'my_offer' => true],
    ['op' => 'robi', 'type' => 'internet', 'title' => '50 GB Internet', 'val' => '30 Days', 'reg' => '699', 'off' => '220', 'badge' => 'My Offer', 'my_offer' => true],
    
    // ================== GP OFFERS (14 items) ==================
    ['op' => 'gp', 'type' => 'internet', 'title' => '10 GB Internet', 'val' => '7 Days', 'reg' => '169', 'off' => '95', 'badge' => '', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'internet', 'title' => '30 GB Internet', 'val' => '30 Days', 'reg' => '399', 'off' => '280', 'badge' => 'Hit', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'internet', 'title' => '50 GB Internet', 'val' => '30 Days', 'reg' => '599', 'off' => '380', 'badge' => '', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'internet', 'title' => '100 GB Internet', 'val' => '30 Days', 'reg' => '999', 'off' => '650', 'badge' => 'Pro', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'minute', 'title' => '100 Minutes', 'val' => '7 Days', 'reg' => '75', 'off' => '45', 'badge' => '', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'minute', 'title' => '300 Minutes', 'val' => '30 Days', 'reg' => '199', 'off' => '130', 'badge' => '', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'minute', 'title' => '500 Minutes', 'val' => '30 Days', 'reg' => '309', 'off' => '210', 'badge' => '', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'minute', 'title' => '1000 Minutes', 'val' => '30 Days', 'reg' => '609', 'off' => '450', 'badge' => 'Best Value', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'bundle', 'title' => '10 GB + 200 Min', 'val' => '30 Days', 'reg' => '299', 'off' => '190', 'badge' => '', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'bundle', 'title' => '30 GB + 500 Min', 'val' => '30 Days', 'reg' => '599', 'off' => '350', 'badge' => 'Drive', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'bundle', 'title' => '40 GB + 800 Min', 'val' => '30 Days', 'reg' => '799', 'off' => '480', 'badge' => 'Drive', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'bundle', 'title' => '80 GB + 1500 Min', 'val' => '30 Days', 'reg' => '1299', 'off' => '750', 'badge' => 'Mega', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'sms', 'title' => '500 SMS', 'val' => '30 Days', 'reg' => '30', 'off' => '15', 'badge' => '', 'my_offer' => false],
    ['op' => 'gp', 'type' => 'sms', 'title' => '1000 SMS', 'val' => '30 Days', 'reg' => '50', 'off' => '25', 'badge' => '', 'my_offer' => false],

    // ================== AIRTEL OFFERS (12 items) ==================
    ['op' => 'airtel', 'type' => 'internet', 'title' => '15 GB Internet', 'val' => '30 Days', 'reg' => '250', 'off' => '130', 'badge' => 'Sale', 'my_offer' => false],
    ['op' => 'airtel', 'type' => 'internet', 'title' => '30 GB Internet', 'val' => '30 Days', 'reg' => '399', 'off' => '190', 'badge' => '', 'my_offer' => false],
    ['op' => 'airtel', 'type' => 'internet', 'title' => '60 GB Internet', 'val' => '30 Days', 'reg' => '699', 'off' => '310', 'badge' => 'Drive', 'my_offer' => false],
    ['op' => 'airtel', 'type' => 'minute', 'title' => '200 Minutes', 'val' => '30 Days', 'reg' => '130', 'off' => '80', 'badge' => '', 'my_offer' => false],
    ['op' => 'airtel', 'type' => 'minute', 'title' => '500 Minutes', 'val' => '30 Days', 'reg' => '310', 'off' => '170', 'badge' => '', 'my_offer' => false],
    ['op' => 'airtel', 'type' => 'minute', 'title' => '1000 Minutes', 'val' => '30 Days', 'reg' => '609', 'off' => '340', 'badge' => 'Hot', 'my_offer' => false],
    ['op' => 'airtel', 'type' => 'bundle', 'title' => '20 GB + 400 Min', 'val' => '30 Days', 'reg' => '450', 'off' => '230', 'badge' => '', 'my_offer' => false],
    ['op' => 'airtel', 'type' => 'bundle', 'title' => '40 GB + 800 Min', 'val' => '30 Days', 'reg' => '699', 'off' => '380', 'badge' => 'Drive', 'my_offer' => false],
    ['op' => 'airtel', 'type' => 'bundle', 'title' => '50 GB + 1000 Min', 'val' => '30 Days', 'reg' => '799', 'off' => '450', 'badge' => 'Mega', 'my_offer' => false],
    ['op' => 'airtel', 'type' => 'bundle', 'title' => '100 GB + 2000 Min', 'val' => '30 Days', 'reg' => '1499', 'off' => '750', 'badge' => 'Pro', 'my_offer' => false],
    ['op' => 'airtel', 'type' => 'sms', 'title' => '1000 SMS', 'val' => '30 Days', 'reg' => '40', 'off' => '15', 'badge' => '', 'my_offer' => false],
    ['op' => 'airtel', 'type' => 'sms', 'title' => '2000 SMS', 'val' => '30 Days', 'reg' => '70', 'off' => '25', 'badge' => '', 'my_offer' => false],

    // ================== ROBI OFFERS (12 items) ==================
    ['op' => 'robi', 'type' => 'internet', 'title' => '20 GB Internet', 'val' => '30 Days', 'reg' => '349', 'off' => '160', 'badge' => '', 'my_offer' => false],
    ['op' => 'robi', 'type' => 'internet', 'title' => '40 GB Internet', 'val' => '30 Days', 'reg' => '499', 'off' => '240', 'badge' => 'Hit', 'my_offer' => false],
    ['op' => 'robi', 'type' => 'internet', 'title' => '80 GB Internet', 'val' => '30 Days', 'reg' => '899', 'off' => '410', 'badge' => 'Drive', 'my_offer' => false],
    ['op' => 'robi', 'type' => 'minute', 'title' => '300 Minutes', 'val' => '30 Days', 'reg' => '195', 'off' => '110', 'badge' => '', 'my_offer' => false],
    ['op' => 'robi', 'type' => 'minute', 'title' => '800 Minutes', 'val' => '30 Days', 'reg' => '480', 'off' => '270', 'badge' => '', 'my_offer' => false],
    ['op' => 'robi', 'type' => 'minute', 'title' => '1500 Minutes', 'val' => '30 Days', 'reg' => '899', 'off' => '450', 'badge' => 'Mega', 'my_offer' => false],
    ['op' => 'robi', 'type' => 'bundle', 'title' => '25 GB + 500 Min', 'val' => '30 Days', 'reg' => '549', 'off' => '250', 'badge' => '', 'my_offer' => false],
    ['op' => 'robi', 'type' => 'bundle', 'title' => '40 GB + 800 Min', 'val' => '30 Days', 'reg' => '699', 'off' => '360', 'badge' => 'Drive', 'my_offer' => false],
    ['op' => 'robi', 'type' => 'bundle', 'title' => '60 GB + 1200 Min', 'val' => '30 Days', 'reg' => '999', 'off' => '520', 'badge' => 'Pro', 'my_offer' => false],
    ['op' => 'robi', 'type' => 'bundle', 'title' => '100 GB + 2000 Min', 'val' => '30 Days', 'reg' => '1499', 'off' => '780', 'badge' => 'Max', 'my_offer' => false],
    ['op' => 'robi', 'type' => 'sms', 'title' => '500 SMS', 'val' => '30 Days', 'reg' => '25', 'off' => '10', 'badge' => '', 'my_offer' => false],
    ['op' => 'robi', 'type' => 'sms', 'title' => '1500 SMS', 'val' => '30 Days', 'reg' => '60', 'off' => '20', 'badge' => '', 'my_offer' => false],

    // ================== BANGLALINK OFFERS (10 items) ==================
    ['op' => 'banglalink', 'type' => 'internet', 'title' => '15 GB Internet', 'val' => '30 Days', 'reg' => '249', 'off' => '120', 'badge' => '', 'my_offer' => false],
    ['op' => 'banglalink', 'type' => 'internet', 'title' => '30 GB Internet', 'val' => '30 Days', 'reg' => '399', 'off' => '180', 'badge' => 'Hit', 'my_offer' => false],
    ['op' => 'banglalink', 'type' => 'internet', 'title' => '50 GB Internet', 'val' => '30 Days', 'reg' => '599', 'off' => '290', 'badge' => 'Drive', 'my_offer' => false],
    ['op' => 'banglalink', 'type' => 'minute', 'title' => '400 Minutes', 'val' => '30 Days', 'reg' => '240', 'off' => '130', 'badge' => '', 'my_offer' => false],
    ['op' => 'banglalink', 'type' => 'minute', 'title' => '1000 Minutes', 'val' => '30 Days', 'reg' => '599', 'off' => '320', 'badge' => 'Hot', 'my_offer' => false],
    ['op' => 'banglalink', 'type' => 'bundle', 'title' => '20 GB + 400 Min', 'val' => '30 Days', 'reg' => '449', 'off' => '220', 'badge' => '', 'my_offer' => false],
    ['op' => 'banglalink', 'type' => 'bundle', 'title' => '40 GB + 800 Min', 'val' => '30 Days', 'reg' => '699', 'off' => '350', 'badge' => 'Drive', 'my_offer' => false],
    ['op' => 'banglalink', 'type' => 'bundle', 'title' => '80 GB + 1500 Min', 'val' => '30 Days', 'reg' => '1199', 'off' => '590', 'badge' => 'Mega', 'my_offer' => false],
    ['op' => 'banglalink', 'type' => 'sms', 'title' => '1000 SMS', 'val' => '30 Days', 'reg' => '40', 'off' => '15', 'badge' => '', 'my_offer' => false],
    ['op' => 'banglalink', 'type' => 'sms', 'title' => '2500 SMS', 'val' => '30 Days', 'reg' => '80', 'off' => '25', 'badge' => '', 'my_offer' => false],
];

// Helper Function for dynamic styling
function getOpStyles($op) {
    if($op == 'gp') return ['color' => 'blue', 'name' => 'GP'];
    if($op == 'airtel') return ['color' => 'red', 'name' => 'Airtel'];
    if($op == 'robi') return ['color' => 'red', 'name' => 'Robi'];
    if($op == 'banglalink') return ['color' => 'orange', 'name' => 'BL'];
    return ['color' => 'gray', 'name' => 'Any'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Drive Packs & Offers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .fade-in { animation: fadeIn 0.4s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-[#f8fafc] font-[Poppins]">
<div class="max-w-[480px] mx-auto bg-white min-h-screen shadow-2xl relative">
    
    <div class="sticky top-0 bg-white/95 backdrop-blur-md z-50 px-5 py-4 border-b border-gray-100 flex items-center justify-between">
        <div class="flex items-center">
            <a href="index.php" class="mr-4 text-gray-700 hover:text-blue-600 transition"><i class="fa-solid fa-chevron-left text-xl"></i></a>
            <h1 id="page-title" class="font-bold text-lg text-gray-800">Special Drives</h1>
        </div>
        <div class="text-xs font-bold text-blue-600 bg-blue-50 px-3 py-1 rounded-full"><span id="offer-count"><?= count($offers) ?></span> Offers</div>
    </div>

    <div class="flex overflow-x-auto px-5 py-3 gap-3 no-scrollbar border-b border-gray-50 bg-white z-40" id="filter-buttons">
        <button data-filter="all" class="filter-btn active-btn px-5 py-2 rounded-full bg-blue-600 text-white text-sm font-semibold whitespace-nowrap shadow-md shadow-blue-500/30 transition">All Offers</button>
        <button data-filter="gp" class="filter-btn px-5 py-2 rounded-full bg-gray-50 border border-gray-200 text-gray-600 text-sm font-medium whitespace-nowrap hover:bg-gray-100 transition">GP</button>
        <button data-filter="airtel" class="filter-btn px-5 py-2 rounded-full bg-gray-50 border border-gray-200 text-gray-600 text-sm font-medium whitespace-nowrap hover:bg-gray-100 transition">Airtel</button>
        <button data-filter="robi" class="filter-btn px-5 py-2 rounded-full bg-gray-50 border border-gray-200 text-gray-600 text-sm font-medium whitespace-nowrap hover:bg-gray-100 transition">Robi</button>
        <button data-filter="banglalink" class="filter-btn px-5 py-2 rounded-full bg-gray-50 border border-gray-200 text-gray-600 text-sm font-medium whitespace-nowrap hover:bg-gray-100 transition">Banglalink</button>
    </div>

    <div class="p-5 space-y-4 pb-10" id="offer-list">
        
        <?php foreach($offers as $offer): 
            $style = getOpStyles($offer['op']);
            $color = $style['color'];
            $myOfferData = $offer['my_offer'] ? 'true' : 'false';
            
            // Adjusting Robi's color mapping in Tailwind (using red-600 for robi, red-500 for airtel)
            $bgBadge = $offer['op'] == 'robi' ? 'bg-red-600' : "bg-{$color}-500";
            $textPrice = $offer['op'] == 'robi' ? 'text-red-600' : "text-{$color}-600";
        ?>
        
        <div class="offer-card border border-<?= $color ?>-100 bg-gradient-to-r from-<?= $color ?>-50 to-white rounded-2xl p-4 shadow-sm relative overflow-hidden group hover:shadow-md transition cursor-pointer" 
             data-operator="<?= $offer['op'] ?>" 
             data-type="<?= $offer['type'] ?>" 
             data-myoffer="<?= $myOfferData ?>">
            
            <div class="absolute top-0 right-0 <?= $bgBadge ?> text-white text-[10px] font-bold px-3 py-1 rounded-bl-xl uppercase tracking-wider">
                <?= $style['name'] ?> <?= $offer['type'] == 'sms' ? 'SMS' : ucfirst($offer['type']) ?>
            </div>

            <div class="flex justify-between items-center mt-2">
                <div>
                    <h3 class="font-bold text-gray-800 text-lg leading-tight"><?= $offer['title'] ?></h3>
                    <p class="text-xs text-gray-500 mt-1"><i class="fa-regular fa-clock mr-1"></i><?= $offer['val'] ?> Validity</p>
                    
                    <?php if(!empty($offer['badge'])): ?>
                        <p class="text-[10px] bg-<?= $color ?>-100 text-<?= $color ?>-700 px-2 py-0.5 rounded-md font-semibold mt-2 inline-block">
                            <?= $offer['badge'] ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="text-right">
                    <p class="text-gray-400 text-sm line-through">৳ <?= $offer['reg'] ?></p>
                    <p class="<?= $textPrice ?> font-bold text-3xl">৳ <?= $offer['off'] ?></p>
                </div>
            </div>
            <button class="w-full mt-4 bg-<?= $color ?>-50 text-<?= $color ?>-600 border border-<?= $color ?>-100 hover:bg-<?= $color ?>-500 hover:text-white font-semibold py-2.5 rounded-xl transition">
                Buy Now
            </button>
        </div>

        <?php endforeach; ?>

        <div id="no-offers" class="hidden text-center py-10">
            <i class="fa-solid fa-box-open text-4xl text-gray-300 mb-3"></i>
            <p class="text-gray-500 font-medium">No offers found for this category.</p>
        </div>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const offerCards = document.querySelectorAll('.offer-card');
        const noOffersMsg = document.getElementById('no-offers');
        const offerCountSpan = document.getElementById('offer-count');
        const pageTitle = document.getElementById('page-title');

        // Check URL parameter (e.g. ?type=internet)
        const urlParams = new URLSearchParams(window.location.search);
        const urlType = urlParams.get('type') || 'all'; 

        // Update Page Title based on URL
        if(urlType !== 'all') {
            if(urlType === 'myoffer') {
                pageTitle.innerText = "Exclusive My Offers";
            } else {
                pageTitle.innerText = urlType.charAt(0).toUpperCase() + urlType.slice(1) + " Offers";
            }
        }

        // Active class utility
        const activeClasses = ['bg-blue-600', 'text-white', 'shadow-md', 'shadow-blue-500/30'];
        const inactiveClasses = ['bg-gray-50', 'border', 'border-gray-200', 'text-gray-600'];

        // Core Filter Function
        function applyFilters(selectedOp) {
            let visibleCount = 0;

            offerCards.forEach(card => {
                card.classList.remove('fade-in');
                
                const cardOp = card.getAttribute('data-operator');
                const cardType = card.getAttribute('data-type');
                const isMyOffer = card.getAttribute('data-myoffer') === 'true';

                // Condition 1: Match Operator Tab (All or specific operator)
                let opMatch = (selectedOp === 'all' || selectedOp === cardOp);

                // Condition 2: Match URL Type (All, Internet, Minute, Bundle, SMS, MyOffer, Drive)
                let typeMatch = true;
                if (urlType === 'myoffer') {
                    typeMatch = isMyOffer;
                } else if (urlType === 'drive') {
                    // Drive packs are usually bundles with big data
                    typeMatch = (cardType === 'bundle' || cardType === 'internet'); 
                } else if (urlType !== 'all') {
                    typeMatch = (cardType === urlType);
                }

                // Apply Logic
                if (opMatch && typeMatch) {
                    card.style.display = 'block';
                    visibleCount++;
                    setTimeout(() => card.classList.add('fade-in'), 10);
                } else {
                    card.style.display = 'none';
                }
            });

            // Update UI Counters and Fallback
            offerCountSpan.innerText = visibleCount;
            noOffersMsg.style.display = visibleCount === 0 ? 'block' : 'none';
        }

        // Button Click Event Listeners
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Change UI state
                filterBtns.forEach(b => {
                    b.classList.remove(...activeClasses);
                    b.classList.add(...inactiveClasses);
                });
                this.classList.remove(...inactiveClasses);
                this.classList.add(...activeClasses);

                // Execute Filter
                const selectedOp = this.getAttribute('data-filter');
                applyFilters(selectedOp);
            });
        });

        // Run filter on page load based on "All" operators & URL type
        applyFilters('all');
    });
</script>
</body>
</html>