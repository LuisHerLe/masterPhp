/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  user
 * Created: 28/09/2019
 */

# DB PLEICULAS;

CREATE TABLE peliculas(
n_id int(5) NOT NULL AUTO_INCREMENT,
s_nombre VARCHAR(40) NOT NULL,
s_director VARCHAR(30) DEFAULT 'Desconocido',
d_fecha_lanzamiento DATE,
s_genero VARCHAR(20),
n_recaudo BIGINT(20),
CONSTRAINT pk_peliculas PRIMARY KEY(n_id)
);

ALTER TABLE peliculas MODIFY n_recaudo BIGINT();


INSERT INTO peliculas VALUES(null, 'Los juegos del Hambre', DEFAULT, '2014-08-01', 'Ciencia ficción', 1200000);
INSERT INTO peliculas VALUES(null, 'Harry Potter y el Cáliz de Fuego', DEFAULT, '2012-04-10', 'Ciencia ficción', 6005400);
INSERT INTO peliculas VALUES(null, 'Las Crónicas de Narnia', DEFAULT, '2008-10-22', 'Ciencia ficción', 5600098900);
INSERT INTO peliculas VALUES(null, 'La lista de Schindler', 'Steven Spielberg', '1999/03/22', 'Drama', 456000120);
INSERT INTO peliculas VALUES(null, 'La Pasión  de Cristo', 'Steven Spielberg', '2010-08-19', 'Drama', 456000120);
INSERT INTO peliculas VALUES(null, 'Otra de Spielberg', 'Steven Spielberg', '2014-11-07', 'Drama', 456000120);
INSERT INTO peliculas VALUES(null, 'La vida es bella', 'Roberto Benigni', '1998-10-23', 'Drama', 1256000000);
INSERT INTO peliculas VALUES(null, 'Las posibles vidas de Mr. Nobody', 'Jaco Van Dormael', '2009-11-06', 'Ciencia ficción', 340009023);
INSERT INTO peliculas VALUES(null, 'Buscando a Nemo', 'Andrew Stanton', '2007-06-02', 'Infantil', 780003400);
INSERT INTO peliculas VALUES(null, 'Toy Story', 'Andrew Stanton', '2004-12-22', 'Infantil', 679000300);
INSERT INTO peliculas VALUES(null, 'Toy Story 2', 'Andrew Stanton', '2007-06-11', 'Infantil', 5500300030);
INSERT INTO peliculas VALUES(null, 'Toy Story 3', 'Andrew Stanton', '2012-11-06', 'Infantil', 880776000);
INSERT INTO peliculas VALUES(null, 'Cars', 'Andrew Stanton', '2005-05-14', 'Infantil', 459000200);
INSERT INTO peliculas VALUES(null, 'El viaje de Chihro', 'Hayao Miyazaki', '2004-12-22', 'Infantil', 456700000);
INSERT INTO peliculas VALUES(null, 'Mi vecino Totoro', 'Hayao Miyazaki', '1992-06-20', 'Infantil', 5500300210);
INSERT INTO peliculas VALUES(null, 'El viento se levanta', 'Hayao Miyazaki', '2013-11-01', 'Infantil', 990776000);
INSERT INTO peliculas VALUES(null, 'Nausica del valle del viento', 'Hayao Miyazaki', '1985-10-22', 'Infantil', 669000200);

# HAVING
SELECT * FROM peliculas WHERE YEAR(d_fecha_lanzamiento) > 2007 GROUP BY s_genero HAVING n_recaudo > 1200000;}

# Mostrar directores que no sean desconocidos agrupados por sus generos e indique cuantas películas por géneros tiene

SELECT s_director, s_genero, COUNT(s_genero) FROM peliculas WHERE s_director != 'Desconocido' group by (s_director);

# DB world
# Mostrar las ciudades y los países
SELECT co.Name AS 'País', co.Continent AS 'Continente', ci.Name AS 'Ciudad' FROM Country co, City ci WHERE co.Code = ci.CountryCode LIMIT 5;

SELECT co.Name AS 'País', co.Continent AS 'Continente', ci.Name AS 'Ciudad' 
    from City ci
    INNER JOIN Country co ON co.Code = ci.CountryCode
    GROUP BY ci.Name
    LIMIT 5;

SELECT * FROM entradas
INNER JOIN usuarios
ON entradas.n_usuario_id = usuarios.n_id;