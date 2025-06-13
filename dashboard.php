<?php
session_start();
if (!isset($_SESSION['email'])) header("Location: login.php");
require 'config/db.php';
require 'includes/functions.php';
$email = $_SESSION['email'];
$key = md5($email);
$res = $conn->query("SELECT * FROM passwords WHERE user_email='$email'");
?>
<a href="logout.php">Logout</a>
<a href="add_password.php">Add New</a>
<table border="1">
    <tr><th>Website</th><th>Username</th><th>Password</th><th>Action</th></tr>
    <?php while($row = $res->fetch_assoc()): ?>
        <tr>
            <td><?= $row['website'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><span class="password" data-enc="<?= $row['password'] ?>">••••••••</span></td>
            <td><button onclick="togglePassword(this)">Show</button> <button onclick="copyPassword(this)">Copy</button></td>
        </tr>
    <?php endwhile; ?>
</table>
<script src="assets/script.js"></script>