# Mostrar usuarios que tengan más de dos entradas
SELECT s_nombre FROM usuarios WHERE n_id IN (SELECT n_usuario_id FROM entradas GROUP BY n_usuario_id having COUNT(n_id)>2);

# Mostrar usuarios que NO tengan más de dos entradas
SELECT * FROM usuarios WHERE n_id not IN (SELECT n_usuario_id FROM entradas GROUP BY n_usuario_id having COUNT(n_id)>2);

# Mostrar usuarios que hayan hablado de "Fernando Trujillo"
SELECT CONCAT(s_nombre, ' ', s_apellidos) AS 'Personas' FROM usuarios WHERE n_id IN (SELECT n_usuario_id FROM entradas WHERE s_descripcion LIKE '%Felipe Trujillo%');
