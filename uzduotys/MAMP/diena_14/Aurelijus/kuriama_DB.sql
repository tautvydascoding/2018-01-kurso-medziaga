-- neveikia
update patients set name='Mark','Tom','Karlos','Tom','Paul','Tom','Jili','Tom','Donaldas' where id=1,2,3,4,5,6,7,8,9;


--Veikia
update patients set name='Mark' where id=1;
update patients set name='Tom' where id=2;
update patients set name='Karlos' where id=3;
update patients set name='Tom' where id=4;
update patients set name='Paul' where id=5;
update patients set name='Tom' where id=6;
update patients set name='Jili' where id=7;
update patients set name='Tom' where id=8;
update patients set name='Donaldas' where id=9;
--Veikia
    update patients set lname='John' where id=1;
    update patients set lname='Karlos' where id=2;
    update patients set lname='Tido' where id=3;
    update patients set lname='Kira' where id=4;
    update patients set lname='Paulauskas' where id=5;
    update patients set lname='Naro' where id=6;
    update patients set lname='JAto' where id=7;
    update patients set lname='Kirilenka' where id=8;
    update patients set lname='Trumpas' where id=9;

-- neveikia
                update patients set name='Mark' lname='John' where id=1,
                                set name='Tom' lname='Karlos' where id=2,
                                set name='Karlos' lname='Tido' where id=3,
                                set name='Tom' lname='Kira' where id=4,
                                set name='Paul' lname='Paulauskas' where id=5,
                                set name='Tom' lname='Naro' where id=6,
                                set name='Jili' lname='Jato' where id=7,
                                set name='Tom' lname='Kirilenka' where id=8,
                                set name='Donaldas' lname='Trumpas' where id=9;


--veikia
select img.name from img
inner join patients on img.patients_id = patients.id and patients.id=1;
