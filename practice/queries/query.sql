SELECT 
CASE Occupation 
WHEN 'Doctor' THEN CONCAT(Name, '(D)') 
WHEN 'Professor' THEN CONCAT(Name, '(P)') 
WHEN 'Singer' THEN CONCAT(Name, '(S)') 
WHEN 'Actor' THEN CONCAT(Name, '(A)') 
ELSE 'NO OCCUPATION' END AS 'New'
FROM OCCUPATIONS
ORDER BY Name ASC;

SELECT CONCAT('There are a total of ', COUNT(*),' ',LOWER(Occupation),'s.')
FROM OCCUPATIONS
GROUP BY Occupation
ORDER BY COUNT(*) ASC;