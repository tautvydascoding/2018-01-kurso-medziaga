use manoDBpavadinimas;

create database hospital1;

    create table doctors (
        id INT(6) auto_increment primary key,
        name varchar(25),
        lname varchar(25)
    );

    insert into doctors values ('', 'Tim', 'Logan');


select img.name from patients inner join img on img.doctor_id=patients.id and patients.id=1;
