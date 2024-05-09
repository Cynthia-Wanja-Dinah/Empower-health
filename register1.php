<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];

// SQL to insert data into table
$sql = "INSERT INTO users (username, password, email, age, gender)
        VALUES ('$username', '$password', '$email', '$age', '$gender')";

if ($conn->query($sql) === TRUE) {
    // Registration successful
    header("Location: login.php"); // Redirect to homepage after successful registration
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
