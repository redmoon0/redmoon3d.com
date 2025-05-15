<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }
    if ($password != $confirm_password) {
        die("Passwords donot match");
    }
    if (strlen($password) < 6) {
        die("Password must be at least 6 characters.");
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
    try {
        $stmt->execute([$username, $email, $hash]);
        echo "Registration successful. <a href='log_in_data.php'>Login</a>";
    } catch (PDOException $e) {
        if ($e->errorInfo[1] == 1062) {
            echo "Username or email already exists.";
        } else {
            echo "Registration failed.";
        }
    }
}
?>
