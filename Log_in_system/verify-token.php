<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'dp.php';

$input = json_decode(file_get_contents("php://input"), true);
$id_token = $input['token'] ?? null;

if (!$id_token) {
    echo json_encode(['success' => false, 'error' => 'No token']);
    exit;
}

$response = file_get_contents("https://oauth2.googleapis.com/tokeninfo?id_token=" . $id_token);
$userInfo = json_decode($response, true);
file_put_contents("debug.txt", print_r($userInfo, true));

if (isset($userInfo['email'])) {
    $email = $userInfo['email'];
    $username = $userInfo['name'];

    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() === 0) {
        $insert = $pdo->prepare("INSERT INTO users (username, password_hash, email) VALUES (?, '', ?)");
        $insert->execute([$username, $email]);
    }

    echo json_encode(['success' => true, 'email' => $email, 'name' => $username]);
} else {
    echo json_encode(['success' => false, 'error' => 'Google token invalid']);
}
?>