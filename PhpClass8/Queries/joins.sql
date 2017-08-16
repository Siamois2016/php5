SELECT * FROM employee e 
left outer join department d
on e.deparmentid = d.departmentid
where d.departmentid is not null;