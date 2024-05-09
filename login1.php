<?php
session_start();

$msg = "";


if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}






$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE (username='$username' OR email='$username') AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        
        if ($row['username'] == 'admin' || strpos($row['email'], 'admin@gmail.com') !== false) {
            header("Location: admindash.php");
            exit();
        } else {
            header("Location: index.php");
            exit();
        }
    } else {
        $msg = "Invalid username/email or password";
        header("Location: login.php?msg=" . urlencode($msg)); 
        exit();
    }
}

$conn->close();
?>

