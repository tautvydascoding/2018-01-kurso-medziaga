

// uzduotis 1: istrinti gydytoja "Koris"
// uzduotis 2: Pakeisti "Co" varda i "Karolis"
// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
UPDATE patients SET name='Tomas' WHERE name='Tom';
// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
UPDATE patients SET doctor_id=4 WHERE name LIKE 'T%';
// uzduotis 4: gauti paciento "Mark" daktaro pavarde

SELECT doctors.lname FROM doctors, patients WHERE 



//
