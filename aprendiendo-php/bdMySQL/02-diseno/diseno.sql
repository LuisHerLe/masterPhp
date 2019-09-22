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