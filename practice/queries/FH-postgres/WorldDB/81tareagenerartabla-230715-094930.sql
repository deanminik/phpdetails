

-- Count Union - Tarea
-- Total |  Continent
-- 5	  | Antarctica
-- 28	  | Oceania
-- 46	  | Europe
-- 51	  | America
-- 51	  | Asia
-- 58	  | Africa


(SELECT 
	COUNT(*) AS Total, 
	b.name AS Continent
FROM 
	country a
INNER JOIN 
	continent b
ON 
    a.continent = b.code
WHERE 
	b.name NOT LIKE '%America%'
GROUP BY 
	b.name)
UNION
(SELECT 
	COUNT(*) AS Total,
	'America'
FROM 
	country a
INNER JOIN 
	continent b
ON
	a.continent = b.code
WHERE
	b.name LIKE '%America%'
)
ORDER BY Total ASC;

-- I want to know the official languages that are spoken in every continent

--> See the idioms
SELECT * FROM countrylanguage; --> "ABW"	"Dutch"	true	5.3	105
SELECT * FROM countrylanguage WHERE isofficial = true; --> "ABW"	"Dutch"	true	5.3	105
-- well we got the official languages 

--> See the continent 
SELECT * FROM continent; --> 1	"Africa" | Nothing related with the languages 

-- So we need to make some kind of relationship, also country is calling the continent

SELECT * FROM country; --> "ABW"	"Aruba"	 (6)	"Caribbean"	193		103000	78.4	828.00	793.00	"Aruba"

-- Start mixing
SELECT 
	DISTINCT a.language,
	--b.continent,
	c.name AS Continent
FROM 
	countrylanguage a 
INNER JOIN country b ON a.countrycode = b.code
INNER JOIN continent c ON b.continent = c.code
WHERE 
	a.isofficial = true
ORDER BY Continent;
	
-- I want to know how many official languages that are spoken in every continent
SELECT COUNT(*), continent FROM (
	SELECT DISTINCT a.language, c.name AS continent
FROM 
	countrylanguage a 
INNER JOIN country b ON a.countrycode = b.code
INNER JOIN continent c ON b.continent = c.code
WHERE 
	a.isofficial = true) AS totales
GROUP BY continent;
