
CREATE DATABASE `hospital9`;


show databases;
 -- parodo DB

CREATE DATABASE `hospital10`;
USE hospital10;
-- // nurodome darbine duomenu base (DB)

use hospital10;

 CREATE TABLE doctors (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name varchar(25),
    lname varchar(30)
    );


    show tables;


    INSERT INTO doctors VALUES ('', 'Tim', 'Logan');
    INSERT INTO doctors VALUES ('', 'Paul', 'Elo');
    INSERT INTO doctors VALUES ('', 'Ona', 'Onutaite');

  SELECT * FROM doctors;


  CREATE TABLE patients (
     id INT(6) AUTO_INCREMENT PRIMARY KEY,
     name varchar(25),
     lname varchar(30),
     doctor_id INT(6)
     );

     INSERT INTO patients  VALUES  ('', 'Mark', 'Jonon' , '2' );
  INSERT INTO patients  VALUES  ('', 'Tom', 'Taros' , '2' );
  INSERT INTO patients  VALUES  ('', 'Co', 'Neno' , '0' );

      SELECT * FROM patients;


      UPDATE patients
          SET doctor_id = 1
          WHERE id=3 Limit 1;

     UPDATE doctors
              SET name = 'Paul', lname = 'Paulauskas', id = 5
              WHERE id=5;


              DELETE FROM patients where id = 4;

              DELETE FROM doctors WHERE id=2;


              Create TABLE `img` ( id INT(6) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(55), client_id int(6) );

               UPDATE img SET name = 'logo2.jpg' WHERE id=4;
           	 select * FROM  img;


             INSERT INTO doctors  VALUES  ('', 'Tom', 'Opsa');
             INSERT INTO doctors  VALUES  ('', 'Paul', 'Tor');;
             INSERT INTO doctors  VALUES  ('', 'Jo', 'Oto');
             INSERT INTO doctors  VALUES  ('', 'Lili', 'Lekso');
             INSERT INTO doctors  VALUES  ('', 'Timy', 'So');


             INSERT INTO patients  VALUES  ('', 'Ari', 'Amon' , '2' );
           	INSERT INTO patients  VALUES  ('', 'Tim', 'Taros' , '1' );
           	INSERT INTO patients  VALUES  ('', 'Ana', 'Tomson' , '1' );
           	INSERT INTO patients  VALUES  ('', 'Tom', 'Alis' , '3' );
           	INSERT INTO patients  VALUES  ('', 'Karis', 'Katis' , '2' );
           	INSERT INTO patients  VALUES  ('', 'Jo', 'Oporas' , '2' );


            INSERT INTO img  VALUES  ('', 'pic-46.jpg', '5');
            INSERT INTO img  VALUES  ('', 'pic-46.PNG', '1');
            INSERT INTO img  VALUES  ('', 'pic-456.jpg', '3');
            INSERT INTO img  VALUES  ('', 'pic-4234234.GIF', '2');
            INSERT INTO img  VALUES  ('', 'pic-4622.GIF', '4');


            SELECT img.name FROM img
            INNER JOIN img ON img.patients_id = patients.id AND patients.id=1;

            -- // uzduotis 1: istrinti gydytoja "Koris"
            DELETE FROM doctors WHERE id=8;
            -- // uzduotis 2: Pakeisti "Co" varda i "Karolis"
            UPDATE patients
                     SET name = 'Karolis', lname = 'Oporas', id = 9
                     WHERE id=9;
            -- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
            

            -- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"


            -- // uzduotis 4: gauti paciento "Mark" daktaro pavarde
