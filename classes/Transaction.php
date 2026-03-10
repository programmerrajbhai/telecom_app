<?php
class Transaction {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function processFlexiload($user_id, $phone_number, $amount) {
        try {
            // Start Transaction - Lock the database operations
            $this->conn->beginTransaction();

            // 1. Check current balance securely
            $stmt = $this->conn->prepare("SELECT balance FROM users WHERE id = :id FOR UPDATE");
            $stmt->bindParam(":id", $user_id);
            $stmt->execute();
            $user = $stmt->fetch();

            if ($user['balance'] < $amount) {
                throw new Exception("Insufficient Balance.");
            }

            // 2. Deduct Balance
            $new_balance = $user['balance'] - $amount;
            $updateStmt = $this->conn->prepare("UPDATE users SET balance = :balance WHERE id = :id");
            $updateStmt->bindParam(":balance", $new_balance);
            $updateStmt->bindParam(":id", $user_id);
            $updateStmt->execute();

            // 3. Record the transaction
            $insertStmt = $this->conn->prepare("INSERT INTO transactions (user_id, type, amount, status) VALUES (:id, 'flexiload', :amount, 'processing')");
            $insertStmt->bindParam(":id", $user_id);
            $insertStmt->bindParam(":amount", $amount);
            $insertStmt->execute();
            $transaction_id = $this->conn->lastInsertId();

            // 4. EKHANE APNAR TELECOM API CALL HOBE
            // $api_response = call_telecom_api($phone_number, $amount);
            $api_success = true; // Dummy success

            if (!$api_success) {
                throw new Exception("Telecom Operator API Failed.");
            }

            // Update transaction to success
            $this->conn->exec("UPDATE transactions SET status = 'success' WHERE id = $transaction_id");

            // Commit Transaction - Everything was successful, save to database
            $this->conn->commit();
            return ["status" => "success", "message" => "Flexiload successful to $phone_number"];

        } catch (Exception $e) {
            // Rollback - Something went wrong, revert balance deduction
            $this->conn->rollBack();
            return ["status" => "error", "message" => $e->getMessage()];
        }
    }
}
?>