<?php

// phpinfo(); visa informacija apie php

// http://localhost/phpMyAdmin/

define('DB_NAME', 'hospital1');
define('USER', 'root');
define('PASSWORD', 'root');
define('DB_HOST', 'localhost');

$connect = mysqli_connect(DB_HOST, USER, PASSWORD, DB_NAME);
mysqli_set_charset($connect, 'utf8');

function getPrisijungimas() {
    global $connect;
// patikrinimas, ar veikia sujungimas
    if ( !$connect ) {
        echo "ERROR prisijungti prie duomenu bazes" . DB_NAME . "nepavyko <br>";
        echo "ERROR prisijungti prie duomenu bazes" . mysqli_connect_error($connect) . "nepavyko <br>";
    }// else {
    //     echo "Sveikinu, tau pavyko prisijungti <br>";
    // }
    return $connect;
}



//getDoctor($nr);
//createDoctor($vardas, $pavarde);
//deleteDoctor($nr);
//editDoctor($nr, $vardas, $pavarde);
//getDoctors();

//====================
//getDoctor($nr);
function getDoctor($nr) {
    // global $connect;
    $manoSQL = "SELECT * FROM doctors WHERE id = '$nr';";
    //mysqli_query - grazina duomenis mySQL objektu;
    $rezultatai = mysqli_query( getPrisijungimas() , $manoSQL ); //mysqli_query iveykdo uzduota mysql komanda
    if ( !$rezultatai ) {
        echo "Tokio daktaro nera: nr" . $nr . "<br>";
        return NULL;
    } else {
        //mySQL objekta verciame i masyva
        $rezultatu_masyvas = mysqli_fetch_assoc( $rezultatai ); 
        //mysqli_fetch_assoc - pavercia i asociavitu masyva
        //mysqli_fetch_array - pavercia i asociavitu masyva IR paprasta masyva
        //mysqli_fetch_row - pavercia i paprasta masyva
        return $rezultatu_masyvas;
    }
}

// $gydytojas = getDoctor(6); //masyvas

// if ($gydytojas != 0) {
//     echo $gydytojas['name'] . " ";
//     echo $gydytojas['lname'] . " ";
//     echo $gydytojas['id'] . "<br>";
// }

//====================

/*
    idejimas i duomenu baze
    $name - kuriamo gydytojo vardas
    $pavarde - kuriomo gydytojo pavarde

*/

function createDoctor($vardas, $pavarde) { //lengvas, bet daug saugomu spragu

    $manoSQL= "INSERT INTO doctors VALUES ('', '$vardas', '$pavarde')"; //visa sita reikia ideti i dvigubas kabotes
    mysqli_query( getPrisijungimas(), $manoSQL);
}

// createDoctor('Tomą', 'Pietkauską');
// createDoctor('Marius', 'Majauskas');
// createDoctor('Pijus', 'Pietkus');

function createDoctor2($vardas, $pavarde) {
    $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas); //convertuoja ir uzkoduoja spec.simbolius " ' \n \t < >, kad ju negaletu panaudoti nulauzimams
    $pavarde = mysqli_real_escape_string(getPrisijungimas(), $vardas); //convertuoja ir uzkoduoja spec.simbolius " ' \n \t < >, kad ju negaletu panaudoti nulauzimams

    $manoSQL= "INSERT INTO doctors VALUES ('', '$vardas', '$pavarde')"; //visa sita reikia ideti i dvigubas kabotes
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);//mysqli_query iveykdo uzduota mysql komanda

    if ($arPavyko) { //patikrinimas ar pavyko ivesti
        //pavyko
    }else { //nepavyko
        echo "ERROR: sukurti gydytojo nepavyko" . mysql_error(getPrisijungimas()) . "<br>";
    }
}

// createDoctor2('Veronika<>', 'Veronaite');


//====== trinimas
function deleteDoctor($nr) {
    $nr = mysqli_real_escape_string(getPrisijungimas(), $nr); //convertuoja ir uzkoduoja spec.simbolius " ' \n \t < >, kad ju negaletu panaudoti nulauzimams
    $manoSQL = "DELETE FROM doctors WHERE id = '$nr'";
    $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
}
// deleteDoctor(5);


//=========== redagavimas
function updateDoctor ($nr, $vardas, $pavarde) {
    $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas); //convertuoja ir uzkoduoja spec.simbolius " ' \n \t < >, kad ju negaletu panaudoti nulauzimams
    $pavarde = mysqli_real_escape_string(getPrisijungimas(), $vardas); //convertuoja ir uzkoduoja spec.simbolius " ' \n \t < >, kad ju negaletu panaudoti nulauzimams
    $manoSQL = "UPDATE doctors SET name='$vardas', lname='$pavarde' WHERE id='$nr'";
    mysqli_query( getPrisijungimas(), $manoSQL);
}

// updateDoctor (5, 'Ona', 'Onutaiteeeee');

function getDoctors() {
    $manoSQL = "SELECT * FROM doctors";
    $visiGydytojai = mysqli_query( getPrisijungimas(), $manoSQL);
    if ($visiGydytojai) {
        return $visiGydytojai;
    } else {
        echo "ERROR: neradome gydytoju: " . mysql_error(getPrisijungimas()) . "<br>";
        return NULL;
    }
}

$all_doctors = getDoctors();

// print_r( $all_doctors);

// var_dump($all_doctors);

$gydytojas = mysqli_fetch_assoc($all_doctors); //is SQL objekto paima pirma row ir pavercia ji i masyva

// var_dump($all_doctors); //skirtas testavimui
// while($gydytojas) {
//     echo $gydytojas['lname'] . "<br>";
//     echo " vardas " . $gydytojas['name'] . "<br>";
//     $gydytojas = mysqli_fetch_assoc($all_doctors); //imame sekancia eitute(sekanti gydytoja)
// }

// while($gydytojas = mysqli_fetch_assoc($all_doctors)) { //tas pats kas virsuje tik trumpesnis
//     echo $gydytojas['lname'] . "<br>";
//     echo " vardas " . $gydytojas['name'] . "<br>";
// }

