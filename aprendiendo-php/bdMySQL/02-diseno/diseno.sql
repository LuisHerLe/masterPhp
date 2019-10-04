# Soporte de transacciones ENGINE=innoDb; 
# Mayor velocidad de transacciones select (No mantiene relación referencial, no se recomienda) ENGINE=MyISAM; 

# Crear tabla Usuarios
CREATE TABLE usuarios(
n_id int(255) not null AUTO_INCREMENT,
s_nombre varchar(50) not null,
s_apellidos varchar(100) not null,
s_email varchar(50) not null,
s_password varchar(20) not null,
d_fecha date not null,
CONSTRAINT uq_email UNIQUE(s_email),
CONSTRAINT pk_usuarios PRIMARY KEY (n_id)
)ENGINE=innoDb;

# Crear tabla Categorías
CREATE TABLE categorias(
n_id int(255) not null AUTO_INCREMENT,
s_nombre varchar(150) not null,
CONSTRAINT pk_categorias PRIMARY KEY (n_id)
)ENGINE=innoDb; 

# Crear tabla de relación muchos a muchos (Usuarios-Categorías)
CREATE TABLE entradas(
n_id int(255) not null AUTO_INCREMENT,
n_usuario_id int(255) not null,
s_titulo varchar(150) not null,
s_descripcion MEDIUMTEXT,
d_fecha date not null,
n_categoria_id int(255) not null,
CONSTRAINT pk_entradas PRIMARY KEY (n_id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY (n_usuario_id) REFERENCES usuarios(n_id) ON DELETE CASCADE SET NULL,
CONSTRAINT fk_entrada_categoria FOREIGN KEY (n_categoria_id) REFERENCES categorias(n_id) ON DELETE NO ACTION
)ENGINE=innoDb;

# Modificar nombre de bases de datos
RENAME pleiculas peliculas;


# Insertar registros en tablas
INSERT INTO usuarios(s_nombre, s_apellidos, s_email, s_password, d_fecha) 
values ("Dr", "Dre", "drdre2001@gmail.com", "weed2001", "2001-01-22");

# Operadores aritméticos y alias
SELECT s_name, s_password, (68 + 1) AS 'Posición' from usuarios;

# Ordenar por un campo
SELECT * FROM usuarios ORDER BY s_nombre;

# Obtener todos los registros cuyo año sea par
SELECT * FROM usuarios where (YEAR(d_fecha) %2 = 0);

# Ordenación ASC O DESC
SELECT UPPER(s_nombre) AS 'ELLAS', s_apellidos FROM usuarios 
WHERE LENGTH(s_nombre) > 4 AND YEAR(d_fecha) < 2019 ORDER BY s_apellidos DESC LIMIT 1;

# Mostrar el id de usuario con más entradas
SELECT n_usuario_id, COUNT(n_usuario_id) AS 'Cantidad de entradas' FROM entradas GROUP BY n_usuario_id ORDER BY COUNT(n_usuario_id) DESC LIMIT 1;

# Rellenar las tablas

INSERT INTO categorias(s_nombre) values ("Ficción");
INSERT INTO categorias (s_nombre) values ("Aventura");
INSERT INTO categorias (s_nombre) values ("Fantasía");

INSERT INTO entradas (n_usuario_id, s_titulo, s_descripcion, d_fecha, n_categoria_id) 
VALUES (4, "El Nombre del Viento", "libro que cuenta la historia de un anti heroe", "2011-12-01", 3);

INSERT INTO entradas (n_usuario_id, s_titulo, s_descripcion, d_fecha, n_categoria_id) 
VALUES (5, "El Temor de un hombre sabio", "La historia de Kvothe", "2014-07-05", 3);

INSERT INTO entradas VALUES (null, 5, "El secreto de Ted y Tod", "Libro de ajedrez humano que Ted y Tod organizan", "2016-10-15", 1);

# Update
UPDATE entradas SET s_descripcion= 'Fernando Trujillo - Libro de Fantasía' WHERE n_id = 5 OR n_id = 6;


