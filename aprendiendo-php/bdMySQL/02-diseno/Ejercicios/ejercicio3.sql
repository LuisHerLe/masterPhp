use concesionario;
# Modificar la comición de los vendedores y ponerla en 0.5, cuando se ganen más de 50000
UPDATE vendedores set n_comision = 0.5 where n_sueldo >= 50000;

# Incrementar el precio de los coches en un 5%
UPDATE coches set n_precio = (n_precio * 1.05);

# Mostrar todos los vendedores cuya fecha de alta sea posterior al 5-oct-2019
SELECT * FROM vendedores where d_fecha_alta >= '2019-10-05';

# Mostrar vendedores y los días que lleva trabajando en el concesionario
SELECT CONCAT(s_nombre, ' ', s_apellidos) AS 'Vendedor', DATEDIFF(CURDATE(), d_fecha_alta) AS 'Días' FROM vendedores;

/* Visualizar el nombre y los apellidos de los vendedores en una misma columna 
    y su fecha de registro y qué día de la semana era cuando se registraron
*/
SELECT CONCAT(s_nombre, ' ', s_apellidos) AS 'Vendedor', d_fecha_alta, DAYNAME(d_fecha_alta) AS 'Día de alta' from vendedores;

# Mostrar el nombre y el salario de los vendedores con cargo de Ayudante de tienda
SELECT s_nombre, n_sueldo from vendedores WHERE s_cargo LIKE '%Ayudante%';

# Visualizar todos los coches cuya marca exista la letra "A" y que empiecen por F
SELECT * FROM coches where s_modelo LIKE 'F%' AND s_marca LIKE '%a%'

# Mostrar todos los vendedores del grupo número 2, ordenados por salario (Mayor a menor)
SELECT * FROM vendedores where n_grupo_id = 2 ORDER BY n_sueldo DESC;

# Visualizar los apellidos de los vendedores, su fecha de alta y su número de grupo, ordenado por fecha descendente y liminar los 4 últimos
SELECT s_apellidos, d_fecha_alta, n_grupo_id FROM vendedores ORDER BY d_fecha_alta DESC LIMIT 4;

# Visualizar todos los cargos de los vendedores y el número de vendedores que están dentro del cargo
SELECT s_cargo, COUNT(s_nombre) AS 'Cantidad de vendedores' FROM vendedores GROUP BY s_cargo ORDER BY COUNT(s_nombre) DESC;

# Conseguir la masa salarial anual del concesionario
SELECT SUM(n_sueldo) AS 'Masa Salarial Anual' FROM vendedores;

# Sacar la media de sueltos entre todos los vendedores por grupo
SELECT n_grupo_id, AVG(n_sueldo) FROM vendedores GROUP BY n_grupo_id ORDER BY n_grupo_id DESC;
    # Con Inner join
        SELECT g.s_nombre AS 'Nombre Grupo', AVG(ROUND(v.n_sueldo,1)) AS 'Promedio Sueldo', g.s_ciudad AS 'Ciudad' FROM vendedores v
        INNER JOIN grupos g
        ON v.n_grupo_id = g.n_id
        GROUP BY n_grupo_id;

# Visualizar las unidades totales vendidas de cada coche a cada cliente
SELECT SUM(en.n_cantidad) AS 'Cantidad Coches Vendidos', cl.s_nombre AS 'Cliente', CONCAT (co.s_marca, ' - ', co.s_modelo) AS 'Coche'
FROM encargos en
LEFT JOIN clientes cl
ON en.n_cliente_id = cl.n_id
LEFT JOIN coches co
ON en.n_coche_id = co.n_id
GROUP BY en.n_coche_id, en.n_cliente_id;

# Obtener listado de clientes atendidos por David Lopez
SELECT * FROM clientes where n_vendedor_id IN (SELECT n_id FROM vendedores WHERE s_nombre = 'David' AND s_apellidos = 'Lopez');

# Obtener un listado con los encargos realizados por el cliente 'Frutería Antonia'
WHERE n_cliente_id IN (SELECT n_id FROM clientes WHERE s_nombre = 'Frutería Antonia');
# INNJER JOIN
SELECT en.n_id 'ID Pedido', cl.s_nombre AS 'Cliente', co.s_modelo  AS 'Modelo', en.n_cantidad AS 'Cantidad'
FROM encargos en
INNER JOIN coches co ON en.n_coche_id = co.n_id
LEFT JOIN clientes cl ON en.n_cliente_id = cl.n_id
WHERE n_cliente_id IN (SELECT n_id FROM clientes WHERE s_nombre = 'Frutería Antonia');

# Listar clientes que han hecho algún encargo del coche Mercedes Ranchera
SELECT cl.s_nombre AS 'Cliente', co.s_modelo AS 'Coche', cl.d_fecha AS 'Fecha Encargo'
FROM encargos en
JOIN clientes cl ON en.n_cliente_id = cl.n_id
JOIN coches co ON en.n_coche_id = co.n_id
WHERE co.s_modelo = 'Mercedes Ranchera';

