CREATE DATABASE crud_db;

USE crud_db;

CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    contact_num VARCHAR(15) NOT NULL,
    address VARCHAR(100) NOT NULL
);
