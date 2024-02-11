<?php
$data = json_decode(file_get_contents('php://input'));

$conn = new mysqli("localhost", "root", "", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $data->username;
$password = $data->password;

// Validate and sanitize user input to prevent SQL injection (you may need to enhance this)
$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);

$response = [];

if ($result->num_rows === 1) {
    // Login successful
    $response['success'] = true;
} else {
    // Login failed
    $response['success'] = false;
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
