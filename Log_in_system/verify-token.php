<?php
// Get the token sent from JS
$input = json_decode(file_get_contents("php://input"), true);
$id_token = $input['token'];

// Send the token to Google to verify it
$response = file_get_contents("https://oauth2.googleapis.com/tokeninfo?id_token=" . $id_token);
$user = json_decode($response, true);

if (isset($user['email'])) {
    echo json_encode([
        'success' => true,
        'email' => $user['email'],
        'name' => $user['name']
    ]);
} else {
    echo json_encode(['success' => false]);
}
?>
