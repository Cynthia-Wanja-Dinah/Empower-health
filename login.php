
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
         
         
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 95vh;
            background-size: cover;
        }
        .wrapper{
            overflow: hidden;
            max-width: 390px;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
          }
          .form-inner form .field{
            height: 50px;
            width: 100%;
            margin-top: 20px;
        }
        .form-inner form .field input{
            height: 100%;
            width: 100%;
            outline: none;
            padding-left: 15px;
            border-radius: 15px;
            border: 1px solid lightgrey;
            border-bottom-width: 2px;
            font-size: 17px;
            transition: all 0.3s ease;
          }
          .form-inner form .pass-link{
            margin-top: 5px;
          }

        form {
            background-color: lightblue;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 80vh;
        }

        form input {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form a {
            color: #007BFF;
            text-decoration: none;
        }
        .logo-inside {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            margin-bottom: 20px; /* Adjust as needed for spacing */
        }
        
    </style>
</head>
<body>
    
    <div class="wrapper">
        <div class="form-inner">
    <form method="POST" action="login1.php">
    <img src="images/zadit.png" alt="Logo" class="logo-inside" style="max-width: 150px; height: 150px; border-radius: 50%;">
        <h2>Login</h2>
        <div class="msg" id="message"></div>
        <div class="field">
        <input type="username" name="username" placeholder="username" autocomplete="off" required>
        </div>
        <br>
        <div class="field">
        <input type="password" name="password" placeholder="Password" autocomplete="off"required>
        </div>
        <br>
        <button type="submit">Login</button>
        <div class="pass-link"><a href="{{url_for('recover')}}">Forgot password?</a></div>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</div>
    </form>

    <script>
        // Get the message from the PHP variable or any other source
        var msg = "<?php echo $msg; ?>";

        // Set the message to the message element
        document.getElementById("message").innerText = msg;
    </script>
   
</body>
</html>


