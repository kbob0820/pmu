select * from employee e;

select id, last_name, first_name from employee e; 

select * from employee e where 

insert  into employee (email, department_id, last_name, first_name, birthday, date_hired)
values ('mena1@yahoo.com', 3, 'Lebron','James','2006-01-01','2026-05-02')

select e.id,email, last_name, first_name,  Description from employee e 
	inner join department d 
	on e.department_id = d.id
	where code = 'it'