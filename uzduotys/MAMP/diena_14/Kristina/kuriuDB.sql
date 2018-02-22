-- // ` -  db/tables stulpeliu pavadinimams
-- // '  - tekstui/reikmems/values
-- // "" - tekstui/reikmems/values


show databases; -- padaro visas databases

create database hospital1;

show databases -- pasitikrinimas

use manoDBpavadinimas; -- nurodome darbine duombaze

CREATE TABLE doctors (
	id INT(6) AUTO_INCREMENT PRIMARY KEY, --automatiskai didins id
	name varchar(25), -- PRIMARY KEY - KAD NESIKARTOTU, TIK ANT ID DEDI NES VARDAI KARTOTIS GALI
	lname varchar(25)
	);

show tables;

INSERT INTO doctors VALUES ('', 'Tim', 'Logan');
INSERT INTO doctors VALUES ('', 'Paul', 'Elo');
INSERT INTO doctors VALUES ('', 'Ona', 'Onute');
INSERT INTO doctors VALUES ('', 'Lita', 'Omota');
INSERT INTO doctors VALUES ('', 'Koris', 'Pita');


SELECT * FROM doctors; -- pasitikrinti, parodo

CREATE TABLE patients (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
name varchar(25),
lname varchar(25),
doctor_id INT(6)
);

INSERT INTO patients VALUES ('', 'Mark', 'Jonon', '2');
INSERT INTO patients VALUES ('', 'Tom', 'Taros', '2');
INSERT INTO patients VALUES ('', 'Aris', 'Tido', '1');
INSERT INTO patients VALUES ('', 'Tom', 'Kira', '3');
INSERT INTO patients VALUES ('', 'Co', 'John', '1');
INSERT INTO patients VALUES ('', 'Tom', 'Naro', '5');
INSERT INTO patients VALUES ('', 'Jili', 'Jato', '4');


// uzduotis 1: istrinti gydytoja "Koris"
// uzduotis 2: Pakeisti "Co" varda i "Karolis"
// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
// uzduotis 4: gauti paciento "Mark" daktaro pavarde


//

DELETE FROM doctors WHERE id = 5;

UPDATE patients SET name = 'Karolis' WHERE id=5;

UPDATE img SET name='as.jpg', patients_id='2' WHERE ID=1; --CHANGE NAME

UPDATE patients SET name='Tomas' WHERE name='Tom';

UPDATE patients SET doctor_id='4' WHERE name LIKE 't%';

SELECT img.name FROM patients 
INNER JOIN img ON img.patients_id = patients.id AND patients.id=1;

SELECT doctors.lname FROM doctors 
INNER JOIN patients ON doctors.id = patients.doctor_id AND patients.name='Mark';