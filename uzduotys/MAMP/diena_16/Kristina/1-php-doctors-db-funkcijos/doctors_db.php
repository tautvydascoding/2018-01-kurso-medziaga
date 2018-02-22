<?php

// phpinfo() - visa info apie php, eiti per web localhost

// localhost/phpMyAdmin

define('DB_NAME', 'hospital1');
define('USER', 'root'); // susikuri user sql grant all privileges, tada super useris adminas bus, tada istrinti root, kad nebutu spragu
define('PASSWORD', 'root');
define('DB_HOST', 'localhost');

// $connection = mysqli_connect(DB_HOST, USER, PASSWORD, DB_NAME); //mysqli - i - saugiau nei mysql ; dar port (8888) galima pridet jeigu pakeistas MAMP

// if (!$connection) { // !- jeigu connection = false
// 	echo "ERROR prisijungti prie DB" . DB_NAME . "nepavyko <br>";
// 	echo "ERROR " . mysql_connect_error($connection) . "nepavyko <br>";
// } else {
// 	echo "Jūs prisijungėt prie DB <br>";
// }

//getDoctor($nr)
//createDoctor($vardas, $pavarde) 
//deleteDoctor($nr)
//editDoctor($nr, $vardas, $pavarde)
//editDoctors($kiekis = 9999) //grazina visa lentele, objektas bet reiks dar paverst i masyva

//---------------------------

$connection = mysqli_connect(DB_HOST, USER, PASSWORD, DB_NAME); //mysqli - i - saugiau nei mysql ; dar port (8888) galima pridet jeigu pakeistas MAMP

function getConnection() { // automatiskai prilogins prie DB
	global $connection;  // php ne js sitas kintamas turi but itrauktas i f-ja
if (!$connection) { // !- jeigu connection = false
	echo "ERROR prisijungti prie DB" . DB_NAME . "nepavyko <br>";
	echo "ERROR " . mysql_connect_error($connection) . "nepavyko <br>";
} //else {
	//echo "Jūs prisijungėt prie DB <br>";
//}
return $connection; // tai sugris kaskart issaukus f-ja
}

//---------------------------

function getDoctor($nr) {
	// global $connection; // php ne js sitas kintamas turi but itrauktas i f-ja
	$manoSQL = "SELECT * FROM doctors WHERE id='$nr';"; 
	// mysqli_query - grazina duomenis MYSQL objekte
	$rezultatai = mysqli_query(getConnection(), $manoSQL); // $link - irodymai kad prisijungimus turi; $query - darbas kuri vykdyt, $rezultatai kad nedingtu: is viso kartu vykdo uzduota SQL teksta;
	if (!$rezultatai) {
		echo "ieskomo gydytojo nėra: nr " . $nr . "<br>";
		return NULL;
	} else {
		// mysql objekta verciam i masyva
		$rezultatu_masyvas = mysqli_fetch_assoc($rezultatai); //tik kai parsisiunti/issivedi duomenis
		// asociatyvus masyvas
		//fecth.array - asociatyvus ir paprastas masyvas
		//fetch_row - pavercia i paprasta masyba
		return $rezultatu_masyvas;
	}
	// return $rezultatu_masyvas;
}
// $gydytojas = getDoctor(1); // masyvas // pagal numeriuka kad grazintu tik viena konkretu gydytoja talpina i susigalvota kintamaji gydytojas$
// if ($gydytojas = $rezultatu_masyvas) {
// 	echo $gydytojas['name'] . "<br>";
// }

// if ($gydytojas != NULL) {
// 	echo $gydytojas['name'] . " ";	
// 	echo $gydytojas['lname'] . " ";	
// 	echo $gydytojas['id'] . " ";
// }

//geriau uzsikomentuot sita virsuj nes tai testinimas kad nesuktu visada

/*

idejimas i duomenu baze
$vardas - kuriamo daktaro vardas
*/

