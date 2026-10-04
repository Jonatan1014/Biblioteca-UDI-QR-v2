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
    portada LONGBLOB,                             -- Imagen de la portada del libro (binario)
    portada_url VARCHAR(500) NULL,                -- URL de la portada (se usa si no hay imagen en "portada")
    qr_code LONGBLOB,                           -- Código QR en formato imagen
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
-- Libros reales con ISBN verificados; portadas desde Open Library (covers.openlibrary.org).
-- Autor, editorial y año son referenciales.
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
INSERT INTO libros (titulo, autor, editorial, año_publicacion, isbn, edicion, idioma, portada, portada_url, qr_code, estado, categoria, resena, ubicacion) VALUES
("Clean Code", "Robert C. Martin", "Prentice Hall", 2008, "9780132350884", 1, "Ingles", NULL, "https://covers.openlibrary.org/b/isbn/9780132350884-L.jpg", NULL, "Disponible", "Programacion", "Guía práctica sobre cómo escribir código limpio, legible y mantenible.", "Estante A-1"),
("Introduction to Algorithms", "Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, Clifford Stein", "The MIT Press", 2009, "9780262033848", 3, "Ingles", NULL, "https://covers.openlibrary.org/b/isbn/9780262033848-L.jpg", NULL, "Prestado", "Programacion", "Referencia clásica sobre algoritmos y estructuras de datos, con análisis de complejidad.", "Estante A-4"),
("How to Read a Book", "Mortimer J. Adler, Charles Van Doren", "Simon and Schuster", 1972, "9780671212094", 1, "Ingles", NULL, "https://covers.openlibrary.org/b/isbn/9780671212094-L.jpg", NULL, "Disponible", "Lectura Critica", "Método para leer, comprender y analizar textos; base de la lectura crítica.", "Estante C-1"),
("Thinking, Fast and Slow", "Daniel Kahneman", "Farrar, Straus and Giroux", 2013, "9780374533557", 1, "Ingles", NULL, "https://covers.openlibrary.org/b/isbn/9780374533557-L.jpg", NULL, "Prestado", "Psicologia", "Recorrido por los dos sistemas de pensamiento y los sesgos cognitivos.", "Estante C-3"),
("Don't Make Me Think", "Steve Krug", "New Riders", 2005, "9780321344755", 2, "Ingles", NULL, "https://covers.openlibrary.org/b/isbn/9780321344755-L.jpg", NULL, "Inactivo", "Diseño Grafico", "Principios de usabilidad para interfaces web. Ejemplar dado de baja.", "Estante D-1"),
("The Intelligent Investor", "Benjamin Graham", "Harper Business", 2003, "9780060555665", 1, "Ingles", NULL, "https://covers.openlibrary.org/b/isbn/9780060555665-L.jpg", NULL, "Disponible", "Finanzas", "Clásico sobre inversión en valor y gestión disciplinada del riesgo.", "Estante E-2"),
("Python Crash Course", "Eric Matthes", "No Starch Press", 2019, "9781593279288", 2, "Ingles", NULL, "https://covers.openlibrary.org/b/isbn/9781593279288-L.jpg", NULL, "Disponible", "Programacion", "Introducción práctica a Python con proyectos de juegos, visualización de datos y aplicaciones web.", "Estante A-3"),
("The Pragmatic Programmer", "Andrew Hunt, David Thomas", "Addison-Wesley", 2019, "9780135957059", 2, "Ingles", NULL, "https://covers.openlibrary.org/b/isbn/9780135957059-L.jpg", NULL, "Prestado", "Programacion", "Consejos prácticos para mejorar como desarrollador de software.", "Estante A-2"),
("Discrete Mathematics and Its Applications", "Kenneth H. Rosen", "McGraw-Hill", 2012, "9780073383095", 7, "Ingles", NULL, "https://covers.openlibrary.org/b/isbn/9780073383095-L.jpg", NULL, "Disponible", "Matematicas", "Lógica, conjuntos, combinatoria, grafos y teoría de números con aplicaciones en computación.", "Estante B-1"),
("The Design of Everyday Things", "Don Norman", "Basic Books", 2013, "9780465050659", 1, "Ingles", NULL, "https://covers.openlibrary.org/b/isbn/9780465050659-L.jpg", NULL, "Disponible", "Diseño Grafico", "Principios de diseño centrado en el usuario: visibilidad, retroalimentación y mapeos.", "Estante D-2");

-- Préstamos de ejemplo (idUser e idLibro según los inserts anteriores)
INSERT INTO prestamos (idUser, idLibro, fecha_prestamo, fecha_vencimiento, fecha_devolucion, estado) VALUES
(3, 1, "2026-08-01", "2026-08-15", "2026-08-12", "Devuelto"),
(4, 4, "2026-09-10", "2026-09-24", NULL, "Vencido"),
(5, 2, "2026-09-28", "2026-10-12", NULL, "Activo"),
(6, 6, "2026-09-01", "2026-09-15", "2026-09-14", "Devuelto"),
(3, 8, "2026-09-25", "2026-10-09", NULL, "Activo"),
(2, 10, "2026-07-10", "2026-07-24", "2026-07-30", "Devuelto"),
(7, 9, "2026-08-05", "2026-08-19", "2026-08-18", "Devuelto");

