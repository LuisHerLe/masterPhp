/* 
    Crear una tabla
 */

CREATE TABLE usuarios(
n_id         int(11) auto_increment not null,
s_nombre     varchar(100) not null,
s_apellidos  varchar(255) default 'Apellido',
s_email      varchar(100) not null,
s_password   varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(n_id)
);

