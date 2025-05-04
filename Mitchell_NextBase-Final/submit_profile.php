<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Database connection
$host = 'localhost';
$dbname = 'playerdatabase';
$username = 'nextdatabase';
$password = 'Springtime!1@2'; // Use "root" for MAMP default

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize inputs
function clean_input($conn, $value) {
    return mysqli_real_escape_string($conn, trim($value));
}


$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    die("Invalid data received");
}


// Collect and clean form data
$fullName = clean_input($conn, $_POST['fullName']);
$email = clean_input($conn, $_POST['email']);
$position = clean_input($conn, $_POST['position']);
$handedness = clean_input($conn, $_POST['handedness']);
$dateOfBirth = clean_input($conn, $_POST['dateOfBirth']);
$location = clean_input($conn, $_POST['location']);
$height = clean_input($conn, $_POST['height']);
$weight = (int)$_POST['weight'];
$school = clean_input($conn, $_POST['school']);
$graduationYear = (int)$_POST['graduationYear'];
$gpa = clean_input($conn, $_POST['gpa']);
$major = clean_input($conn, $_POST['major']);
$minor = clean_input($conn, $_POST['minor']);
$travelteam = clean_input($conn, $_POST['travelteam']);
$clubteam = clean_input($conn, $_POST['clubteam']);
$instagram = clean_input($conn, $_POST['instagram']);
$twitter = clean_input($conn, $_POST['twitter']);
$facebook = clean_input($conn, $_POST['facebook']);
$youtube = clean_input($conn, $_POST['youtube']);
$highlightReel = clean_input($conn, $_POST['highlightReel']);
$playerStatement = clean_input($conn, $_POST['playerStatement']);
$story1 = clean_input($conn, $_POST['story1']);
$story2 = clean_input($conn, $_POST['story2']);
$story3 = clean_input($conn, $_POST['story3']);
$story4 = clean_input($conn, $_POST['story4']);
$createdAtISO = $data['createdAt'];
$createdAt = date('Y-m-d H:i:s', strtotime($createdAtISO));

// Insert into database
$query = "SELECT id FROM playerprofiles WHERE fullName = '$fullName'";
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
   
    $update = "UPDATE playerprofiles SET 
        position='$position', handedness='$handedness', dateOfBirth='$dateOfBirth', location='$location',
        height='$height', weight=$weight, school='$school', graduationYear=$graduationYear, gpa='$gpa',
        major='$major', minor='$minor', travelteam='$travelteam', clubteam='$clubteam',
        instagram='$instagram', twitter='$twitter', facebook='$facebook', youtube='$youtube',
        highlightReel='$highlightReel', playerStatement='$playerStatement',
        story1='$story1', story2='$story2', story3='$story3', story4='$story4', email='$email',
        createdAt='$createdAt'
        WHERE fullName = '$fullName'";
    $conn->query($update);
} else {
    
    $insert = "INSERT INTO playerprofiles (
        fullName, position, handedness, dateOfBirth, location, height, weight,
        school, graduationYear, gpa, major, minor, travelteam, clubteam,
        instagram, twitter, facebook, youtube, highlightReel,
        playerStatement, story1, story2, story3, story4, email, createdAt
    ) VALUES (
        '$fullName', '$position', '$handedness', '$dateOfBirth', '$location', '$height', $weight,
        '$school', $graduationYear, '$gpa', '$major', '$minor', '$travelteam', '$clubteam',
        '$instagram', '$twitter', '$facebook', '$youtube', '$highlightReel',
        '$playerStatement', '$story1', '$story2', '$story3', '$story4', '$email', '$createdAt'
    )";
    $conn->query($insert);
}

echo "success";
$conn->close();
?>