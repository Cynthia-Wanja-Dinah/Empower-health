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
            background-size: cover;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 95vh;
        }
        .wrapper{
            overflow: hidden;
            max-width: 390px;
            max-height: 100vh;
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
          }
          .form-inner form .field{
            height: 40px;
            width: 100%;
            margin-top: 10px;
        }
        .form-inner form .field input{
            height: 80%;
            width: 100%;
            outline: none;
            padding-left: 10px;
            border-radius: 10px;
            border: 1px solid lightgrey;
            border-bottom-width: 1px;
            font-size: 15px;
            transition: all 0.3s ease;
          }
          .form-inner form .pass-link{
            margin-top: 5px;
          }


        form {
            background-color: lightblue;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 85vh;
            
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
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="form-inner">
    <form method="POST" action="register1.php" style="margin-left: 20px;">
    <img src="images/zadit.png" alt="Logo" class="logo-inside" style="max-width: 100px; height: 100px; border-radius: 50%;">
       
        <h2>Register</h2>
        <div class="field">
        <input type="username" name="username" placeholder="Username" autocomplete="off" required>
    </div>
       
        <div class="field">
        <input type="password" name="password" placeholder="Password" autocomplete="off" required>
    </div>
   
    <div class="field">
        <input type="email" name="email" placeholder="Email" autocomplete="off" required>
    </div>
    <div class="field">
        <input type="number" name="age" placeholder="Age" autocomplete="off" required>
    </div>
    <div class="field">
        <input type="text" name="gender" placeholder="Gender" autocomplete="off" required>
    </div>
        <br>
        <button type="submit">Register</button>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</div>

    </form>

   
</body>
</html>
