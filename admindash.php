<?php
session_start();


if (!isset($_SESSION['username']) || $_SESSION['username'] != 'admin') {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

 
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
       body {
            font-family: Arial, sans-serif;
        }
        
        h1, h2 {
            text-align: center;
        }
        .logo {
         margin-right: auto; /* Push the logo to the left */
        }

        .logo img {
        height: 50px; /* Adjust the height as needed */
        }
        nav {
        position: fixed;
        top: 0;
        height: 10vh;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: flex-end; /* Align items to the right */
        background-color: #3e2f2f;
        font-size: 17px;
        margin-bottom: 20px;

        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left: 350px;
        }
      .order-btn{
            background-color: green;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
        .action-button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            margin-right: 5px; /* Adjust spacing between buttons */
        }

        /* Define styles for the 'Approve' button */
        .approve-button {
            background-color: #4CAF50; /* Green */
            color: white;
        }

        /* Define styles for the 'Cancel' button */
        .cancel-button {
            background-color: #f44336; /* Red */
            color: white;
        }
    </style>
</head>
<body>
<nav style="margin-bottom: 20px;">
        <div class="logo">
            <img src="images/zadit.png" alt="Logo">
        </div>
        
        <a href="index.php" style="margin-right:40px; margin-top:20px; "><button class="order-button" style="background-color: green; color:#ddd;">Login out</button>
            </button></a>
        
        
    </nav>
<h1 style="margin-top: 60px;">Welcome, Admin!</h1>
    
    <h2> customer Selected Products</h2>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>User Name</th>
            <th>status</th>
            <!-- Add more table headers for additional information if needed -->
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["product_name"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";

    

                echo "<td>";
                echo "<button class=\"action-button approve-button\">Approve</button>"; 
                echo "<button class=\"action-button cancel-button\">Cancel</button>"; 
                echo "</td>";
                
                
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No selected products.</td></tr>";
        }
        ?>
    </table>
    

</body>
</html>
