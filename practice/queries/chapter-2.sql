-- Because of budget issues, the HR department needs a report that displays the last name and

-- salary of employees who earn more than $12,000. Save your SQL statement as a file named

SELECT last_name, salary FROM employees WHERE "SALARY" > 12000;

-- Open a new SQL Worksheet. Create a report that displays the last name and department number

-- for employee number 176

SELECT
    last_name,
    "DEPARTMENT_ID"
FROM "EMPLOYEES"
WHERE "EMPLOYEE_ID" = 176;

-- The HR department needs to find high-salary and low-salary employees. Modify

-- lab_02_01.sql to display the last name and salary for any employee whose salary is not in

-- the range of $5,000 to $12,000

SELECT last_name, "SALARY"
FROM "EMPLOYEES"
WHERE
    "SALARY" NOT BETWEEN 5000 AND 12000;

-- Create a report to display the last name, job ID, and hire date for employees with the last names

-- of Matos and Taylor. Order the query in ascending order by the hire date.

SELECT
    last_name,
    job_id,
    hire_date
FROM "EMPLOYEES"
WHERE
    "LAST_NAME" IN ('Matos', 'Taylor');

-- Display the last name and department ID of all employees in departments 20 or 50 in ascending

-- alphabetical order by name

SELECT
    "LAST_NAME",
    department_id
FROM "EMPLOYEES"
WHERE
    "DEPARTMENT_ID" IN (20, 50)
ORDER BY "FIRST_NAME" ASC;

-- Modify lab_02_03.sql to display the last name and salary of employees who earn between

-- $5,000 and $12,000, and are in department 20 or 50. Label the columns Employee and

-- Monthly Salary, respectively.

SELECT "LAST_NAME", "SALARY"
FROM "EMPLOYEES"
WHERE
    "SALARY" BETWEEN 5000 AND 12000
    AND "DEPARTMENT_ID" IN(20, 50);

-- The HR department needs a report that displays the last name and hire date for all employees

-- who were hired in 2007.

SELECT LAST_NAME, HIRE_DATE
FROM "EMPLOYEES"
WHERE "HIRE_DATE" LIKE '%07';

-- Create a report to display the last name and job title of all employees who do not have a

-- manager.

SELECT LAST_NAME, JOB_ID FROM "EMPLOYEES" WHERE "MANAGER_ID" IS NULL;

-- Create a report to display the last name, salary, and commission of all employees who earn

-- commissions. Sort data in descending order of salary and commissions.

-- Use the column’s numeric position in the ORDER BY clause

SELECT
    LAST_NAME,
    SALARY,
    "COMMISSION_PCT"
FROM "EMPLOYEES"
WHERE "COMMISSION_PCT" > 0
ORDER BY
    "SALARY",
    "COMMISSION_PCT" DESC;

-- Members of the HR department want to have more flexibility with the queries that you are

-- writing. They would like a report that displays the last name and salary of employees who earn

-- more than an amount that the user specifies after a prompt.

SELECT LAST_NAME, SALARY FROM "EMPLOYEES" WHERE SALARY > &add_amount;

-- he HR department wants to run reports based on a manager. Create a query that prompts the

-- user for a manager ID and generates the employee ID, last name, salary, and department for

-- that manager’s employees. The HR department wants the ability to sort the report on a selected

-- column. You can test the data with the following values:

SELECT
    EMPLOYEE_ID,
    LAST_NAME,
    SALARY,
    DEPARTMENT_ID
FROM "EMPLOYEES"
WHERE MANAGER_ID = 103;

-- Display all employee last names in which the third letter of the name is “a.”

SELECT "LAST_NAME" FROM "EMPLOYEES" WHERE "LAST_NAME" like '__a%';

--  Display the last names of all employees who have both an “a” and an “e” in their last name.

SELECT LAST_NAME
FROM "EMPLOYEES"
WHERE
    "LAST_NAME" LIKE '%e%'
    AND "LAST_NAME" LIKE '%a%';

--  Display the last name, job, and salary for all employees whose jobs are either those of a sales

-- representative or of a stock clerk, and whose salaries are not equal to $2,500, $3,500, or $7,000

SELECT
    LAST_NAME,
    JOB_ID,
    SALARY
FROM "EMPLOYEES"
WHERE
    "JOB_ID" = 'ST_CLERK'
    OR "JOB_ID" = 'SA_REP'
    AND SALARY NOT IN (2500, 3500, 7000)
ORDER BY "LAST_NAME" ASC;

-- Modify lab_02_06.sql to display the last name, salary, and commission for all employees

-- whose commission is 20%.

SELECT
    LAST_NAME,
    SALARY,
    COMMISSION_PCT
FROM "EMPLOYEES"
WHERE COMMISSION_PCT = 0.2;