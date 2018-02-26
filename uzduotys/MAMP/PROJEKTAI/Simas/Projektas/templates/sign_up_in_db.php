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
    } //else {
    //     echo "Sveikinu, tau pavyko prisijungti <br>";
    // }
    return $connect;
}
// getPrisijungimas(); //butinai reikia iskviesti funkcija

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
$vardas = $_POST['vardas'];
$pavarde = isset($_POST['pavarde']) ? $_POST['pavarde'] : '';
$user = isset($_POST['user']) ? $_POST['user'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$telefonas = isset($_POST['telefonas']) ? $_POST['telefonas'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

    function createtUser($vardas, $pavarde, $user, $password, $telefonas, $email) {
        $manoSQL = "INSERT INTO user VALUES ('', '$vardas', '$pavarde', '$user', '$password', '$telefonas', '$email');";
        mysqli_query(getPrisijungimas(), $manoSQL);
    }
    
    createtUser($vardas, $pavarde, $user, $password, $telefonas, $email);

    
    
//===========================================================
