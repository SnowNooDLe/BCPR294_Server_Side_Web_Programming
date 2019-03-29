create database organization;
use organization;
#DDL data declaration language
create table Department(
deptcode char(4) primary key,
deptName varchar(20)
);

#DML
insert into Department values("COMP","dept of computing");
insert into Department values("BUS","dept of BUINESS");
insert into Department values("ENG","dept of ENgineering");

#test
select * from  Department;

#update
select deptcode as "Dept. Code", deptName  as "Dept. Name" from  Department;

create table Employee(
empid integer auto_increment,
fName varchar(20),
lName varchar(20),
dob Date,
gender enum('M','F','O'),
salary Decimal(7,2),
deptcode char(4),
primary key(empid),
foreign key (deptcode) references Department(deptcode)
);

insert into Employee values(null, "mike","lance","1986-05-03","M",2000.00,"COMP");
insert into Employee values(null, "suja","bharathi","1986-05-03","M",2000.00,"ENG");
insert into Employee values(null, "sujatha","bharathi","1991-05-03","M",2000.00,"ENG");

select * from Employee;
