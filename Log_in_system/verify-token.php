<?php
// Get the token sent from JS
include "db.php"
$input = json_decode(file_get_contents("php://input"), true);
$id_token = $input['token'];

// Send the token to Google to verify it
$response = file_get_contents("https://oauth2.googleapis.com/tokeninfo?id_token=" . $id_token);
$user = json_decode($response, true);

if (isset($user['email'])) {
    $email = $user['email'];
    $name = $user['name'];
    
    if ($conn->connect_error) {
        die(json_encode(['success' => false, 'error' => 'DB connection failed']));
    }

    // 4. Insert or ignore if already exists
    $stmt = $conn->prepare("INSERT IGNORE INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();

    echo json_encode([
        'success' => true,
        'email' => $user['email'],
        'name' => $user['name']
    ]);
} else {
    echo json_encode(['success' => false]);
}
?>
