<?php include 'conn.php' ?>
<?php session_start(); ?>
<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pswd = $_POST['password'];

    $sql = "SELECT name, email, password FROM user WHERE email = '$email' && password = '$pswd' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        header('Location: index.php');
    } else {
        echo "<script>alert('No user found with this email!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #f1ede9, #88b8b0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            position: relative;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
        }
        h2 {
            color: #333;
            font-weight: bold;
        }
        label {
            display: block;
            text-align: left;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        .forgot-password {
            display: block;
            text-align: left;
            margin-top: 5px;
            font-size: 14px;
            color: #88b8b0;
            text-decoration: none;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        input[type="submit"] {
            /* background: linear-gradient(to right, #f1ede9 , #88b8b0); */
            background : black;
            color: white;
            border: none;
            padding: 10px;
            /* width: 100%; */
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            font-size: 16px;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            /* background: linear-gradient(to right, #ded9d3, #769e96); */
        }
        .signup {
            margin-top: 10px;
            font-size: 14px;
        }
        .signup a {
            color: #88b8b0;
            text-decoration: none;
            font-weight: bold;
        }
        .signup a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <span class="close-btn">&times;</span>
        <h2>Login Form</h2>
        <form action="login.php" method="POST">
            <label for="email">Email or Phone</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <a href="#" class="forgot-password">Forgot Password?</a>
            <input type="submit" name="login" value="LOGIN">
        </form>
        <p class="signup">Not a member? <a href="#">Signup now</a></p>
    </div>
</body>
</html>
