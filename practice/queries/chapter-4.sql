--  Create a report that produces the following for each employee:

-- <employee last name> earns <salary> monthly but wants <3 times

-- salary.>. Label the column Dream Salaries.

SELECT
    Last_name || ' earns ' || '$' || salary || ' monthly but wants ' || '$' || salary * 3 AS "Dream Salaries"
from employees;

-- Display each employee’s last name, hire date, and salary review date, which is the first Monday

-- after six months of service. Label the column REVIEW. Format the dates to appear in the format

-- similar to “Monday, the Thirty-First of July, 2000   227

SELECT
    last_name,
    hire_date,
    TO_CHAR(
        NEXT_DAY(
            ADD_MONTHS("HIRE_DATE", 6),
            'MONDAY'
        ),
        '"Monday, the "fmDdspth "of" Month YYYY'
    ) AS Review
FROM "EMPLOYEES";

-- Display the last name, hire date, and day of the week on which the employee started. Label the

-- column DAY. Order the results by the day of the week, starting with Monday 228

SELECT
    last_name,
    hire_date,
    TO_CHAR("HIRE_DATE", 'DAY') AS "day of the week"
FROM "EMPLOYEES"
ORDER BY
    TO_CHAR(HIRE_DATE - 1, 'd');

-- . Create a query that displays the employees’ last names and commission amounts. If an employee

-- does not earn commission, show “No Commission.” Label the column COMM

SELECT
    last_name,
    NVL(
        TO_CHAR(commission_pct),
        'No Commission'
    ) AS COMM
FROM "EMPLOYEES";

-- Using the DECODE function, write a query that displays the grade of all employees based on the

-- value of the column JOB_ID, using the following data:

SELECT
    JOB_ID,
    DECODE(
        JOB_ID,
        'AD_PRES',
        'A',
        'ST_MAN ',
        'B',
        'IT_PROG',
        'C',
        'SA_REP',
        'D',
        'ST_CLERK',
        'E',
        0
    ) GRADE
FROM "EMPLOYEES"
ORDER BY GRADE;