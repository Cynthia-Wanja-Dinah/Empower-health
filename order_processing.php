<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    
    $product_name = htmlspecialchars($product_name);
    $price = htmlspecialchars($price);
    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "health";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqli = "INSERT INTO products (product_name, price, name, email ) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sqli);
    $stmt->bind_param("ssss", $product_name, $price, $name, $email );

   
    if ($stmt->execute()) {
        echo "Order placed successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $stmt->close();
    $conn->close();
}
?>
