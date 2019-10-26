/* 
 * Diseñar y crear una DB de un concesionario
 */


# Crear base de datos concesionario
CREATE DATABASE IF NOT EXISTS concesionario;
use concesionario;

# Crear tabla coches
CREATE TABLE coches(
n_id        int(10) AUTO_INCREMENT NOT NULL,
s_modelo    varchar(100) NOT NULL,
s_marca     varchar(50),
n_precio    int(20) NOT NULL,
n_stock     int(255) NOT NULL,
CONSTRAINT pk_coches PRIMARY KEY (n_id) 
)ENGINE=InnoDB;

# Crear tabla grupos
CREATE TABLE grupos(
n_id        int(10) AUTO_INCREMENT NOT NULL,
s_nombre    varchar(100) NOT NULL,
s_ciudad    varchar(100),
CONSTRAINT pk_grupos PRIMARY KEY (n_id)
)ENGINE=InnoDB;

# Crear tabla vendedores
CREATE TABLE vendedores(
n_id            int(10) AUTO_INCREMENT NOT NULL,
n_grupo_id      int(10) NOT NULL,
n_jefe          int(10),
s_nombre        varchar(100) NOT NULL,
s_apellidos     varchar(150),
s_cargo         varchar(50),
d_fecha_alta    date,
n_sueldo        float(20,2),
n_comision      float(10,2) NOT NULL,
CONSTRAINT pk_vendedores PRIMARY KEY(n_id),
CONSTRAINT fk_vendedor_grupo FOREIGN KEY(n_grupo_id) REFERENCES grupos(n_id),
CONSTRAINT fk_vendedor_jefe FOREIGN KEY (n_jefe) REFERENCES vendedores(n_id)
)ENGINE=InnoDB;



# Crear tabla clientes
CREATE TABLE clientes(
n_id            int(10) AUTO_INCREMENT NOT NULL,
n_vendedor_id   int(10),
s_nombre        varchar(150) NOT NULL,
s_ciudad        varchar(100),
n_gastado       float(50,2),
d_fecha         date,
CONSTRAINT pk_clientes PRIMARY KEY(n_id),
CONSTRAINT fk_clientes_vendedores FOREIGN KEY (n_vendedor_id) REFERENCES vendedores(n_id)
)ENGINE=InnoDB;

# Crear tabla encargos
CREATE TABLE encargos(
n_id            int(10) AUTO_INCREMENT NOT NULL,
n_cliente_id    int(10) NOT NULL,
n_coche_id      int(10) NOT NULL,
n_cantidad      int(10) NOT NULL,
d_fecha         date,
CONSTRAINT pk_encargos PRIMARY KEY(n_id),
CONSTRAINT fk_encargo_cliente FOREIGN KEY (n_cliente_id) REFERENCES clientes(n_id),
CONSTRAINT fk_encargo_coche FOREIGN KEY (n_coche_id) REFERENCES coches(n_id)
)ENGINE=InnoDB;