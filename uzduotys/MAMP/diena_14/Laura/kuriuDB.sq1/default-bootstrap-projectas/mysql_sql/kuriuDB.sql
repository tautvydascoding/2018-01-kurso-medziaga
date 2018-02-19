
show databases;    --// parodo visas DB

--//
use manoDBpavadinimas;

---
CREATE DATABASE hospital1;
show databases;                      ---//pasitikrinimas
use hospital1;
create table doctors;


--/ lentele nauja
CREATE TABLE doctors (
   id INT(6) AUTO_INCREMENT PRIMARY KEY,
   name varchar(25),
   lname varchar(30)
   );

show tables;

    INSERT INTO doctors VALUES ('', 'Tim', 'Logan');   --// SELECT * FROM doctors --- pasitikrinti
    INSERT INTO doctors VALUES ('', 'Paul', 'Elo');
    INSERT INTO doctors VALUES ('', 'Ona', 'Onutaite');
    INSERT INTO doctors VALUES('', 'Lita', 'Omota');
    INSERT INTO doctors VALUES('', 'Koris', 'Pita');


CREATE TABLE patients (
       id INT(2) AUTO_INCREMENT PRIMARY KEY,
       name varchar(25),
       lname varchar(30),
       doctor_id INT(6)
   );

   INSERT INTO patients VALUES ('', 'Mark', 'John', '2');          -
   INSERT INTO patients VALUES ('', 'Tom', 'Karlas', '2');
   INSERT INTO patiens VALUES ('', 'Aris', 'Tido', '1');
   INSERT INTO patients VALUES('', 'Tom', 'Kipa', '3');
   INSERT INTO patients VALUES('', 'Co', 'John', '1');
   INSERT INTO patients VALUES('', 'Tom', 'Nano', '5');
   INSERT INTO patients VALUES('', 'Juli', 'Jato', '4');



CREATE TABLE img (
          id INT(2) AUTO_INCREMENT PRIMARY KEY,
          name varchar(25),
          patients_id INT(2)
      );

      INSERT INTO img VALUES ('', 'foto.jpg', '3');
      INSERT INTO img VALUES ('', '3.png', '1');
      INSERT INTO img VALUES ('', 'Z1.gift', '1');
      INSERT INTO img VALUES('', '5.pmg', '2');


SELECT * FROM doctors WHERE name = 'Lita';        --//gauti visa Info pazymeta Lita;

SELECT * FROM patients WHERE name = 'Tom';
SELECT * FROM patients WHERE name = 'Tom' and lname='Kira';     --//suranda konkretu asmeni;


UPDATE img SET name = '5.jpg', patients_id='7' WHERE id=1;


SELECT img.name FROM patients
INNER JOIN img ON img.patients_id = patients.id AND patients.id=1;


--// uzduotis 1: istrinti gydytoja "Koris"
DELETE FROM doctors where id = 5;

--// uzduotis 2: Pakeisti "Co" varda i "Karolis"

UPDATE patients SET name = 'Karolis' WHERE id = '5';

--// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
SELECT * FROM patients WHERE name = 'Tom';

--// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4". LIKE
--// uzduotis 4: gauti paciento "Mark" daktaro pavarde
