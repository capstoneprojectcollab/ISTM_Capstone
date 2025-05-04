<?php
$conn = new mysqli("localhost", "nextdatabase", "Springtime!1@2", "playerdatabase");

// Generate a UUID for user_id
function generateUUID() {
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}

$user_id = generateUUID();
$fullName = $_POST['fullName'];
$email = $_POST['registerEmail'];
$password = $_POST['registerPassword'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (user_id, full_name, email, password_hash) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $user_id, $fullName, $email, $hashedPassword);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "Email already registered or error: " . $stmt->error;
}
?>