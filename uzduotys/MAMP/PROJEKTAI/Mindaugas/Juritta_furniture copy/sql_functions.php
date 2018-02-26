<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');



define('DB_NAME', 'Juritta');
define('USER', 'root');
define('PASSWORD', 'root');
define('DB_HOST', 'localhost');


$prisijungimas = mysqli_connect(DB_HOST, USER, PASSWORD, DB_NAME);

function getConnected() {
    global $prisijungimas;

    if (!$prisijungimas) {
        echo "ERROR: prisijungti prie " . DB_NAME . "duomenų bazės nepavyko. <br>";
        echo "ERROR: " . mysqli_connect_error() . "<br>";
    }
    return $prisijungimas;
}
// -------duomenu paemimas is lenteles--START
function getMItem($id) {
    $mySQL = "SELECT * FROM menu WHERE id='$id';";
    $result = mysqli_query(getConnected(), $mySQL);
    if (!$result) {
        echo "neteisingai suformuota uzklausa";
    } else {
        $results = mysqli_fetch_assoc($result);
        return $results;
    }
}



function getEmItem($id) {
    $mySQL = "SELECT * FROM email_registration WHERE id='$id';";
    $result = mysqli_query(getConnected(), $mySQL);
    if (!$result) {
        echo "neteisingai suformuota uzklausa";
    } else {
        $results = mysqli_fetch_assoc($result);
        return $results;
    }
}

function getPItem($id) {
    $mySQL = "SELECT * FROM produktai_office WHERE id='$id';";
    $result = mysqli_query(getConnected(), $mySQL);
    if (!$result) {
        echo "neteisingai suformuota uzklausa";
    } else {
        $results = mysqli_fetch_assoc($result);
        return $results;
    }
}
// echo "tekstas <br>";
// print_r(getPItem(15));
// ----Duomenu paemimas is lenteles---END---


// -----Duomenu idejimas i lentele----START

function createMItem($menuItem) {
    $menuItem = mysqli_real_escape_string(getConnected(), $menuItem);

    $mySQL = "INSERT INTO menu VALUES ('', '$menuItem', CURDATE(), '0000');";
    $result = mysqli_query(getConnected(), $mySQL);
    if($result) {
            // pavyko
    } else { // nepavyko
        echo "ERROR: sukurti iraso nepavyko " . mysqli_error(getConnected()) . " <br>";
    }
}



function createEmItem($siuntejas, $email, $uzklausa) {
    $siuntejas = mysqli_real_escape_string(getConnected(), $siuntejas);
    $email = mysqli_real_escape_string(getConnected(), $email);
    $uzklausa = mysqli_real_escape_string(getConnected(), $uzklausa);


    $mySQL = "INSERT INTO email_registration VALUES ('', '$siuntejas', '$email', '$uzklausa', CURDATE(), CURTIME());";
    $result = mysqli_query(getConnected(), $mySQL);
    if($result) {
            // pavyko
    } else { // nepavyko
        echo "ERROR: sukurti iraso nepavyko" . mysqli_error(getConnected()) . " <br>";
    }
}



function createPItem($pavadinimas, $img_path, $description, $type_for_order) {
    $pavadinimas = mysqli_real_escape_string(getConnected(), $pavadinimas);
    $img_path = mysqli_real_escape_string(getConnected(), $img_path);
    $description = mysqli_real_escape_string(getConnected(), $description);


    $mySQL = "INSERT INTO produktai_office VALUES ('', '$pavadinimas', '$img_path', '$description', '$type_for_order', CURDATE(), CURTIME(), '0000', '0000');";
    $result = mysqli_query(getConnected(), $mySQL);
    if($result) {
            // pavyko
    } else { // nepavyko
        echo "ERROR: sukurti iraso nepavyko " . mysqli_error(getConnected()) . " <br>";
    }
}

// createPItem('kede1', 'kede2.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '1');
// createPItem('kede2', 'kede3.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '1');
// createPItem('kede3', 'kede4.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '1');
// createPItem('kede4', 'kede5.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '1');
// createPItem('sofa1', 'sofa1.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '2');
// createPItem('sofa2', 'sofa2.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '2');
// createPItem('stalas1', 'stalas1.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '3');
// createPItem('stalas2', 'stalas2.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '3');
// createPItem('stalas3', 'stalas3.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '3');





function deleteMItem( $id ) {
    $mySQL = " DELETE FROM menu WHERE id='$id'; ";
    mysqli_query( getConnected(), $mySQL);
}

function deleteEmItem( $id ) {
    $mySQL = " DELETE FROM email_registration WHERE id='$id'; ";
    mysqli_query( getConnected(), $mySQL);
}

function deletePItem( $id ) {
    $mySQL = " DELETE FROM produktai_office WHERE id='$id'; ";
    mysqli_query( getConnected(), $mySQL);
}

function updateMItem($id, $menuItem) {
    $menuItem = mysqli_real_escape_string(getConnected(), $menuItem);

    $mySQL = "UPDATE menu SET   menu_item='$menuItem', up_date=CURDATE()
                               WHERE id='$id'; ";
    mysqli_query( getConnected(),  $mySQL );
}



function updatePItem($id, $pavadinimas, $img_path, $description, $type_for_order) {
    $pavadinimas = mysqli_real_escape_string(getConnected(), $pavadinimas);
    $img_path = mysqli_real_escape_string(getConnected(), $img_path);
    $description = mysqli_real_escape_string(getConnected(), $description);

    $mySQL = "UPDATE produktai_office SET   name='$pavadinimas', img_path='$img_path', description='$description', type_order='$type_for_order', up_date=CURDATE(), up_time=CURTIME()
                               WHERE id='$id'; ";
    mysqli_query( getConnected(),  $mySQL );
}

// updatePItem('3', 'kedute', 'kedute.jpg', 'skirta mazo ugio individams', '2');
//
// function getAllPItems() {         //gaunamas objektas, kuri reikia paversti i masyva fetch....
//     $mySQL = "SELECT * FROM produktai_office; ";
//     $results =  mysqli_query( getConnected() , $mySQL);
//
//     if($results ){
//         return $results;
//     } else {
//         echo "ERRROR: produktu nera: " . mysqli_error( getConnected() );
//         return NULL;
//     }
// }

// for ($i=1; $i<7; $i++) {
// $produktas = getPItem($i);
// if ($produktas != NULL) {
//    echo $produktas['img_path'];
// }
// }
