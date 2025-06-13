<?php
session_start();
require 'config/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $res = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
    if ($res->num_rows == 1) {
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Password Manager</title>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .login-container {
            background: #fff;
            max-width: 350px;
            margin: 80px auto;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 1.5em;
        }
        label {
            display: block;
            margin-bottom: 0.5em;
            font-weight: bold;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.7em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 0.7em;
            background: #222;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
        }
        button:hover {
            background: #444;
        }
        .register-link {
            display: block;
            text-align: center;
            margin-top: 1em;
            color: #222;
            text-decoration: none;
        }
        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
       <form method="POST">
            <label for="username">Email</label>
            <input type="email" id="username" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
        <a class="register-link" href="register.php">Don't have an account? Register</a>
    </div>
</body>