function createDoctor($vardas, $pavarde) { // naujo gydytojo sukurimas
	$manoSQL = " INSERT INTO doctors VALUES ('', '$vardas', '$pavarde'); "; // i msql paste'inti be $
	mysqli_query(getConnection(), $manoSQL);


}
// createDoctor('tomas', 'pietkus');
// createDoctor('marius', 'mariukas');
// createDoctor('paulina', 'ovi');

// del saugumo, kad neprikodintu i laukus 
function createDoctor2($vardas, $pavarde) { // naujo gydytojo sukurimas
	$vardas = mysqli_real_escape_string(getConnection(), $vardas); // uzkoduoja spec simbolius " ' /n /t <>
	$pavarde = mysqli_real_escape_string(getConnection(), $pavarde); 
	$manoSQL = " INSERT INTO doctors VALUES ('', '$vardas', '$pavarde'); "; // i msql paste'inti be $
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
	if($arPavyko) {
			//pavyko
	} else { //nepavyko
		echo "sukurti gydytojo nepavyko <br>" . mysqli_error($getConnection()) . "<br>";
	}
}
// createDoctor2("veronika", "verotaite");

function deleteDoctor($nr) {
	$manoSQL = "DELETE FROM doctors WHERE id='$nr';"; //BUTINAI NURODYT ID TY SALYGA KITAIP WHERE BE BIEKO ISTRINS VISA BAZE
	mysqli_query(getConnection(), $manoSQL);
}
// deleteDoctor("16");


function updateDoctor($nr, $vardas, $pavarde) {
	$vardas = mysqli_real_escape_string(getConnection(), $vardas);
	$pavarde = mysqli_real_escape_string(getConnection(), $pavarde);
	$manoSQL = "UPDATE doctors SET name='$vardas', lname='$pavarde' WHERE id=3;";
	mysqli_query(getConnection(), $manoSQL); // i php
}
// updateDoctor(3, "Onute", "Onutyte");


function getDoctors() {
	// $vardas = mysqli_real_escape_string(getConnection(), $vardas);
	// $pavarde = mysqli_real_escape_string(getConnection(), $pavarde);

	$manoSQL = "SELECT * FROM doctors;";
	$visiGydytojai = mysqli_query(getConnection(), $manoSQL); //i kintamaji kad neprapultu

	if ($visiGydytojai) {
		return $visiGydytojai; // grazina visus gydytojus i vursu funkcijos ()
	} else {
		echo "ERROR" . mysqli_error(getConnection()) . "<br>"; // kaskart ki mysqli leidi reikia irodymo prisijungimui
		return NULL;
	}
}
$allDoctors = getDoctors(); // perkelia i cia gydytojus reikia kintamojo kad issaugot
// print_r('$allDoctors');
// var_dump($allDoctors); // daugiau isvesti info apie kintamaji

$gydytojas = mysqli_fetch_assoc($allDoctors); //paverciam i masyva gautus duomenis
// $gydytojas = mysqli_fetch_assoc($allDoctors);
// $gydytojas = mysqli_fetch_assoc($allDoctors);
// var_dump($allDoctors); //test
// print_r($gydytojas); // dabar jau cia bus trecias gydytojas, nes tris kart issivedineji //test

// while ($gydytojas) { // ar/kol gydytojas true
// 	echo 'pavarde: ' . $gydytojas['lname'] . '<br>' . 'vardas: ' . $gydytojas['name'] . '<br>' . '<br>'; // patikrina ar rado, kai randa > spausdina

// 	$gydytojas = mysqli_fetch_assoc($allDoctors); // imame sekancia eilute / sekanti gydytoja / sekancia eilute galime whil'e deti per lygybe cia nebereiks ir taip isspaudins visa masyva (masyva masyve)
	
// }


// echo $gydytojas['lname'] . '<br>' . "vardas" . '<br>' . $gydytojas['name'];


?>