# Obtener los vendedores con dos o más clientes
SELECT * FROM vendedores WHERE n_id 
IN (SELECT COUNT(n_vendedor_id) FROM clientes GROUP BY n_vendedor_id HAVING COUNT(n_vendedor_id)>= 2);

# Mostrar el nombre del grupo donde trabaja el vendedor con mayor salario
SELECT gr.s_nombre AS 'Grupo', ve.n_sueldo AS 'Sueldo más alto'
FROM vendedores ve
INNER JOIN grupos gr
ON ve.n_grupo_id = gr.n_id
ORDER BY n_sueldo DESC LIMIT 1;

# Mostrar nombre y ciudad de clientes que tengan más de 3 encargos
SELECT cl.s_nombre AS 'Cliente', cl.s_ciudad AS 'Ciudad'
FROM clientes cl 
WHERE cl.n_id IN (SELECT en.n_cliente_id FROM encargos en WHERE en.n_cantidad >= 3);

# Mostrar listado de clientes, mostrando id, nombre del cliente y el id y nombre de vendedor
SELECT cl.n_id AS 'ID Cliente', cl.s_nombre AS 'Nombre del Cliente', 
       ve.n_id AS 'ID Vendedor', CONCAT(ve.s_nombre, ' ', ve.s_apellidos) AS 'Nombre Vendedor'
FROM clientes cl
LEFT JOIN vendedores ve
ON cl.n_id = ve.n_id;

# Listar todos los encargos realizados con la marca del coche y el nombre del cliente
SELECT en.n_id AS 'ID Encargo', cl.s_nombre AS 'Nombre Cliente', co.s_marca 'Marca Coche', en.n_cantidad AS 'Cantidad', en.d_fecha AS 'Fecha Encargo'
FROM encargos en
INNER JOIN clientes cl
ON en.n_cliente_id = cl.n_id
INNER JOIN coches co
ON en.n_coche_id = co.n_id;

# Listar los encargos con el nombre del coche, nombre del cliente, nombre de la ciudad del cliente, cuando sean de Barcelona
SELECT en.n_id AS 'ID Encargo', co.s_marca 'Marca Coche', cl.s_nombre AS 'Nombre Cliente', cl.s_ciudad 'Ciudad del Cliente'
FROM encargos en
INNER JOIN coches co
ON en.n_coche_id = co.n_id
INNER JOIN clientes cl
ON en.n_cliente_id = cl.n_id
WHERE cl.s_ciudad = 'Barcelona';

# Obtener una lista de los nombres de clientes con el importe de sus encargos acumulados, ordenado por la segunda columna
SELECT cl.s_nombre AS 'Nombre Cliente', SUM(cl.n_gastado * en.n_cantidad) AS 'Importe'
FROM clientes cl
INNER JOIN encargos en ON cl.n_id = en.n_cliente_id
INNER JOIN coches co ON en.n_coche_id = co.n_id
GROUP BY cl.s_nombre
ORDER BY 2 DESC;

# Mostrar los vendedores que tienen jefe y sacar el nombre del jefe
SELECT CONCANT(ve1.s_nombre, ' ', ve1.s_apellidos) AS 'Vendedor', CONCANT(ve2.s_nombre, ' ', ve2.s_apellidos) AS 'Jefe', 
FROM vendedores ve2
INNER JOING vendedores v2 ON ve1.n_id = ve2.n_jefe;

# Visualizar los nombres de los clientes y la cantidad de encargos realizados, incluyendo los que no los han realizado 
SELECT cl.s_nombre AS 'Nombre Cliente', COUNT(en.n_id) AS 'Cantidad Encargos'
FROM clientes cl
LEFT JOIN encargos en
ON en.n_cliente_id = cl.n_id
GROUP BY 1;

# Mostrar todos los vendedores así no tengan clientes
SELECT CONCAT(ve.s_nombre, ' ', ve.s_apellidos) AS 'Vendedor', COUNT(cl.n_id) AS 'Cantidad de Clientes' 
FROM vendedores ve
LEFT JOIN clientes cl
ON ve.n_id = cl.n_vendedor_id
GROUP BY cl.n_id;

# Crear una vista llamada vendedoresA que incluirá todos los vendedores del grupo "Vendedores A"
CREATE VIEW vendedoresA AS
SELECT * FROM vendedores WHERE n_grupo_id IN
(SELECT n_id FROM grupos gr WHERE gr.s_nombre = "Vededores A"); 

SELECT * FROM vendedoresA;

# Mostrar los datos del vendedor con más antiguedad en el concecionario
SELECT * FROM vendedores 
ORDER BY d_fecha_alta ASC
LIMIT 1;

# Obtener los datos de coches con más unidades vendidas en los encargos
SELECT * FROM coches WHERE n_id IN 
(SELECT en.n_coche_id FROM encargos en WHERE en.n_cantidad IN
(SELECT MAX(en.n_cantidad) FROM encargos en));




















