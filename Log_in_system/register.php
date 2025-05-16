<?php
session_start();
require 'mailer.php';

if (isset($_GET['redirect'])) {
    $_SESSION['post_signup_redirect'] = $_GET['redirect'];
    $address = $_GET['redirect'];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: sign_up_data.php?error=Invalid email format.&redirect=$address");        
        exit();
    }

    if ($password !== $confirm_password) {
        header("Location: sign_up_data.php?error=Password does not match.&redirect=$address");      
        exit();
    }

    if (strlen($password) < 6) {
        header("Location: sign_up_data.php?error=Password must be at least 6 characters.&redirect=$address");    
        exit();
    }

    // Check if username or email already exists
    require 'db.php';
    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $stmt->execute([$username, $email]);
    if ($stmt->fetch()) {
        header("Location: sign_up_data.php?error=Username or email already exists.");
        exit();
    }

    // Hash the password and generate OTP
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $otp = rand(100000, 999999);
    $otp_expires = time() + (10 * 60); // 10 minutes from now

    // Save in session temporarily
    $_SESSION['pending_user'] = [
        'username' => $username,
        'email' => $email,
        'password_hash' => $hashed_password,
        'otp' => $otp,
        'otp_expires' => $otp_expires
    ];

    // Send OTP
    sendOTPEmail($email, $otp);

    // Redirect to verification page
    header("Location: verify.php?redirect=$address");
    exit;
}
?>
