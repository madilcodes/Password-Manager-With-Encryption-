CREATE DATABASE password_manager;

USE password_manager;

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
