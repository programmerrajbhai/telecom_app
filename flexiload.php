<?php
// flexiload.php
require 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];
    $user_id = 1; // Logged in user ID
    
    // 1. Check user balance
    $stmt = $pdo->prepare("SELECT balance FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch();

    if ($user['balance'] >= $amount) {
        // 2. Deduct Balance
        $new_balance = $user['balance'] - $amount;
        $update = $pdo->prepare("UPDATE users SET balance = ? WHERE id = ?");
        $update->execute([$new_balance, $user_id]);

        // 3. Record Transaction
        $insert = $pdo->prepare("INSERT INTO transactions (user_id, type, amount, status) VALUES (?, 'flexiload', ?, 'success')");
        $insert->execute([$user_id, $amount]);

        // 4. EKHANE APNAR TELECOM API CALL KORBEN (cURL use kore)
        // Example: call_telecom_api($phone, $amount);

        $message = "Flexiload Success to $phone!";
    } else {
        $message = "Insufficient Balance!";
    }
}
?>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-5">
    <div class="max-w-md mx-auto bg-white p-5 rounded-xl shadow">
        <h2 class="text-xl font-bold mb-4">Flexiload</h2>
        <?php if($message) echo "<p class='mb-3 text-red-500 font-bold'>$message</p>"; ?>
        <form method="POST">
            <input type="text" name="phone" placeholder="Phone Number" class="w-full border p-2 mb-3 rounded" required>
            <input type="number" name="amount" placeholder="Amount" class="w-full border p-2 mb-3 rounded" required>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Recharge</button>
        </form>
        <a href="index.php" class="text-blue-500 mt-4 block text-center">Back to Home</a>
    </div>
</body>
</html>