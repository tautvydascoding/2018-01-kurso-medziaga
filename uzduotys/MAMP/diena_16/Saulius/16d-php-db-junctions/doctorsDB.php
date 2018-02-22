<?php
//phpinfo(); //parodo php informacija modulius ir t.t.
define('DB_NAME', 'hospital1');
define('USER', 'root');
define('PASS', 'root');
define('DB_HOST', 'localhost');


$connection = mysqli_connect(DB_HOST, USER, PASS, DB_NAME);

mysqli_set_charset($connection, 'utf8');

function getPrisijungimas() {
global $connection;

    if (!$connection) {
        echo "ERROR" . mysqli_connect_error($connection) . "<br>";
    } else {
        // echo "Jus prisijungete prie db <br>";
    }
    return $connection;
}

function getDoctor($nr) {
    $manoSQL = "SELECT * FROM doctors WHERE id='$nr';";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    if(!$rezultatai) {
        echo "Tokio daktaro nera: nr" . $nr . "<br>";
        return NULL;
    } else {
        $rezultatu_masyvas = mysqli_fetch_assoc($rezultatai);
        return $rezultatu_masyvas;
    }

}

/*
idejimas i DB
$name - kuriamo gydytojo vardas
$pavarde - kuriamo gydytojo pavarde
*/
function createDoctor($vardas, $pavarde) {
    $manoSQL = "INSERT INTO doctors VALUES ('', '$vardas', '$pavarde');"; //atkreipt demesi i kabutes $ kabliataskius ir t.t. pasitestuoti mySQL ar veikia
     mysqli_query(getPrisijungimas(), $manoSQL);
}

//advanced tas pats kas virsui
function createDoctor22($vardas, $pavarde) {
    $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas); // uzkoduoja spec simbolius del saugumo (" ' tarpas \n \t < >)
    $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);
    $manoSQL = "INSERT INTO doctors VALUES ('', '$vardas', '$pavarde');";
    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($arPavyko) {
        //pavyko
    } else { // nepavyko
        echo "ERROR: sukurti gydytojo nepavyko" . mysqli_error(getPrisijungimas()) .  "<br>";
    }
}
// createDoctor22('Veronika', 'Verute');
// createDoctor('Tomas', 'Pieškus');


function deleteDoctor($nr) {
    $manoSQL = "DELETE FROM doctors WHERE id = '$nr';";
    mysqli_query(getPrisijungimas(), $manoSQL);
}
// deleteDoctor(14);

function updateDoctor($nr, $vardas, $pavarde) {
    $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas); // uzkoduoja spec simbolius del saugumo (" ' tarpas \n \t < >)
    $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);
    $manoSQL = "UPDATE doctors SET name = '$vardas', lname = '$pavarde'
    WHERE id = '$nr';";
    mysqli_query(getPrisijungimas(), $manoSQL);
}
// updateDoctor(2, 'Kazys', 'Onutaite');

//visu gydytoju paemimas
function getDoctors() {
    $manoSQL = "SELECT * FROM doctors";
    $visi_gydytojai = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($visi_gydytojai) {
        return $visi_gydytojai;
    } else {
        echo "FAIL BLOG" .mysqli_error(getPrisijungimas());
        return NULL;
    }
}
$all_doctors = getDoctors();
// print_r($all_doctors);
// var_dump($all_doctors);
// mysqli_fetch_assoc paima is MYSQL objekto pirma "eilute" ir ja pavercia i masyva


//!!!! jei nebus sitos eil sekantis kodas (while) neveiks
$gydytojas = mysqli_fetch_assoc($all_doctors); // kiek kart paleidi ta eilute rodo

// var_dump($all_doctors);
// print_r($all_doctors);

while ($gydytojas) {
    echo $gydytojas['lname'] . "<br>";
    echo "vardas " .  $gydytojas['name'] . "<br>";
    $gydytojas = mysqli_fetch_assoc($all_doctors); //imame sekancia eilute (sekantini gydytoja)
}

//!!! vyriskas budas tik kazkas negerai nes ne visus meta
// while ($gydytojas = mysqli_fetch_assoc($all_doctors)) {
//     echo $gydytojas['lname'] . "<br>";
//     echo "vardas " .  $gydytojas['name'] . "<br>";
//     $gydytojas = mysqli_fetch_assoc($all_doctors); //imame sekancia eilute (sekantini gydytoja)
// }


// $gydytojas = getDoctor(7); // masyvas
// if ($gydytojas != NULL) {
//     echo $gydytojas['name'] . " ";
//     echo $gydytojas['lname'] . "<br>";
// }
