-- Nombre, apellido e IP, donde la última conexión se dió de 221.XXX.XXX.XXX

SELECT
    first_name,
    last_name,
    last_connection
FROM users
WHERE
    last_connection LIKE '221%';

-- Nombre, apellido y seguidores(followers) de todos a los que lo siguen más de 4600 personas

SELECT
    first_name,
    last_name,
    followers
FROM users
WHERE followers > 4600;

SELECT
    COUNT(*) AS total_users,
    MIN(followers) AS min_followers,
    MAX(followers) AS max_followers,
    ROUND(AVG(followers)) AS avg_followers
FROM users;

SELECT COUNT(*), followers
FROM users
WHERE
    followers = 4
    OR followers = 4999
GROUP BY followers;

-- 7 registers with	4 followers

-- 5 registers with	4999 followers

SELECT 
    COUNT(*), country
FROM 
    users
GROUP BY country
HAVING COUNT(*) > 5
ORDER BY COUNT(*);   


SELECT DISTINCT country FROM users; 

SELECT 
email,
SUBSTRING(email,POSITION('@' IN email) + 1) AS domain
FROM users; 

-- bokegop.id

SELECT 
COUNT(*),
SUBSTRING(email,POSITION('@' IN email) + 1) AS domain
FROM users
GROUP BY SUBSTRING(email,POSITION('@' IN email) + 1);