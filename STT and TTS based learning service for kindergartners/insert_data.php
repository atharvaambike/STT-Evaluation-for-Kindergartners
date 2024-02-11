<?php
$data = json_decode(file_get_contents('php://input'));

$conn = new mysqli("localhost", "root", "", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $data->username;
$password = $data->password;
$name = $data->name;
$email = $data->email;
$contact = $data->contact;
$age = $data->age;

// Check if the email is already registered
$email = $conn->real_escape_string($email);
$checkQuery = "SELECT * FROM users WHERE email = '$email'";
$checkResult = $conn->query($checkQuery);

if ($checkResult->num_rows > 0) {
    // Email is not unique
    $response = ['success' => false, 'message' => 'Email already registered'];
} else {
    // Email is unique, proceed with registration
    $query = "INSERT INTO users (username, password, name, email, contact, age) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssi", $username, $password, $name, $email, $contact, $age);

    if ($stmt->execute()) {
        $response = ['success' => true];
    } else {
        $response = ['success' => false, 'message' => 'Registration failed'];
    }

    $stmt->close();
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);
?>
