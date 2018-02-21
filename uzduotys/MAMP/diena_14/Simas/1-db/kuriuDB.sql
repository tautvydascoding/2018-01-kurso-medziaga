show databases;

-- !!
use manoDBpavadinimas;

CREATE DATABASE hospital1;
use hospital1;

CREATE TABLE doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25),
    lname VARCHAR(30)
);

INSERT INTO doctors VALUES ('', 'Tim', 'Logan');
INSERT INTO doctors VALUES ('', 'Paul', 'Leo');
INSERT INTO doctors VALUES ('', 'Ona', 'Onute');
INSERT INTO doctors VALUES ('', 'Lita', 'Omata');
INSERT INTO doctors VALUES ('', 'Koris', 'Pita');


CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25),
    lname VARCHAR(30),
    doctor_id INT
);
INSERT INTO patients VALUES ('', 'Mark', 'John', 2);
INSERT INTO patients VALUES ('', 'Tom', 'Karlos', 2);
INSERT INTO patients VALUES ('', 'Aris', 'Tido', 1);
INSERT INTO patients VALUES ('', 'Tom', 'Kira', 3);
INSERT INTO patients VALUES ('', 'Co', 'John', 1);
INSERT INTO patients VALUES ('', 'Tom', 'Noro', 5);
INSERT INTO patients VALUES ('', 'Jili', 'Jato', 4);

CREATE TABLE img (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    patients_id INT
);
INSERT INTO img VALUES ('', 'foto.jpg', 3);
INSERT INTO img VALUES ('', '3.png', 1);
INSERT INTO img VALUES ('', '1.gif', 1);
INSERT INTO img VALUES ('', '5.png', 2);

DELETE FROM doctors 
WHERE name="Koris"; //

UPDATE patients
SET name="Karolis"
WHERE name="Co";

UPDATE patients
SET name="Tomas"
WHERE name="Tom";

UPDATE patients
set doctor_id=4
WHERE name LIKE 'T%';


SELECT doctors.lname
FROM doctors
INNER JOIN patients ON doctors.id = patients.doctor_id
WHERE patients.name = "Mark";

SELECT img.name, patients.name
FROM patients
INNER JOIN img ON img.patients_id = patients.id and patients.id = 1;