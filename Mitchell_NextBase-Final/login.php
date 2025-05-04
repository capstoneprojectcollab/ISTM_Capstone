<?php
// $_SESSION['user_email'] = $email;

$conn = new mysqli("localhost", "nextdatabase", "Springtime!1@2", "playerdatabase");

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT user_id, full_name, password_hash FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    if (password_verify($password, $user['password_hash'])) {
        echo "success";
    } else {
        echo "Incorrect password";
    }
} else {
    echo "User not found";
}
?>