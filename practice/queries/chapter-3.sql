-- Active: 1686121979680@@127.0.0.1@49161@XE@SYSTEM

-- Write a query to display the system date. Label the column as Date.

-- Note: If your database is remotely located in a different time zone, the output will be the date

-- for the operating system on which the database resides.

SELECT SYSDATE AS Day FROM DUAL;

-- The HR department needs a report to display the employee number, last name, salary, and

-- salary increased by 15.5% (expressed as a whole number) for each employee. Label the column

-- New Salary.

SELECT
    employee_id,
    last_name,
    salary,
    salary + (salary * 0.155) AS "New salary"
FROM "EMPLOYEES";

-- Modify your query lab_03_02.sql to add a column that subtracts the old salary from the

-- new salary. Label the column Increase.

SELECT
    employee_id,
    last_name,
    salary,
    salary + (salary * 0.155) AS "New SALARY",
    salary * 0.155 AS "INCREASE"
FROM "EMPLOYEES";

-- Write a query that displays the last name (with the first letter in uppercase and all the other

-- letters in lowercase) and the length of the last name for all employees whose name starts with

-- the letters “J,” “A,” or “M.” Give each column an appropriate label. Sort the results by the

-- employees’ last names.

SELECT
    INITCAP(last_name) AS "LAST_NAME",
    LENGTH("LAST_NAME") AS "LENGTH"
FROM "EMPLOYEES"
WHERE
    "LAST_NAME" LIKE 'J%'
    OR "LAST_NAME" LIKE 'A%'
    OR "LAST_NAME" LIKE 'M%';

-- The HR department wants to find the duration of employment for each employee. For each

-- employee, display the last name and calculate the number of months between today and the

-- date on which the employee was hired. Label the column as MONTHS_WORKED. Order your

-- results by the number of months employed. Round the number of months up to the closest

-- whole number

SELECT
    LAST_NAME,
    ROUND(
        MONTHS_BETWEEN(SYSDATE, "HIRE_DATE")
    ) AS MONTHS
FROM "EMPLOYEES"
ORDER BY
    ROUND(
        MONTHS_BETWEEN(SYSDATE, "HIRE_DATE")
    ) ASC;

-- Create a query to display the last name and salary for all employees. Format the salary to be 15

-- characters long, left-padded with the $ symbol. Label the column as SALARY

SELECT LAST_NAME,LPAD(SALARY, 15 , '$') AS SALARY FROM "EMPLOYEES";

-- Create a query that displays the first eight characters of the employees’ last names and indicates

-- the amounts of their salaries with asterisks. Each asterisk signifies a thousand dollars. Sort the

-- data in descending order of salary.

SELECT
    LAST_NAME || ' ' || TRANSLATE(
        "SALARY",
        '0123456789',
        '*********'
    ) AS "EMPLOYESS AND THEIR SALARIES",
    SALARY
FROM "EMPLOYEES";

-- Create a query to display the last name and the number of weeks employed for all employees in

-- department 90. Label the number of weeks column as TENURE. Truncate the number of weeks

-- value to 0 decimal places. Show the records in descending order of the employee’s tenure.

-- Note: The TENURE value will differ as it depends on the date on which you run the query

SELECT
    LAST_NAME, ROUND((SYSDATE - HIRE_DATE) / 7) AS TENURE
FROM "EMPLOYEES";