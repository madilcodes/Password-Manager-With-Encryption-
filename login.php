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
<form method="POST">
    <input name="email" type="email" required />
    <input name="password" type="password" required />
    <button>Login</button>
</form>
