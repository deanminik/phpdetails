SELECT MAX(months * salary), COUNT(*) AS count_max
FROM EMPLOYEE
WHERE (months * salary) = (
    SELECT MAX(months * salary)
    FROM EMPLOYEE
);