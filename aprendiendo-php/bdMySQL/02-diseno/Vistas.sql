/* 
 * Vistas: Consulta almacenada en la Base de datos (Tabla virtual), 
no almacena datos, sino que utiliza asociaciones y los datos de las tablas originales por lo que mantiene actualizada
 */
# Crear vista
CREATE VIEW entradasPorCategorias AS
SELECT c.s_nombre, COUNT(e.n_categoria_id) FROM categorias c
INNER JOIN entradas e
ON e.n_categoria_id = c.n_id
GROUP BY e.n_categoria_id;

# Ejecutar vista
SELECT * FROM entradasPorCategorias;

# Eliminar vista
DROP VIEW entradasPorCategorias;