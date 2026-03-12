<?php
class User {
    private $conn;
    private $table_name = "users";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Get User Details
    public function getUserDetails($id) {
        $query = "SELECT name, phone, balance, role FROM " . $this->table_name . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Register User
    public function register($name, $phone, $pin) {
        // Age check korbo ei number e account ache kina
        $check_query = "SELECT id FROM " . $this->table_name . " WHERE phone = :phone LIMIT 1";
        $check_stmt = $this->conn->prepare($check_query);
        $check_stmt->bindParam(":phone", $phone);
        $check_stmt->execute();
        
        if($check_stmt->rowCount() > 0) {
            return ["status" => "error", "message" => "This phone number is already registered."];
        }

        // Notun user insert korbo
        $query = "INSERT INTO " . $this->table_name . " (name, phone, pin, balance, role) VALUES (:name, :phone, :pin, 0.00, 'subscriber')";
        $stmt = $this->conn->prepare($query);

        // PIN ke hash korbo security er jonno
        $hashed_pin = password_hash($pin, PASSWORD_DEFAULT);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":pin", $hashed_pin);

        if($stmt->execute()) {
            return ["status" => "success", "message" => "Registration successful! Please login."];
        }
        return ["status" => "error", "message" => "Something went wrong!"];
    }

    // Login User
    public function login($phone, $pin) {
        $query = "SELECT id, pin FROM " . $this->table_name . " WHERE phone = :phone LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":phone", $phone);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $row = $stmt->fetch();
            // User er dewa pin er sathe database er hash kora pin melabo
            if(password_verify($pin, $row['pin'])) {
                return $row['id']; // Return User ID
            }
        }
        return false;
    }
}
?>