<?php
session_start();
if (!isset($_SESSION['email'])) header("Location: login.php");
require 'config/db.php';
require 'includes/functions.php';
$email = $_SESSION['email'];
$key = md5($email);
$res = $conn->query("SELECT * FROM passwords WHERE user_email='$email'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Password Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="assets/script.js"></script>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .dashboard-container {
            max-width: 1000px;
            margin: 40px auto;
            background: #fff;
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        h2 {
            text-align: center;
            margin-bottom: 1.5em;
        }
        .responsive-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2em;
            overflow-x: auto;
            display: block;
        }
        .responsive-table th, .responsive-table td {
            padding: 1em;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }
        .responsive-table th {
            background: #222;
            color: #fff;
        }
        .responsive-table tr:hover {
            background: #f1f1f1;
        }
        .btn {
            padding: 0.5em 1.2em;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            margin-right: 0.5em;
            transition: background 0.2s;
        }
        .btn-edit {
            background: #007bff;
            color: #fff;
        }
        .btn-edit:hover {
            background: #0056b3;
        }
        .btn-delete {
            background: #dc3545;
            color: #fff;
        }
        .btn-delete:hover {
            background: #a71d2a;
        }
        .btn-add {
            background: #28a745;
            color: #fff;
            margin-bottom: 1em;
        }
        .btn-add:hover {
            background: #1e7e34;
        }

        .btn-logout {
            background: red;
            color: white;
            margin-bottom: 1em;
        }
        .btn-add:hover {
            background: #1e7e34;
        }

        @media (max-width: 700px) {
            .dashboard-container {
                padding: 1em;
            }
            .responsive-table th, .responsive-table td {
                padding: 0.5em;
                font-size: 0.95em;
            }
        }
        @media (max-width: 500px) {
            .responsive-table, .responsive-table thead, .responsive-table tbody, .responsive-table th, .responsive-table td, .responsive-table tr {
                display: block;
            }
            .responsive-table thead tr {
                display: none;
            }
            .responsive-table tr {
                margin-bottom: 1em;
                border: 1px solid #e0e0e0;
                border-radius: 6px;
                background: #fafafa;
            }
            .responsive-table td {
                border: none;
                position: relative;
                padding-left: 50%;
                min-height: 40px;
            }
            .responsive-table td:before {
                position: absolute;
                left: 1em;
                top: 50%;
                transform: translateY(-50%);
                white-space: nowrap;
                font-weight: bold;
                color: #222;
            }
            .responsive-table td:nth-of-type(1):before { content: "Website"; }
            .responsive-table td:nth-of-type(2):before { content: "Username"; }
            .responsive-table td:nth-of-type(3):before { content: "Password"; }
            .responsive-table td:nth-of-type(4):before { content: "Actions"; }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Your Passwords</h2>
<button class="btn btn-add" onclick="location.href='add_password.php'">+ Add New</button>
<button class="btn btn-logout" onclick="location.href='logout.php'">Logout</button>

        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>Website</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
<?php  $sno = 1;?>
                <?php while($row = $res->fetch_assoc()): ?>
        <tr>
            <td><?= $sno ?></td>
            <td><?= $row['website'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><span class="password" data-enc="<?= $row['password'] ?>">••••••••</span></td>
            <td><button class="btn btn-edit" onclick="togglePassword(this)">Show</button> <button class="btn btn-delete" onclick="copyPassword(this)">Copy</button></td>
            
                    
        </tr>
<?php $sno++ ?>
    <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
