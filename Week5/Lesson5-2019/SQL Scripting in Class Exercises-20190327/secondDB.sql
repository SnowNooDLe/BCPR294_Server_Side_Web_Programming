# Query 1 people who has born 31st dec 1900

select fName, lName, dob from organization.Employee
where dob>"1986-05-03";

#Q2 Find any people whos name starts with m and last name ends with e

select fName,lName from organization.employee
where fName like "M%" and lName like "%e";

#Q3 first name and lastname
 
select concat(fName," ",lName)  as "Full Name"
from organization.employee
where fName like "M%" and lName like "%e";

#inner join  with alias
select  fName,lName,deptName
from department d inner join employee  e
on d.deptcode = e.deptcode;

#to see all dept
select  fName,lName,deptName
from department d left join employee  e
on d.deptcode = e.deptcode;

#between
select fName,lName,dob from employee
where dob between "1901-01-01" and "2000-01-01";

select * from Employee
where  empid =1 ;
#update

update employee  set lName ="Ganesh"  where empid =1;

select * from employee;


