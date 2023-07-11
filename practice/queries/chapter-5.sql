-- Find the highest, lowest, sum, and average salary of all employees. Label the columns

-- as Maximum, Minimum, Sum, and Average, respectively. Round your results to the nearest

-- whole number. Save your SQL statement as lab_05_04.sql. Run the query

SELECT
    MAX(SALARY) AS Maximum,
    MIN(SALARY) AS Minimum,
    SUM(SALARY) AS "Sum",
    ROUND(AVG(SALARY)) AS Average
FROM EMPLOYEES;

-- Modify the query in lab_05_04.sql to display the minimum, maximum, sum, and average

-- salary for each job type. Resave lab_05_04.sql as lab_05_05.sql. Run the statement

-- in lab_05_05.sql.

SELECT
    JOB_ID,
    MAX(SALARY) AS Maximum,
    MIN(SALARY) AS Minimum,
    SUM(SALARY) AS "Sum",
    ROUND(AVG(SALARY)) AS Average
FROM EMPLOYEES
GROUP BY "JOB_ID";

-- Write a query to display the number of people with the same job.

SELECT
    JOB_ID,
    COUNT(JOB_ID) AS "COUNT(*)"
FROM "EMPLOYEES"
GROUP BY "JOB_ID";

-- Determine the number of managers without listing them. Label the column as Number of

-- Managers. Hint: Use the MANAGER_ID column to determine the number of managers.

SELECT
    COUNT(DISTINCT(MANAGER_ID)) "Number of manager"
FROM "EMPLOYEES";

-- Find the difference between the highest and lowest salaries. Label the column DIFFERENCE

SELECT MAX(SALARY) - MIN(SALARY) AS DIFFERENCE FROM "EMPLOYEES";

-- Create a report to display the manager number and the salary of the lowest-paid employee for

-- that manager. Exclude anyone whose manager is not known. Exclude any groups where the

-- minimum salary is $6,000 or less. Sort the output in descending order of salary.

SELECT
    DISTINCT(MANAGER_ID),
    MIN(SALARY)
FROM "EMPLOYEES"
WHERE
    MANAGER_ID IS NOT NULL
    AND SALARY > 6000
GROUP BY "MANAGER_ID"
ORDER BY MIN(SALARY) DESC;

-- Create a query to display the total number of employees and, of that total, the number of

-- employees hired in 2002, 2003, 2004, 2005 and 2008. Create appropriate column headings.

SELECT
    COUNT(*) AS TOTAL,
    SUM(
        DECODE(
            TO_CHAR(HIRE_DATE, 'YYYY'),
            2002,
            1, --TRUE  
            0  --FALSE
        )
    ) "2002",
    SUM(
        DECODE(
            TO_CHAR(HIRE_DATE, 'YYYY'),
            2003,
            1,
            0
        )
    ) "2003",
    SUM(
        DECODE(
            TO_CHAR(HIRE_DATE, 'YYYY'),
            2004,
            1,
            0
        )
    ) "2004",
    SUM(
        DECODE(
            TO_CHAR(HIRE_DATE, 'YYYY'),
            2005,
            1,
            0
        )
    ) "2005",
    SUM(
        DECODE(
            TO_CHAR(HIRE_DATE, 'YYYY'),
            2008,
            1,
            0
        )
    ) "2008"
FROM "EMPLOYEES";


-- Create a matrix query to display the job, the salary for that job based on department number, and the
-- total salary for that job, for departments 20, 50, 80, and 90, giving each column an appropriate
-- heading.

SELECT job_id "Job",
SUM(DECODE(department_id , 20, salary)) "Dept 20" ,
SUM(DECODE(department_id , 50, salary)) "Dept 50" ,
SUM(DECODE(department_id , 80, salary)) "Dept 80" ,
SUM(DECODE(department_id , 90, salary)) "Dept 90" ,
SUM(salary) "Total"
FROM employees
GROUP BY job_id;