
CREATE TABLE coches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    marca VARCHAR(100),
    anio VARCHAR(10),
    especificaciones TEXT,
    imagen VARCHAR(100)
);

INSERT INTO coches (nombre, marca, anio, especificaciones, imagen) VALUES
('Golf MK5 GT Sport', 'Volkswagen', '2007', 'Motor 2.0 TDI, 170 CV, transmisión manual de 6 velocidades', 'golf.jpg'),
('M3', 'BMW', '2018', 'Motor 3.0L TwinPower Turbo, 431 CV, tracción trasera', 'm3.jpg'),
('Corolla', 'Toyota', '2021', 'Motor 1.8 Híbrido, 122 CV, transmisión automática CVT', 'corolla.jpg'),
('911 Turbo S', 'Porsche', '2022', 'Motor bóxer biturbo, 650 CV, tracción total', 'porsche.jpg'),
('488 GTB', 'Ferrari', '2019', 'Motor V8 biturbo, 670 CV, transmisión automática de 7 velocidades', 'ferrari.jpg');
