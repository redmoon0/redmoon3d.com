<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredOtp = trim($_POST['otp']);
    
    if (!isset($_SESSION['pending_user'])) {
        die("Session expired. Please register again.");
    }

    $user = $_SESSION['pending_user'];

    // Check OTP and expiry
    if ($user['otp'] != $enteredOtp) {
        die("Incorrect OTP.");
    }

    if (time() > $user['otp_expires']) {
        unset($_SESSION['pending_user']);
        die("OTP expired. Please register again.");
    }

    // Insert user into DB now
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash, is_verified) VALUES (?, ?, ?, 1)");
    $stmt->execute([$user['username'], $user['email'], $user['password_hash']]);


    if(isset($_SESSION['post_signup_redirect'])){
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->execute([$user['username']]);
        $user = $stmt->fetch();
        
        $address = $_SESSION['post_signup_redirect'];

        $_SESSION['user_id'] = $user['id'];
        unset($_SESSION['pending_user']);
        header("location: $address");
    }

    // Clean session
    unset($_SESSION['pending_user']);

    if(!isset($_SESSION['post_signup_redirect'])){
        echo "Registration successful. You may <a href='log_in_data.php'>log in</a>.";
    }
    exit;
}
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Verify OTP</title>

    <style>
      body {
        background-color: #121212;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }

      .card {
        border: none;
        border-radius: 1rem;
        background-color: #1e1e1e;
      }

      .form-control {
        background-color: #2c2c2c;
        border: 1px solid #444;
        color: #fff;
      }

      .form-control::placeholder {
        color: #aaa;
      }

      .form-control:focus {
        background-color: #2c2c2c;
        color: #fff;
        border-color: #0d6efd;
        box-shadow: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="card shadow-lg">
            <div class="card-body p-5 text-center">
              <h2 class="card-title mb-3 text-light">Enter OTP</h2>
              <p class="text-muted mb-4">Please enter the OTP sent to your email address.</p>
              <form method="POST">
                <div class="mb-3">
                  <input type="text" name="otp" class="form-control form-control-lg text-center" placeholder="Enter OTP" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100">Verify</button>
              </form>
              <!-- <div class="mt-4">
                <small class="text-muted">Didn't receive it? <a href="#" class="text-decoration-none">Resend OTP</a></small>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


