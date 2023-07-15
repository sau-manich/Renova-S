/*
CREAMOS LA BASE DE DATOS cap21
*/
DROP DATABASE IF EXISTS renova;
CREATE DATABASE renova;
USE renova;


/* ============================== CREAMOS LA TABLA usuario ======================================*/

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    rol VARCHAR(255) NOT NULL
);


INSERT INTO usuarios (nombre, contrasena, email, rol)
VALUES
    ('Administrador', 'el_adminsito', 'admin@renova.com','Administrador'),
    ('Secretario', 'elSecre24H', 'secre@renova.com','Secretario'),
    ('Empleado', 'empleado2023', 'empleado@renova.com','Empleado'),
    ('Secretario', 'elSecre12H', 'secre@renova.com','Secretario'),
    ('Empleado', 'empleado2024', 'empleado@renova.com','Empleado');