show database;



use manoDBpavadinimas;
CREATE TABLE patients (
   id INT(6) AUTO_INCREMENT PRIMARY KEY,
   name varchar(25),
   lname varchar(25)
   );
   CREATE TABLE doctors (
      id INT(6) AUTO_INCREMENT PRIMARY KEY,
      name varchar(25),
      lname varchar(25)
      );
      CREATE TABLE patients (
         id INT(6) AUTO_INCREMENT PRIMARY KEY,
         name varchar(25),
         lname varchar(25),
         doctor_id INT(6)
         );

Create TABLE `img` ( id INT(6) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50), patients_id int(6));
UPDATE img
    SET patients_id = 1
    WHERE id=0 Limit 1;
    UPDATE img SET patients_id = '1' WHERE name='3.png';
SELECT * FROM patients WHERE name LIKE 'T%';
SELECT Name FROM patient WHERE Name REGEXP '^[B].*$'

SELECT doctors.lname
FROM doctors
INNER JOIN patients ON doctors.id = patients.doctor_id WHERE doctor_id = 2;


SELECT img.name
FROM img
INNER JOIN patients ON patients.id = img.patients_id WHERE patients_id = 1;
