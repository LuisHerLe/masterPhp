# Mostrar las entradas con el nombre del autoria y la categoría 
/*
    Uso de alias, ponerle un alias al lado de la tabla, se podrá usar como nombre de tabla en el select y reduce el código
*/
SELECT CONCAT(u.s_nombre, ' ',u.s_apellidos) AS 'Nombre Completo', c.s_nombre AS 'Categoría', e.s_titulo AS 'Título' 
FROM entradas e, usuarios u, categorias c
WHERE u.n_id = e.n_usuario_id AND c.n_id = e.n_categoria_id;

# INNER JOIN
SELECT CONCAT(u.s_nombre, ' ',u.s_apellidos) AS 'Nombre Completo', e.s_titulo AS 'Título', c.s_nombre AS 'Categoría' 
FROM entradas e
INNER JOIN usuarios u ON e.n_usuario_id = u.n_id
INNER JOIN categorias c ON e.n_categoria_id = c.n_id;

# Mostrar  el nombre de la categoría y el número de entradas que tiene
SELECT c.s_nombre AS 'Categoría', COUNT(e.n_id) AS 'Número de Entradas' FROM categorias c, entradas e 
WHERE c.n_id = e.n_categoria_id 
GROUP BY e.n_categoria_id;

# INNER JOIN


# Mostrar el email de los usuarios y cuántas entradas tiene 
SELECT u.s_email AS 'Correo', COUNT(e.n_id) AS 'Número de entradas' FROM usuarios u, entradas e
WHERE u.n_id = e.n_usuario_id
GROUP BY e.n_usuario_id;

# Inner Join
SELECT e.s_titulo, c.s_nombre FROM entradas e
INNER JOIN categorias c
ON e.n_categoria_id = c.n_id;

# Cantidad de entradas por categorías
SELECT c.s_nombre, COUNT(e.n_categoria_id) FROM categorias c
INNER JOIN entradas e
ON e.n_categoria_id = c.n_id
GROUP BY e.n_categoria_id;

# LEFT JOIN Muestra todas las filas de la izquierda así no hayan campos relacionados con la tabla de la derecha
SELECT c.s_nombre, COUNT(e.n_categoria_id) FROM categorias c
LEFT JOIN entradas e
ON e.n_categoria_id = c.n_id
GROUP BY e.n_categoria_id;

# RIGHT JOIN: Muestra todas las filas de la derecha así no hayan campos relacionados con la tabla de la izquierda
SELECT c.s_nombre, COUNT(e.n_categoria_id) FROM categorias c
RIGHT JOIN entradas e
ON e.n_categoria_id = c.n_id
GROUP BY e.n_categoria_id;