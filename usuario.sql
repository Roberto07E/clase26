CREATE DATABASE usuarios_db;
USE usuarios_db;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    edad INT NOT NULL,
    genero ENUM('masculino', 'femenino', 'otro') NOT NULL
);
