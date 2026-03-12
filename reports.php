<?php
// reports.php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require_once 'classes/Database.php';
$db = (new Database())->connect();
$user_id = $_SESSION['user_id'];

// Database theke ajker real-time aggregate data ber kora
// Ekhane CURDATE() use kora hoyeche shudhu ajker data anar jonno
$query = "SELECT 
            SUM(amount) as total_sale,
            COUNT(id) as total_trx,
            SUM(CASE WHEN type='flexiload' THEN amount ELSE 0 END) as flexiload_sale,
            SUM(CASE WHEN type='drive' THEN amount ELSE 0 END) as drive_sale,
            SUM(CASE WHEN type='bill_pay' THEN amount ELSE 0 END) as bill_sale
          FROM transactions 
          WHERE user_id = :user_id 
          AND status = 'success' 
          AND type != 'add_fund'
          AND DATE(created_at) = CURDATE()";

$stmt = $db->prepare($query);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
$report = $stmt->fetch(PDO::FETCH_ASSOC);

// Data assign kora, jodi null thake tahole 0 hobe
$total_sale = $report['total_sale'] ?? 0;
$flexiload_sale = $report['flexiload_sale'] ?? 0;
$drive_sale = $report['drive_sale'] ?? 0;
$bill_sale = $report['bill_sale'] ?? 0;
$total_trx = $report['total_trx'] ?? 0;

// Profit calculate kora (Dhore nilam locally 2.5% profit margin telecom er jonno)
$profit = $total_sale * 0.025; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Reports - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>body { font-family: 'Poppins', sans-serif; background-color: #f8fafc; }</style>
</head>
<body>
<div class="max-w-[480px] mx-auto bg-gray-50 min-h-screen shadow-2xl pb-20 relative">
    
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-5 pt-8 pb-20 rounded-b-[40px] relative shadow-lg overflow-hidden">
        <div class="absolute -right-10 -top-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
        <div class="absolute -left-10 -bottom-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>

        <div class="flex items-center justify-between text-white relative z-10">
            <a href="index.php" class="bg-white/20 hover:bg-white/30 w-10 h-10 flex items-center justify-center rounded-full backdrop-blur-sm transition"><i class="fa-solid fa-arrow-left"></i></a>
            <h1 class="font-bold text-lg">Daily Report</h1>
            <div class="bg-white/20 w-10 h-10 flex items-center justify-center rounded-full backdrop-blur-sm"><i class="fa-solid fa-calendar-days"></i></div>
        </div>
        
        <div class="text-center text-white mt-8 relative z-10">
            <p class="text-xs text-blue-100 uppercase tracking-widest font-semibold mb-1">Today's Total Sale</p>
            <h2 class="text-5xl font-bold tracking-tight">৳ <?= number_format($total_sale, 2) ?></h2>
        </div>
    </div>

    <div class="px-5 -mt-10 space-y-4 relative z-20">
        
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-5 rounded-3xl shadow-lg border border-gray-100 flex items-center gap-4 hover:-translate-y-1 transition-transform">
                <div class="w-12 h-12 bg-green-50 text-green-500 rounded-full flex items-center justify-center text-xl border border-green-100"><i class="fa-solid fa-chart-line"></i></div>
                <div>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Profit</p>
                    <p class="text-lg font-bold text-gray-800">৳ <?= number_format($profit, 2) ?></p>
                </div>
            </div>
            <div class="bg-white p-5 rounded-3xl shadow-lg border border-gray-100 flex items-center gap-4 hover:-translate-y-1 transition-transform">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-full flex items-center justify-center text-xl border border-orange-100"><i class="fa-solid fa-mobile-screen"></i></div>
                <div>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Recharges</p>
                    <p class="text-lg font-bold text-gray-800"><?= $total_trx ?> Pcs</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-md p-6 border border-gray-100 mt-2">
            <h3 class="font-bold text-gray-800 mb-5 text-sm uppercase tracking-wider border-b border-gray-50 pb-3"><i class="fa-solid fa-chart-pie mr-2 text-blue-500"></i>Sale Breakdown</h3>
            
            <div class="space-y-4">
                <div class="flex justify-between items-center group">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center group-hover:bg-blue-500 group-hover:text-white transition-colors"><i class="fa-solid fa-mobile-screen-button text-xs"></i></div>
                        <span class="text-sm font-semibold text-gray-600">Flexiload</span>
                    </div>
                    <span class="font-bold text-gray-800 text-base">৳ <?= number_format($flexiload_sale, 2) ?></span>
                </div>
                
                <div class="h-px bg-gray-50 w-full"></div>
                
                <div class="flex justify-between items-center group">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-red-50 text-red-500 flex items-center justify-center group-hover:bg-red-500 group-hover:text-white transition-colors"><i class="fa-solid fa-bolt text-xs"></i></div>
                        <span class="text-sm font-semibold text-gray-600">Drive Packs</span>
                    </div>
                    <span class="font-bold text-gray-800 text-base">৳ <?= number_format($drive_sale, 2) ?></span>
                </div>

                <div class="h-px bg-gray-50 w-full"></div>
                
                <div class="flex justify-between items-center group">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-yellow-50 text-yellow-500 flex items-center justify-center group-hover:bg-yellow-500 group-hover:text-white transition-colors"><i class="fa-regular fa-lightbulb text-xs"></i></div>
                        <span class="text-sm font-semibold text-gray-600">Bill Pay</span>
                    </div>
                    <span class="font-bold text-gray-800 text-base">৳ <?= number_format($bill_sale, 2) ?></span>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>