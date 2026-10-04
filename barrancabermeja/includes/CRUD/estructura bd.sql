-- Tabla de usuarios
CREATE TABLE usuarios (
    idUser INT AUTO_INCREMENT PRIMARY KEY,        -- Identificador único para cada usuario
    code_cc VARCHAR(50) NOT NULL UNIQUE,           -- Correo electrónico único
    name VARCHAR(50) NOT NULL,                    -- Nombre de usuario
    email VARCHAR(100) NOT NULL UNIQUE,           -- Correo electrónico único
    password VARCHAR(255) NOT NULL,               -- Contraseña (encriptada)
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Fecha de registro automática
    ultimo_acceso TIMESTAMP NULL,                 -- Fecha y hora del último acceso
    rol ENUM('Root', 'Admin', 'Estudiante') DEFAULT 'Estudiante',  -- Rol del usuario
    carrera ENUM('Admi. Empresas', 'Ing. Sistemas', 'Diseño grafico','Ing. Industrial','Psicologia','Admin') DEFAULT 'Admin',  -- Rol del usuario
    estado ENUM('Activo', 'Inactivo') DEFAULT 'Activo'  -- Estado de la cuenta (activo/inactivo)
);
INSERT INTO usuarios (code_cc, name, email, password, rol, carrera, estado) 
VALUES ("101010", "Jonatan Cantillo", "jonatan@gmail.com", "$2y$10$WAKO01BM0Y601/egwX4WHODjMx2mmG1mO51p7xnEcqWm7VX5mPzJ.", "Root", "Admin", "Activo");
INSERT INTO usuarios (code_cc, name, email, password, rol, carrera, estado) 
VALUES ("202020", "Laura Perez", "laura@gmail.com", "$2y$10$WAKO01BM0Y601/egwX4WHODjMx2mmG1mO51p7xnEcqWm7VX5mPzJ.", "Admin", "Admin", "Activo");

-- Tabla de libros
CREATE TABLE libros (
    idLibro INT AUTO_INCREMENT PRIMARY KEY,       -- Identificador único para cada libro
    titulo VARCHAR(255) NOT NULL,                 -- Título del libro
    autor VARCHAR(255) NOT NULL,                  -- Autor del libro
    editorial VARCHAR(255) NOT NULL,              -- Editorial del libro
    año_publicacion YEAR NOT NULL,                -- Año de publicación del libro
    isbn VARCHAR(13) UNIQUE NOT NULL,             -- ISBN único del libro
    edicion INT NOT NULL,             -- ISBN único del libro
    idioma ENUM('Español', 'Ingles') DEFAULT 'Español',  -- Estado del libro
    portada LONGBLOB,                             -- Imagen de la portada del libro
    qr_code LONGBLOB,                             -- Código QR en formato imagen
    estado ENUM('Disponible', 'Prestado', 'Inactivo') DEFAULT 'Disponible',  -- Estado del libro
    categoria ENUM('Programacion', 'Matematicas', 'Lectura Critica', "Psicologia", "Diseño Grafico", "Finanzas","Otro") DEFAULT 'Otro',  -- Estado del libro
    resena LONGTEXT,
    ubicacion VARCHAR(50)
);

-- Tabla de préstamos
CREATE TABLE prestamos (
    idPrestamo INT AUTO_INCREMENT PRIMARY KEY,    -- Identificador único para cada préstamo
    idUser INT NOT NULL,                          -- ID del usuario que realizó el préstamo (llave foránea)
    idLibro INT NOT NULL,                         -- ID del libro prestado (llave foránea)
    fecha_prestamo DATE NOT NULL,                 -- Fecha en que se realizó el préstamo
    fecha_vencimiento DATE NOT NULL,              -- Fecha en que vence el préstamo
    fecha_devolucion DATE NULL,                   -- Fecha en que se devuelve el libro (si aplica)
    estado ENUM('Activo', 'Devuelto', 'Vencido') DEFAULT 'Activo',  -- Estado del préstamo
    FOREIGN KEY (idUser) REFERENCES usuarios(idUser) ON DELETE CASCADE,  -- Relación con usuarios
    FOREIGN KEY (idLibro) REFERENCES libros(idLibro) ON DELETE CASCADE   -- Relación con libros
);

-- =====================================================
-- Datos de ejemplo (demo)
-- Todos los usuarios usan el mismo hash de contraseña que los usuarios semilla.
-- ISBN ficticios: solo para pruebas.
-- =====================================================

