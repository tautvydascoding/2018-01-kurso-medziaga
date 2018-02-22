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
} else {
	echo " ";
}
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
		$rezultatu_masyvas = mysqli_fetch_assoc($rezultatai); 
		// asociatyvus masyvas
		//fecth.array - asociatyvus ir paprastas masyvas
		//fetch_row - pavercia i paprasta masyba
		return $rezultatu_masyvas;
	}
	// return $rezultatu_masyvas;
}
// $gydytojas = getDoctor(1); // masyvas // pagal numeriuka kad grazintu tik viena konkretu gydytoja
// if ($gydytojas = $rezultatu_masyvas) {
// 	echo $gydytojas['name'] . "<br>";
// }

// if ($gydytojas != NULL) {
// 	echo $gydytojas['name'] . " ";	
// 	echo $gydytojas['lname'] . " ";	
// 	echo $gydytojas['id'] . " ";
// }



?>