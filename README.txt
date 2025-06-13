Password Manager (PHP + MySQL + AES Encryption)
===============================================

🔐 Project Overview:
--------------------
A lightweight password manager built with PHP and MySQL. User passwords are encrypted using AES-256 encryption before storing them in the database. Includes copy-to-clipboard and show/hide password features using JavaScript.

🛠️ Tech Stack:
---------------
- PHP (Backend)
- MySQL (Database)
- JavaScript (Frontend functionality)
- OpenSSL AES-256-CBC (Encryption)

📁 Folder Structure:
--------------------
password-manager/
├── assets/               # JavaScript for frontend behavior
│   └── script.js
├── config/               # Database configuration
│   └── db.php
├── includes/             # Encryption functions
│   └── functions.php
├── css/                  # Basic styles
│   └── style.css
├── index.php             # Optional landing/redirect page
├── register.php          # Registration page
├── login.php             # Login page
├── dashboard.php         # Password manager dashboard
├── add_password.php      # Add new password page
├── logout.php            # Logout script
└── README.txt            # This file

📝 Setup Instructions:
----------------------
1. **Install XAMPP** (or any local Apache + MySQL stack).
2. **Move Project**:
   - Place the unzipped `password-manager/` folder inside `C:/xampp/htdocs/`.
3. **Start Services**:
   - Open XAMPP → Start Apache & MySQL
4. **Create Database**:
   - Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a new database: `password_manager`
   - Run the following SQL to create tables:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE passwords (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_email VARCHAR(255),
    website VARCHAR(255),
    username VARCHAR(255),
    password TEXT
);
