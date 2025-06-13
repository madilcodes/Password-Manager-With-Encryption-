CREATE DATABASE password_manager;

USE password_manager;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
     phone VARCHAR(255),
      country VARCHAR(255),
       gender VARCHAR(20)
);

CREATE TABLE passwords (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_email VARCHAR(255),
    website VARCHAR(255),
    username VARCHAR(255),
    password TEXT
);
