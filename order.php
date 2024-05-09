<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    
    .product-info, .user-info {
        margin-bottom: 15px;
    }
    
    label {
        font-weight: bold;
    }
    
    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box; /* Ensures padding and border are included in element's total width/height */
        font-size: 16px;
    }
    
    textarea {
        resize: vertical; /* Allows vertical resizing of textarea */
        min-height: 100px; /* Minimum height of textarea */
    }
    
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
</head>
<body>
    <form action="order_processing.php" method="post">
        <div class="product-info">
            <label for="product_name">Product Name:</label><br>
            <input type="text" id="product_name" name="product_name" required>
        </div>
        <div class="product-info">
            <label for="price">Price:</label><br>
            <input type="text" id="price" name="price" required>
        </div>
        <div class="user-info">
            <label for="name">Your Name:</label><br>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="user-info">
            <label for="email">Your Email:</label><br>
            <input type="email" id="email" name="email" required>
        </div>
        <input type="submit" value="Place Order">
    </form>
    
    
</body>
</html>
<script>
// JavaScript to update product name and price fields based on user selection
document.addEventListener("DOMContentLoaded", function() {
    var productSelects = document.querySelectorAll('.order-button');
    productSelects.forEach(function(button) {
        button.addEventListener('click', function() {
            var productDiv = button.closest('.image-info');
            var productName = productDiv.querySelector('p:nth-child(3)').textContent;
            var productPrice = productDiv.querySelector('.price').textContent;
            var productNameInput = document.getElementById('product_name');
            var productPriceInput = document.getElementById('price');
            productNameInput.value = productName;
            productPriceInput.value = productPrice;
        });
    });
});
</script>