-- Usuarios de ejemplo (idUser 1 y 2 ya existen arriba)
INSERT INTO usuarios (code_cc, name, email, password, rol, carrera, estado) VALUES
("303030", "Carlos Ramirez", "carlos@gmail.com", "$2y$10$WAKO01BM0Y601/egwX4WHODjMx2mmG1mO51p7xnEcqWm7VX5mPzJ.", "Estudiante", "Ing. Sistemas", "Activo"),
("404040", "Maria Gomez", "maria@gmail.com", "$2y$10$WAKO01BM0Y601/egwX4WHODjMx2mmG1mO51p7xnEcqWm7VX5mPzJ.", "Estudiante", "Psicologia", "Activo"),
("505050", "Andres Torres", "andres@gmail.com", "$2y$10$WAKO01BM0Y601/egwX4WHODjMx2mmG1mO51p7xnEcqWm7VX5mPzJ.", "Estudiante", "Admi. Empresas", "Activo"),
("606060", "Valentina Rojas", "valentina@gmail.com", "$2y$10$WAKO01BM0Y601/egwX4WHODjMx2mmG1mO51p7xnEcqWm7VX5mPzJ.", "Estudiante", "Diseño grafico", "Activo"),
("707070", "Diego Mendez", "diego@gmail.com", "$2y$10$WAKO01BM0Y601/egwX4WHODjMx2mmG1mO51p7xnEcqWm7VX5mPzJ.", "Estudiante", "Ing. Industrial", "Inactivo"),
("808080", "Sofia Herrera", "sofia@gmail.com", "$2y$10$WAKO01BM0Y601/egwX4WHODjMx2mmG1mO51p7xnEcqWm7VX5mPzJ.", "Admin", "Admin", "Activo");

-- Libros de ejemplo (idLibro 1 a 10)
INSERT INTO libros (titulo, autor, editorial, año_publicacion, isbn, edicion, idioma, portada, qr_code, estado, categoria, resena, ubicacion) VALUES
("Clean Code", "Robert C. Martin", "Prentice Hall", 2008, "9780000000001", 1, "Ingles", NULL, NULL, "Disponible", "Programacion", "Guia sobre como escribir codigo limpio y mantenible.", "Estante A-1"),
("Calculo de una variable", "James Stewart", "Cengage Learning", 2012, "9780000000002", 7, "Español", NULL, NULL, "Prestado", "Matematicas", "Texto base para cursos de calculo diferencial e integral.", "Estante B-2"),
("Lectura critica para la universidad", "Ana Martinez", "Editorial UDI", 2019, "9780000000003", 2, "Español", NULL, NULL, "Disponible", "Lectura Critica", "Estrategias para leer, analizar y argumentar textos academicos.", "Estante C-1"),
("Psicologia del desarrollo humano", "John W. Santrock", "McGraw-Hill", 2018, "9780000000004", 14, "Español", NULL, NULL, "Prestado", "Psicologia", "Recorrido por el desarrollo humano desde la infancia hasta la vejez.", "Estante C-3"),
("Teoria del color para disenadores", "Juan Pablo Ortiz", "Editorial Creativa", 2015, "9780000000005", 1, "Español", NULL, NULL, "Inactivo", "Diseño Grafico", "Fundamentos del color aplicados al diseño grafico. Ejemplar dado de baja.", "Estante D-1"),
("Finanzas corporativas: un enfoque practico", "Carlos Mejia", "Ediciones Finanzas", 2017, "9780000000006", 3, "Español", NULL, NULL, "Disponible", "Finanzas", "Decisiones de inversion, financiamiento y valoracion de empresas.", "Estante E-2"),
("Python para principiantes", "Mariana Lopez", "Editorial Tecnologica", 2021, "9780000000007", 1, "Español", NULL, NULL, "Disponible", "Programacion", "Introduccion a Python con ejercicios practicos.", "Estante A-3"),
("Algoritmos y estructuras de datos", "Luis Joyanes Aguilar", "McGraw-Hill", 2010, "9780000000008", 2, "Español", NULL, NULL, "Prestado", "Programacion", "Listas, pilas, colas, arboles y grafos con ejemplos en pseudocodigo.", "Estante A-4"),
("Matematicas discretas y sus aplicaciones", "Kenneth H. Rosen", "McGraw-Hill", 2018, "9780000000009", 8, "Español", NULL, NULL, "Disponible", "Matematicas", "Logica, conjuntos, combinatoria y teoria de grafos.", "Estante B-1"),
("The Design of Everyday Things", "Don Norman", "Basic Books", 2013, "9780000000010", 2, "Ingles", NULL, NULL, "Disponible", "Diseño Grafico", "Principios de usabilidad y diseño centrado en el usuario.", "Estante D-2");

-- Préstamos de ejemplo (idUser e idLibro según los inserts anteriores)
INSERT INTO prestamos (idUser, idLibro, fecha_prestamo, fecha_vencimiento, fecha_devolucion, estado) VALUES
(3, 1, "2026-08-01", "2026-08-15", "2026-08-12", "Devuelto"),
(4, 4, "2026-09-10", "2026-09-24", NULL, "Vencido"),
(5, 2, "2026-09-28", "2026-10-12", NULL, "Activo"),
(6, 6, "2026-09-01", "2026-09-15", "2026-09-14", "Devuelto"),
(3, 8, "2026-09-25", "2026-10-09", NULL, "Activo"),
(2, 10, "2026-07-10", "2026-07-24", "2026-07-30", "Devuelto"),
(7, 9, "2026-08-05", "2026-08-19", "2026-08-18", "Devuelto");

