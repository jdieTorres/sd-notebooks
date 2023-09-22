CREATE DATABASE Register_User_Login;
USE Register_User_Login;
CREATE TABLE Register (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    mail VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(50) NOT NULL
);


