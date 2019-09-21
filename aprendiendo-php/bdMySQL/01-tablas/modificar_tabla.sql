# Renombrar tabla
ALTER TABLE usuarios_renom RENAME TO usuarios;

# Cambiar nombre de columna

ALTER TABLE usuarios CHANGE s _email s_contrasena varchar(100) null;

# Modificar columna sin cambiar nombre

ALTER TABLE usuarios MODIFY s_contrasena char(40);