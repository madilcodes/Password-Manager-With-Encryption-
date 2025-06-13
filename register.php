<?php
require 'config/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
     $phone = $_POST['phone'];
    $country = $_POST['country'];
    $gender = $_POST['gender'];
  
   
    $conn->query("INSERT INTO users (name,email, password,phone,country,gender) VALUES ('$name','$email', '$password',''$phone','$country','$gender')");
    header("Location: login.php");
}
?>
   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register - Password Manager</title>
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .register-container {
            background: #fff;
            max-width: 400px;
            margin: 60px auto;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
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

        input,
        select {
            width: 100%;
            padding: 0.7em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .gender-group {
            display: flex;
            gap: 1em;
            margin-bottom: 1em;
        }

        .gender-group label {
            font-weight: normal;
            margin-bottom: 0;
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

        .login-link {
            display: block;
            text-align: center;
            margin-top: 1em;
            color: #222;
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <h2>Register</h2>
       <form method="POST">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input name="password" id="password" type="password" required />

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="country">Country</label>
            <select id="country" name="country" required>
                <option value="">Select Country</option>
                <option value="India">India</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
                <!-- Add more countries as needed -->
            </select>

            <label>Gender</label>
            <div class="gender-group">
                <label><input type="radio" name="gender" value="Male" required> Male</label>
                <label><input type="radio" name="gender" value="Female" required> Female</label>
                <label><input type="radio" name="gender" value="Other" required> Other</label>
            </div>

            <button type="submit">Register</button>
        </form>
        <a class="login-link" href="login.php">Already have an account? Login</a>
    </div>
</body>

</html>