<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

</head>
<body>

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
  

<form action="/" >
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <i class="fa fa-envelope icon"></i>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <i class="fa fa-key icon"></i>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" onclick="myFunction()">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>


<script>
  function myFunction() {
  location.replace("https://www.w3schools.com")
}
</script>
</body>
</html>
