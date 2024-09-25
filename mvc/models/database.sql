-- Active: 1721375362536@@127.0.0.1@3306@test
CREATE DATABASE proyecto_mvc;

use proyecto_mvc;

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    marca VARCHAR(100) NOT NULL,
    costo FLOAT(10, 2) NOT NULL,
    precio FLOAT(10, 2) NOT NULL,
    cantidad INT NOT NULL,
    imagen VARCHAR(100) NOT NULL DEFAULT 'imagen.jpg',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

INSERT INTO
    productos (
        nombre,
        marca,
        costo,
        precio,
        cantidad,
        imagen
    )
VALUES (
        'Laptop',
        'Dell',
        500.00,
        750.00,
        10,
        'laptop.jpg'
    ),
    (
        'Smartphone',
        'Samsung',
        300.00,
        450.00,
        15,
        'smartphone.jpg'
    ),
    (
        'Tablet',
        'Apple',
        400.00,
        600.00,
        8,
        'tablet.jpg'
    ),
    (
        'Monitor',
        'LG',
        150.00,
        250.00,
        12,
        'monitor.jpg'
    ),
    (
        'Teclado',
        'Logitech',
        20.00,
        35.00,
        50,
        'teclado.jpg'
    ),
    (
        'Ratón',
        'HP',
        10.00,
        20.00,
        60,
        'raton.jpg'
    ),
    (
        'Impresora',
        'Canon',
        100.00,
        150.00,
        5,
        'impresora.jpg'
    ),
    (
        'Auriculares',
        'Sony',
        30.00,
        50.00,
        25,
        'auriculares.jpg'
    ),
    (
        'Cámara',
        'Nikon',
        250.00,
        400.00,
        7,
        'camara.jpg'
    ),
    (
        'Altavoces',
        'Bose',
        200.00,
        300.00,
        10,
        'altavoces.jpg'
    );