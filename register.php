<?php
require 'config/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $conn->query("INSERT INTO users (email, password) VALUES ('$email', '$password')");
    header("Location: login.php");
}
?>
<form method="POST">
    <input name="email" type="email" required />
    <input name="password" type="password" required />
    <button>Register</button>
</form>