 /* ANSWER */
 /* 1 */  /* ANSWER */
 /* 1 */ SELECT * from employees join salary on employees.salary_id=salary.id where salary.salary in (SELECT max(salary) from salary);
 /* 2 */ SELECT * from employees WHERE YEAR(date_hired) BETWEEN 2017 and 2018;
 /* 3 */ SELECT * from employees join departments on employees.department_id = departments.id WHERE departments.department='IT' AND YEAR(employees.date_hired) >=2018;