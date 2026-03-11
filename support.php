<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-[Poppins]">
<div class="max-w-[480px] mx-auto bg-gray-50 min-h-screen shadow-2xl relative pb-20">
    
    <div class="sticky top-0 bg-white z-50 px-5 py-4 border-b border-gray-100 flex items-center">
        <a href="index.php" class="mr-4 text-gray-700 hover:text-blue-600"><i class="fa-solid fa-chevron-left text-xl"></i></a>
        <h1 class="font-bold text-lg text-gray-800">Help & Support</h1>
    </div>

    <div class="p-5 space-y-6">
        <div class="grid grid-cols-2 gap-4">
            <a href="https://wa.me/8801XXXXXXXXX" class="bg-green-50 border border-green-200 p-4 rounded-2xl flex flex-col items-center justify-center shadow-sm hover:bg-green-100 transition">
                <i class="fa-brands fa-whatsapp text-3xl text-green-500 mb-2"></i>
                <span class="font-semibold text-green-700 text-sm">WhatsApp</span>
            </a>
            <a href="tel:+8801XXXXXXXXX" class="bg-blue-50 border border-blue-200 p-4 rounded-2xl flex flex-col items-center justify-center shadow-sm hover:bg-blue-100 transition">
                <i class="fa-solid fa-phone-volume text-3xl text-blue-500 mb-2"></i>
                <span class="font-semibold text-blue-700 text-sm">Call Us</span>
            </a>
        </div>

        <div class="bg-white p-5 rounded-3xl shadow-md border border-gray-100">
            <h2 class="font-bold text-gray-800 mb-4"><i class="fa-solid fa-headset mr-2 text-blue-600"></i> Submit a Complaint</h2>
            <form class="space-y-4">
                <div>
                    <label class="text-xs font-semibold text-gray-500 ml-1">Issue Type</label>
                    <select class="w-full mt-1 p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        <option>Flexiload Pending</option>
                        <option>Drive Not Received</option>
                        <option>Add Fund Problem</option>
                        <option>Others</option>
                    </select>
                </div>
                <div>
                    <label class="text-xs font-semibold text-gray-500 ml-1">Transaction ID / Number</label>
                    <input type="text" placeholder="e.g. 017XXXXXX or TrxID" class="w-full mt-1 p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div>
                    <label class="text-xs font-semibold text-gray-500 ml-1">Message</label>
                    <textarea rows="3" placeholder="Describe your issue..." class="w-full mt-1 p-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                </div>
                <button type="button" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 rounded-xl shadow-md transition">
                    Submit Ticket
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>