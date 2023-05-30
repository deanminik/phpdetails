SELECT employee_id, last_name, job_id, hire_date as HIRE_DATE
FROM employees;

-- The HR department has requested a report of all employees and their job IDs. Display the last
-- name concatenated with the job ID (separated by a comma and space) and name the column
-- Employee and Title.

SELECT last_name ||', ' || job_id AS Employee_and_Title
FROM employees;

