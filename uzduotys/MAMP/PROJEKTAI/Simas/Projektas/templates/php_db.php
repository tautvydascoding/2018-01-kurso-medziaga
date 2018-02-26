<?php

// phpinfo(); visa informacija apie php

// http://localhost/phpMyAdmin/

define('DB_NAME', 'projektas_1');
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
    }
    return $connect;
}

//====================
//straipsniu isemimas is DB
function getStraipsnis ($nr) {
    $manoSQL = "SELECT * FROM programs WHERE id = '$nr';";
    $straipsnis = mysqli_query(getPrisijungimas(), $manoSQL);//mysqli_query iveykdo uzduota mysql komanda
    if (!$straipsnis) {
        echo "Tokio straipsnio numeriu " . $nr . " nera <br>";
    } else {
        $straipsniu_masyvas = mysqli_fetch_assoc ($straipsnis);
        return $straipsniu_masyvas;
    }
}

function getCoaching ($nr) {
    $manoSQL = "SELECT * FROM coaching WHERE id = '$nr';";
    $coaching_contact = mysqli_query(getPrisijungimas(), $manoSQL);
    $coaching_contact_masyvas = mysqli_fetch_assoc ($coaching_contact);
    return $coaching_contact_masyvas;
}

function getUser ($nr) {
    $manoSQL = "SELECT * FROM user WHERE id = '$nr';";
    $user = mysqli_query(getPrisijungimas(), $manoSQL);
    $useriai = mysqli_fetch_assoc ($user);
    return $useriai;
}

//====================
function createContact ($vardas, $pavarde, $email, $zinute) {
    // $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas); //convertuoja ir uzkoduoja spec.simbolius " ' \n \t < >, kad ju negaletu panaudoti nulauzimams
    $manoSQL = "INSERT INTO contact_me VALUES ('', '$vardas', '$pavarde', '$email', '$zinute');";
    mysqli_query(getPrisijungimas(), $manoSQL);
}

function createCoaching ($vardas, $pavarde, $telefonas, $elpastas) {
    $manoSQL = "INSERT INTO coaching VALUES ('', '$vardas', '$pavarde', '$telefonas', '$elpastas');";
    mysqli_query(getPrisijungimas(), $manoSQL);
}

//==========ajax postinimas i newsletter=====================
// $vardukas = $_POST['pirmasvardas'];
$vardukas = isset($_POST['pirmasvardas']) ? $_POST['pirmasvardas'] : '';
$pastukas = isset($_POST['pastukas']) ? $_POST['pastukas'] : '';
    $manoSQL = "INSERT INTO newsletters VALUES ('', '$vardukas', '$pastukas');";
    mysqli_query(getPrisijungimas(), $manoSQL);
    
//===========================================================


// //====== trinimas
// function deleteDoctor($nr) {
//     $nr = mysqli_real_escape_string(getPrisijungimas(), $nr); //convertuoja ir uzkoduoja spec.simbolius " ' \n \t < >, kad ju negaletu panaudoti nulauzimams
//     $manoSQL = "DELETE FROM doctors WHERE id = '$nr'";
//     $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
// }
// // deleteDoctor(5);


// //=========== redagavimas
// function updateDoctor ($nr, $vardas, $pavarde) {
//     $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas); //convertuoja ir uzkoduoja spec.simbolius " ' \n \t < >, kad ju negaletu panaudoti nulauzimams
//     $pavarde = mysqli_real_escape_string(getPrisijungimas(), $vardas); //convertuoja ir uzkoduoja spec.simbolius " ' \n \t < >, kad ju negaletu panaudoti nulauzimams
//     $manoSQL = "UPDATE doctors SET name='$vardas', lname='$pavarde' WHERE id='$nr'";
//     mysqli_query( getPrisijungimas(), $manoSQL);
// }

// // updateDoctor (5, 'Ona', 'Onutaiteeeee');

// function getDoctors() {
//     $manoSQL = "SELECT * FROM doctors";
//     $visiGydytojai = mysqli_query( getPrisijungimas(), $manoSQL);
//     if ($visiGydytojai) {
//         return $visiGydytojai;
//     } else {
//         echo "ERROR: neradome gydytoju: " . mysql_error(getPrisijungimas()) . "<br>";
//         return NULL;
//     }
// }

// $all_doctors = getDoctors();

// // print_r( $all_doctors);

// // var_dump($all_doctors);

// $gydytojas = mysqli_fetch_assoc($all_doctors); //is SQL objekto paima pirma row ir pavercia ji i masyva

// // var_dump($all_doctors); //skirtas testavimui
// // while($gydytojas) {
// //     echo $gydytojas['lname'] . "<br>";
// //     echo " vardas " . $gydytojas['name'] . "<br>";
// //     $gydytojas = mysqli_fetch_assoc($all_doctors); //imame sekancia eitute(sekanti gydytoja)
// // }

// // while($gydytojas = mysqli_fetch_assoc($all_doctors)) { //tas pats kas virsuje tik trumpesnis
// //     echo $gydytojas['lname'] . "<br>";
// //     echo " vardas " . $gydytojas['name'] . "<br>";
// // }

