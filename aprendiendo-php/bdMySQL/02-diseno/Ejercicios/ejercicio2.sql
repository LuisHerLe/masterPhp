/* 
 * Rellenar datos
 */

# Coches
INSERT INTO coches VALUES(null,'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES(null,'Seat Panda', 'Seat', 10000, 10);
INSERT INTO coches VALUES(null,'Mercedes Ranchera', 'Mercedez Benz', 32000, 24);
INSERT INTO coches VALUES(null,'Porche Cayene', 'Porche', 65000, 2);
INSERT INTO coches VALUES(null,'Lambo Aventador', 'Lamborgini', 17000, 2);
INSERT INTO coches VALUES(null,'Ferrari Spider', 'Ferrari', 24500, 80);

# Grupos
INSERT INTO grupos VALUES(null, 'Vededores A', 'Madrid');
INSERT INTO grupos VALUES(null, 'Vededores B', 'Madrid');
INSERT INTO grupos VALUES(null, 'Directores Mecánicos', 'Madrid');
INSERT INTO grupos VALUES(null, 'Vededores A', 'Barcelona');
INSERT INTO grupos VALUES(null, 'Vededores B', 'Barcelona');
INSERT INTO grupos VALUES(null, 'Vededores C', 'Valencia');
INSERT INTO grupos VALUES(null, 'Vededores A', 'Bilbao');
INSERT INTO grupos VALUES(null, 'Vededores B', 'Pamplona');
INSERT INTO grupos VALUES(null, 'Vededores C', 'Santiago de Compostela');

# Vendedores
INSERT INTO vendedores VALUES(null, 1, null, 'David', 'Lopez', 'Responsable de Tienda', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES(NULL, 1, 1, 'Fran', 'Martinez', 'Ayudante de Tienda', CURDATE(), 23000, 5);
INSERT INTO vendedores VALUES(NULL, 2, null, 'Nelson', 'Sánchez', 'Responsable de Tienda', CURDATE(), 38000, 5);
INSERT INTO vendedores VALUES(NULL, 2, 3, 'Jesus', 'Lopez', 'Ayudante de Tienda', CURDATE(), 12000, 6);
INSERT INTO vendedores VALUES(NULL, 3, null, 'Victor', 'Lopez', 'Mecánico Jefe', CURDATE(), 50000, 2);
INSERT INTO vendedores VALUES(NULL, 4, null, 'Antonio', 'Lopez', 'Vendedor de Recambios', CURDATE(), 13000, 8);
INSERT INTO vendedores VALUES(NULL, 5, null, 'Salvador', 'Lopez', 'Vendedor Experto', CURDATE(), 60000, 2);
INSERT INTO vendedores VALUES(NULL, 6, null, 'Joaquin', 'Lopez', 'Ejecutivo de Cuentas', CURDATE(), 80000, 1);
INSERT INTO vendedores VALUES(NULL, 6, 8, 'Luis', 'Lopez', 'Ayudante de Tienda', CURDATE(), 10000, 10);

# Clientes
INSERT INTO clientes VALUES (null, 1, 'Construcciones Díaz INC', 'Alcobendas', 20000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Frutería Antonia', 'Fuenlabrada', 40000,  CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Imprenta Martinez', 'Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Jesus Colchones', 'El Prat', 96000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Bar Pepe', 'Valencia', 17000, CURDATE());
INSERT INTO clientes VALUES (null, 1, 'Tienda PC inc', 'Murcia', 245000, CURDATE());

# Encargos
INSERT INTO encargos VALUES (null, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES (null, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES (null, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES (null, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES (null, 6, 6, 1, CURDATE());
