/* 
 * Base de datos de tienda
 */
/**
 * Author:  Luis Hernandez<luifo2033@gmail.com>
 * Created: 5/01/2020
 */

CREATE DATABASE tienda_master;
USE tienda_master;

--Usuarios
CREATE TABLE usuarios(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
apellidos       varchar(255),
email           varchar(255) not null,
password        varchar(255) not null,
rol             varchar(20),
imagen          varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY (id),
CONSTRAINT uk_email UNIQUE(email)
)ENGINE=InnoDb;

INSERT INTO usuarios values(null, 'Admin', 'Admin', 'admin@tienda.com', '123456', 'administrador', null);

-- categrias
CREATE TABLE categorias(
id          int(255) auto_increment not null,
nombre      varchar(100) not null,
CONSTRAINT  pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(null,'Manga Corta');
INSERT INTO categorias VALUES(null,'Tirantes');
INSERT INTO categorias VALUES(null,'Manga Larga');
INSERT INTO categorias VALUES(null,'Sudadera');


--Productos
CREATE TABLE productos(
id              int(255) auto_increment not null,
categoria_id    int(255) not null,
nombre          varchar(100) not null,
descripcion     text,
precio          float(100,2) not null,
stock           int(255) not null,
oferta          varchar(2),
fecha           date not null,
imagen          varchar(255),
CONSTRAINT pk_productos PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

--Pedidos
CREATE TABLE pedidos(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,   
provincia       varchar(100) not null,
localidad       varchar(100) not null,
direccion       varchar(255) not null,
coste           float(200,2) not null,
estado          varchar(20) not null,
fecha           date,
hora            time,
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

-- lineas_Pedidos
CREATE TABLE lineas_Pedidos(
id              int(255) auto_increment not null,
pedido_id       int(255) not null,
producto_id     int(255) not null,
CONSTRAINT pk_lineas_Pedidos PRIMARY KEY(id),
CONSTRAINT fk_lineaPedido_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
CONSTRAINT fk_lineaPedido_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;