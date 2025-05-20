<?php
require_once 'dp.php';

// Get token from JS
$input = json_decode(file_get_contents("php://input"), true);
$id_token = $input['token'];

// Verify token with Google
$response = file_get_contents("https://oauth2.googleapis.com/tokeninfo?id_token=" . $id_token);
$userInfo = json_decode($response, true);

if (isset($userInfo['email'])) {
    $email = $userInfo['email'];
    $username = $userInfo['name'];

    // Check if user exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() === 0) {
        // Insert new Google user
        $insert = $pdo->prepare("INSERT INTO users (username, password_hash, email) VALUES (?, '', ?)");
        $insert->execute([$username, $email]);
    }

    echo json_encode([
        'success' => true,
        'email' => $email,
        'name' => $username
    ]);
} else {
    echo json_encode(['success' => false]);
}
