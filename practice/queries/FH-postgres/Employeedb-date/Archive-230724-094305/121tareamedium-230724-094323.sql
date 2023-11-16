-- 1. Cuantos Post hay - 1050
SELECT COUNT(*) FROM posts;


-- 2. Cuantos Post publicados hay - 543
SELECT COUNT(*) FROM posts WHERE published = true

-- 3. Cual es el Post mas reciente
-- 544 - nisi commodo officia...2024-05-30 00:29:21.277

SELECT * FROM posts WHERE created_at = (SELECT MAX(created_at) FROM posts);


-- 4. Quiero los 10 usuarios con más post, cantidad de posts, id y nombre
/*
4	1553	Jessie Sexton
3	1400	Prince Fuentes
3	1830	Hull George
3	470	Traci Wood
3	441	Livingston Davis
3	1942	Inez Dennis
3	1665	Maggie Davidson
3	524	Lidia Sparks
3	436	Mccoy Boone
3	2034	Bonita Rowe
*/


SELECT
    COUNT(*),
    b.user_id,
    b.name
FROM
	posts a
INNER JOIN
    users b
ON
    a.created_by = b.user_id
GROUP BY 
	b.user_id
ORDER BY 
	COUNT(*) DESC
LIMIT
	10;

-- 5. Quiero los 5 post con más "Claps" sumando la columna "counter"
/*
692	sit excepteur ex ipsum magna fugiat laborum exercitation fugiat
646	do deserunt ea
542	do
504	ea est sunt magna consectetur tempor cupidatat
502	amet exercitation tempor laborum fugiat aliquip dolore
*/

SELECT 
	SUM(counter),
	b.title	
FROM 
	claps a 
INNER JOIN
	posts b
ON 
	a.post_id = b.post_id
GROUP BY
	a.post_id, b.title
ORDER BY 
	SUM(counter) DESC
LIMIT 
	5;


-- 6. Top 5 de personas que han dado más claps (voto único no acumulado ) *count
/*
7	Lillian Hodge
6	Dominguez Carson
6	Marva Joyner
6	Lela Cardenas
6	Rose Owen
*/

SELECT 
	b.name,
	COUNT(counter)
FROM 
	claps a
INNER JOIN
	users b
ON
	a.user_id = b.user_id
GROUP BY
	b.name
ORDER BY
	COUNT(counter) DESC
LIMIT
	5;




-- 7. Top 5 personas con votos acumulados (sumar counter)
/*
437	Rose Owen
394	Marva Joyner
386	Marquez Kennedy
379	Jenna Roth
364	Lillian Hodge
*/

SELECT 
	b.name,
	SUM(counter)
FROM 
	claps a
INNER JOIN
	users b
ON
	a.user_id = b.user_id
GROUP BY
	b.name
ORDER BY
	SUM(counter) DESC
LIMIT
	5;

-- 8. Cuantos usuarios NO tienen listas de favoritos creada
-- 329

SELECT 
    COUNT(*)
FROM 
	users
LEFT JOIN 
	user_lists 
ON 
	users.user_id = user_lists.user_id
WHERE
	user_lists IS NULL
	


-- 9. Quiero el comentario con id
-- Y en el mismo resultado, quiero sus respuestas (visibles e invisibles)
-- Tip: union
/*
1	    648	1905	elit id...
3058	583	1797	tempor mollit...
4649	51	1842	laborum mollit...
4768	835	1447	nostrud nulla...
*/

(SELECT * FROM comments WHERE comment_id = 1)
UNION
(SELECT * FROM comments WHERE comment_parent_id = 1);

-- ** 10. Avanzado
-- Investigar sobre el json_agg y json_build_object
-- Crear una única linea de respuesta, con las respuestas
-- del comentario con id 1 (comment_parent_id = 1)
-- Mostrar el user_id y el contenido del comentario

-- Salida esperada:
/*
"[{""user"" : 1797, ""comment"" : ""tempor mollit aliqua dolore cupidatat dolor tempor""}, {""user"" : 1842, ""comment"" : ""laborum mollit amet aliqua enim eiusmod ut""}, {""user"" : 1447, ""comment"" : ""nostrud nulla duis enim duis reprehenderit laboris voluptate cupidatat""}]"
*/


SELECT * FROM comments WHERE comment_parent_id = 1;

SELECT json_agg(comment_id) FROM comments WHERE comment_parent_id = 1; --> "[3058, 4649, 4768]"

SELECT json_build_object(
	'user', comments.user_id,
	'comment', comments.content
) FROM comments WHERE comment_parent_id = 1; 
--> "{""user"" : 1797, ""comment"" : ""tempor mollit aliqua dolore cupidatat dolor tempor""}"
-->"{""user"" : 1842, ""comment"" : ""laborum mollit amet aliqua enim eiusmod ut""}"
-->"{""user"" : 1447, ""comment"" : ""nostrud nulla duis enim duis reprehenderit laboris voluptate cupidatat""}"

SELECT json_agg(json_build_object(
	'user', comments.user_id,
	'comment', comments.content
)) FROM comments WHERE comment_parent_id = 1; 

--> "[{""user"" : 1797, ""comment"" : ""tempor mollit aliqua dolore cupidatat dolor tempor""}, {""user"" : 1842, ""comment"" : ""laborum mollit amet aliqua enim eiusmod ut""}, {""user"" : 1447, ""comment"" : ""nostrud nulla duis enim duis reprehenderit laboris voluptate cupidatat""}]"



-- ** 11. Avanzado
-- Listar todos los comentarios principales (no respuestas) 
-- Y crear una columna adicional "replies" con las respuestas en formato JSON

SELECT 
	a.*,
	(
		SELECT json_agg(json_build_object(
			'user', b.user_id,
			'comment', b.content
		)) 
		FROM comments b WHERE b.comment_parent_id = a.comment_id
	) AS replies
FROM comments a
WHERE comment_parent_id IS NULL


-- v2 using functions 
CREATE OR REPLACE FUNCTION comment_replies(id integer)
RETURNS json
AS
$$
DECLARE result json;
BEGIN
	SELECT json_agg(json_build_object(
		'user', comments.user_id,
		'comment', comments.content
		)) INTO result
	FROM comments WHERE comment_parent_id = id; 
	
	RETURN result;
END;
$$
LANGUAGE plpgsql;

-- I want the comments of the comment 1 
SELECT comment_replies(1)
--> "[{""user"" : 1797, ""comment"" : ""tempor mollit aliqua dolore cupidatat dolor tempor""}, {""user"" : 1842, ""comment"" : ""laborum mollit amet aliqua enim eiusmod ut""}, {""user"" : 1447, ""comment"" : ""nostrud nulla duis enim duis reprehenderit laboris voluptate cupidatat""}]"
-- I want the comments of the comment 5
SELECT comment_replies(5)

SELECT 
	a.*,
	comment_replies(a.post_id) AS replies
FROM comments a
WHERE comment_parent_id IS NULL

SELECT 
	c.*,
	comment_replies(c.comment_id) AS replies
FROM comments c
WHERE c.comment_parent_id IS NULL