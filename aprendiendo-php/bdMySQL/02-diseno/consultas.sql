
/*
    AVG: Sacar la media estadística
    COUNT: Contar el número de elementos
    MAX: Valor máximo
    MIN: Valor mínimo
    SUM: Sumar todo el contenido del grupo
*/

# Mostrar la media de las entradas
SELECT AVG(n_id) FROM entradas;

# Consultas de agrupamiento, se recomienda usar HAVING en vez de WHERE
SELECT COUNT(s_titulo) AS 'Títulos', n_categoria_id from entradas GROUP BY n_categoria_id HAVING COUNT(s_titulo) >=2;

# Subconsultas
SELECT s_nombre FROM usuarios WHERE n_id IN (SELECT n_usuario_id FROM entradas WHERE s_descripcion LIKE '%libro%');

# Sacar todas las entradas de la categoría aventura utilizando su nombre:
SELECT s_titulo FROM entradas where n_id = (SELECT n_id FROM categorias WHERE s_nombre = 'Aventura');

# Mostrar las categorías con 3 o más entradas:
SELECT * FROM categorias WHERE n_id IN (SELECT n_categoria_id FROM entradas GROUP BY n_categoria_id HAVING COUNT(n_categoria_id)>=2);

# Mostrar los usuarios que crearon una entrada un Jueves

SELECT * FROM usuarios WHERE n_id IN 
    (SELECT n_usuario_id FROM entradas WHERE DAYOFWEEK(d_fecha)=6);

# Seleccionar usuario que tenga más entradas
SELECT CONCAT (s_nombre, ' ', s_apellidos) AS 'Usuario con más entradas' FROM usuarios 
WHERE n_id = (SELECT COUNT(n_id) FROM entradas GROUP BY n_usuario_id ORDER BY COUNT(n_id) DESC LIMIT 1);