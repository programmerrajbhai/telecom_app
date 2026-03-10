<?php
// db.php
$host = 'localhost';
$dbname = 'telecom_app';
$username = 'root'; // Apnar database username
$password = ''; // Apnar database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database Connection failed: " . $e->getMessage());
}
?>