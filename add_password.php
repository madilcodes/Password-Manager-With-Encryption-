<?php
session_start();
require 'config/db.php';
require 'includes/functions.php';
if (!isset($_SESSION['email'])) header("Location: login.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $website = $_POST['website'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_SESSION['email'];
    $key = md5($email);
    $encrypted = encrypt($password, $key);
    $conn->query("INSERT INTO passwords (user_email, website, username, password) VALUES ('$email', '$website', '$username', '$encrypted')");
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Password - Password Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .add-container {
            background: #fff;
            max-width: 400px;
            margin: 60px auto;
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
        input {
            width: 100%;
            padding: 0.7em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 0.7em;
            background: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #1e7e34;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 1em;
            color: #222;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        @media (max-width: 500px) {
            .add-container {
                padding: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="add-container">
        <h2>Add New Password</h2>
      <form method="POST">
            <label for="website">Website</label>
            <input type="text" id="website" name="website" required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Add Password</button>
        </form>
        <a class="back-link" href="dashboard.php">Back to Dashboard</a>
    </div>
</body>