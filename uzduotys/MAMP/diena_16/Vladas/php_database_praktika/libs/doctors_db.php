<?php



// phpinfo();               visa info apie php

define( 'DB_NAME', 'hospital1');
define( 'USER', 'root');
define( 'PASSWORD', 'root');
define( 'BD_HOST', 'localhost');

$connection = mysqli_connect( BD_HOST, USER, PASSWORD, DB_NAME);

mysqli_set_charset($connection, 'utf8');

function getPrisijungimas() {
    global $connection;
if( !$connection ) {
    echo "Prisijungti nepavyko" . DB_NAME . "nepavyko <br>";
    echo "nepavyko" .mysqli_connect_Error($connection). "nepavyko <br>";
}else{
    // echo "Jus prisijungete <br>";
}
    return $connection;
}
// getDoctor($nr)
// createDoctor($vardas, $pavarde)
// deleteDoctor($nr)
// editDoctor($nr, $vardas, $pavarde)
//getDoctors($kiekis = 9999)

// function getPrisijungimas() {
// }

function getDoctor($nr) {
    // global $connection;
    // echo "labas";
    $manoSQL = "SELECT * FROM doctors WHERE id='$nr';";
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL );
    if(!$rezultatai) {
        echo "Ieskome gydytojo nera. nr: " .$nr . "<br>";
        return NULL;
    }else{
        $rezultatu_masyvas = mysqli_fetch_assoc ($rezultatai);
        return $rezultatu_masyvas;
    }
}
// $gydytojas = getDoctor(2);
// if($gydytojas !=NULL) {
//     echo $gydytojas['name'] . "<br>";
// }

/*
    idejimas iduomenu baze
    $vardas - .....
    $pavarde - ...........


*/
function createDoctor($vardas, $pavarde) {
    $manoSQL = "INSERT INTO doctors VALUES ('', '$vardas', '$pavarde'); ";
    mysqli_query(  getPrisijungimas(), $manoSQL);

}
// createDoctor('Tomas', 'Pieštkauskas');
// createDoctor('Marius', 'Mariauskas');
// createDoctor('paulina', 'Paula');

function createDoctor222($vardas, $pavarde) {
    // SAUGUMAS!!! uzkoduoja spec. simbolius
    $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas);
    $pavarde = mysqli_real_escape_string(getPrisijungimas(), $pavarde);


    $manoSQL = "INSERT INTO doctors VALUES ('', '$vardas', '$pavarde'); ";
    $arPavyko = mysqli_query(  getPrisijungimas(), $manoSQL);
    if($arPavyko) {

    }else{
        echo "ERROR: sukurti nepavyko" . mysqli_error(getPrisijungimas) . " <br>";
    }
}
// createDoctor222("Veronika", "Vierka");


        // istrinti

function deleteDoctor($nr) {
    $manoSQL = "DELETE FROM doctors WHERE id='$nr'; ";
    mysqli_query( getPrisijungimas(), $manoSQL);
}
deleteDoctor(5);

            //update database database

function updateDoctor($nr, $vardas, $pavarde) {
    $manoSQL = "UPDATE doctors SET name='$vardas', lname='$pavarde' WHERE id='$nr'; ";
    mysqli_query( getPrisijungimas(), $manoSQL);


}
// updateDoctor(3, "Onute", 'Onute');



        //visu gydytoju paemimas

function getAllDoctors() {
    $manoSQL = "SELECT * FROM doctors; ";
    $visi_gydytojai = mysqli_query(  getPrisijungimas(), $manoSQL);

    if($visi_gydytojai) {
        return $visi_gydytojai;
    }else{
        echo "ERROR: nieko neradom" . mysqli_errno( getPrisijungimas() );
        return NULL;
    }

}
$all_doctors = getAllDoctors();
// print_r($all_doctors);
// var_dump($all_doctors);

            //mysqli_fetch_assoc ima sekancia eilute kol baigiasi
$gydytojas = mysqli_fetch_assoc($all_doctors);
// $gydytojas = mysqli_fetch_assoc($all_doctors);
// $gydytojas = mysqli_fetch_assoc($all_doctors);
// print_r($gydytojas);           //test

// while ($gydytojas) {
// echo "pavarde" .  $gydytojas['lname'] . '<br>'. "vardas" . $gydytojas['name'] . '<br>';
//
// $gydytojas = mysqli_fetch_assoc($all_doctors);
// }
