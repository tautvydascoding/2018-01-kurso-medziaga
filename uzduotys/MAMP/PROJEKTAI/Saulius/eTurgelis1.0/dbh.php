<?php
// Connect DB
define('DB_NAME', 'login');
define('USER', 'root');
define('PASS', 'root');
define('DB_HOST', 'localhost');

$conn = mysqli_connect(DB_HOST, USER, PASS, DB_NAME);
mysqli_set_charset($conn, 'utf8');

function getPrisijungimas() {
    global $conn;
if (!$conn) {
    die ("MEGA FAIL:" . mysqli_connect_error($conn));
}
return $conn;
}

// GET prekes
function getPreke($nr) {
    $manoSQL = "SELECT * FROM prekes WHERE id='$nr';";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    if(!$rezultatai) {
        echo "Tokios prekes nera: nr" . $nr . "<br>";
        return NULL;
    } else {
        $rezultatu_masyvas = mysqli_fetch_assoc($rezultatai);
        return $rezultatu_masyvas;
    }
}


//CREATE prekes

//Table prekes vars


// function createPreke($foto, $pavadinimas, $aprasymas, $ikeleID) {
//     $foto = mysqli_real_escape_string(getPrisijungimas(), $foto);
//     $pavadinimas = mysqli_real_escape_string(getPrisijungimas(), $pavadinimas);
//     $aprasymas = mysqli_real_escape_string(getPrisijungimas(), $aprasymas);
//     $ikeleID = mysqli_real_escape_string(getPrisijungimas(), $ikeleID);
//     $manoSQL = "INSERT INTO prekes VALUES ('', '$foto', '$pavadinimas', '$aprasymas', '$ikeleID');";
//     $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
//     if ($arPavyko) {
//         //pavyko
//     } else { // nepavyko
//         echo "ERROR: sukurti prekes nepavyko" . mysqli_error(getPrisijungimas()) .  "<br>";
//     }
// }
// createPreke('5.png', 'createTest', 'lorem lorem lorem', '6'); // TEST


//CREATE email

// $vard
// $klaus
// $elpast

function createEmail($vard, $klaus, $elpast) {
    $vard = mysqli_real_escape_string(getPrisijungimas(), $vard);
    $klaus = mysqli_real_escape_string(getPrisijungimas(), $klaus);
    $elpast = mysqli_real_escape_string(getPrisijungimas(), $elpast);
    $manoSQL = "INSERT INTO email VALUES ('', '$vard', '$klaus', '$elpast');";
    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($arPavyko) {
        //pavyko
    } else { // nepavyko
        echo "ERROR: sukurti laisko nepavyko" . mysqli_error(getPrisijungimas()) .  "<br>";
    }
}
// createEmail('aa', 'aaa', 'lorem@lorem'); // TEST
