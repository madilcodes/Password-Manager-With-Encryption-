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
<form method="POST">
    <input name="website" placeholder="Website" required />
    <input name="username" placeholder="Username" required />
    <input name="password" placeholder="Password" required />
    <button>Save</button>
</form>