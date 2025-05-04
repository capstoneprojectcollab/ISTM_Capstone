<?php
header('Content-Type: application/json');
$host = "localhost";
$db = "playerdatabase";
$user = "nextdatabase";
$pass = "Springtime!1@2";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed"]));
}

$email = $_GET['email'] ?? '';
$stmt = $conn->prepare("SELECT * FROM player_profiles WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    echo json_encode($row);
} else {
    echo json_encode(["error" => "No profile found"]);
}
?>