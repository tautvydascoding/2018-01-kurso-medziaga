CREATE DATABASE -- sukuria DB
SHOW DATABASES; -- parodo visas db
USE manoDBpavadinimas; -- naudoti nurodyta DB
--======DB SUKURTA IR PASIRINKTA=========

CREATE TABLE doctors (
id INT(2) AUTO_INCREMENT PRIMARY KEY,
name varchar(25),
lname varchar(25)
);
SHOW TABLES;
-- INT skaicius 2 nurodo kiek skaiciu gali testis sarasas. siuo atveju iki 99(nes 2 skaiciai)
--======SUKURTA LENTELE IR PATIKRINTA===========

INSERT INTO doctors VALUES ('', 'Tim', 'Logan');
INSERT INTO doctors VALUES ('', 'Paul', 'Leo');
INSERT INTO doctors VALUES ('', 'Ona', 'Onute');
INSERT INTO doctors VALUES ('', 'Lita', 'Omota');
INSERT INTO doctors VALUES ('', 'Koris', 'Pita');
SELECT * FROM doctors;
--========SUKURTOS DAKTARU REIKSMES IR PASITIKRINTA==========

CREATE TABLE patients (
    id INT(2) AUTO_INCREMENT PRIMARY KEY,
    name varchar(25),
    lname varchar(25),
    doctor_id INT(2)
);
SHOW TABLES;
--========PACIENTU LENTELE==================

CREATE TABLE img (
    id INT(2) AUTO_INCREMENT PRIMARY KEY,
    name varchar(25),
    patients_id INT(2)
);
SHOW TABLES;
--========IMG LENTELE==============

INSERT INTO patients VALUES ('', 'Mark', 'John', '2');
INSERT INTO patients VALUES ('', 'Tom', 'Carlos', '2');
INSERT INTO patients VALUES ('', 'Aris', 'Tido', '1');
INSERT INTO patients VALUES ('', 'Tom', 'Kira', '3');
INSERT INTO patients VALUES ('', 'Co', 'John', '1');
INSERT INTO patients VALUES ('', 'Tom', 'Naro', '5');
INSERT INTO patients VALUES ('', 'Jili', 'Jato', '4');
--======================== PACIENTU INFO===============

UPDATE patients
SET doctor_id = 1
WHERE id=3 Limit 1;
--=============BBZ SUSIPISO SU SITU VISKAS===================

INSERT INTO img VALUES ('', 'foto.jpg', '3');
INSERT INTO img VALUES ('', '3.png', '1');
INSERT INTO img VALUES ('', 'Z1.gif', '1');
INSERT INTO img VALUES ('', '5.png', '2');
--======================== IMG INFO===============

SELECT img.name FROM patients
INNER JOIN img ON img.patients_id = patients.id AND patients.id=1;
--===KAD GAUT NUOTRAUKU VARDUS PAGAL PACIENTO ID STULPELI IMG LENTELEJ SUSIEJANT SU PACIENTU LENTELES ID STULPELIU




-- uzduotis 1: istrinti gydytoja "Koris"
-- uzduotis 2: Pakeisti "Co" varda i "Karolis"
// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
// uzduotis 4: gauti paciento "Mark" daktaro pavarde
