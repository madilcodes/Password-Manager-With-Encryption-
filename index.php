<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Manager</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        nav {
            background: #222;
            color: #fff;
            padding: 1em 2em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav .logo {
            font-weight: bold;
            font-size: 1.2em;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 1em;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 0.5em 1em;
            border-radius: 4px;
            transition: background 0.2s;
        }
        nav ul li a:hover {
            background: #444;
        }
        .hero-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">PASSWORD MANAGER</div>
        <ul>
             <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    <img 
        src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=1350&q=80" 
        alt="Password Manager Banner" 
        class="hero-image"
    >
  <footer style="background:#222; color:#fff; padding:2em 0; text-align:center; ">
        <div>
            <h3>Contact Us</h3>
            <p>Email: support@passwordmanager.com | Phone: +1 234 567 890</p>
        </div>
        <div style="margin:1em 0;">
            <span>Rate us:</span>
            <span style="color:gold; font-size:1.2em;">
                &#9733; &#9733; &#9733; &#9733; &#9734;
            </span>
        </div>
        <div>
            <a href="https://facebook.com" target="_blank" style="margin:0 10px; color:#fff; text-decoration:none;">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook" width="24" style="vertical-align:middle; filter:invert(1);"> Facebook
            </a>
            <a href="https://instagram.com" target="_blank" style="margin:0 10px; color:#fff; text-decoration:none;">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram" width="24" style="vertical-align:middle; filter:invert(1);"> Instagram
            </a>
            <a href="https://linkedin.com" target="_blank" style="margin:0 10px; color:#fff; text-decoration:none;">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg" alt="LinkedIn" width="24" style="vertical-align:middle; filter:invert(1);"> LinkedIn
            </a>
            <a href="https://wa.me/1234567890" target="_blank" style="margin:0 10px; color:#fff; text-decoration:none;">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp" width="24" style="vertical-align:middle; filter:invert(1);"> WhatsApp
            </a>
        </div>
        <div style="margin-top:1em; font-size:0.9em;">
            &copy; 2025 Password Manager. All rights reserved.
        </div>
    </footer>
</body>
</html>