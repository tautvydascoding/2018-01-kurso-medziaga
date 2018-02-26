<?php

// phpinfo() - visa info apie php, eiti per web localhost

// localhost/phpMyAdmin

define('DB_NAME', 'misete');
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
mysqli_set_charset($connection, 'utf8');

if (!function_exists('getConnection')) {
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
}
//---------------------------

function getHomepage($nr) {
	// global $connection; // php ne js sitas kintamas turi but itrauktas i f-ja
	$manoSQL = "SELECT * FROM homepage WHERE id='$nr';"; 
	// mysqli_query - grazina duomenis MYSQL objekte
	$rezultatai = mysqli_query(getConnection(), $manoSQL); // $link - irodymai kad prisijungimus turi; $query - darbas kuri vykdyt, $rezultatai kad nedingtu: is viso kartu vykdo uzduota SQL teksta;
	if (!$rezultatai) {
		echo "ieskomos nuotraukos nera: nr " . $nr . "<br>";
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
 // perkelia i cia gydytojus reikia kintamojo kad issaugot
// print_r('$allDoctors');
// var_dump($allDoctors); // daugiau isvesti info apie kintamaji

// $gydytojas = mysqli_fetch_assoc($allDoctors); //paverciam i masyva gautus duomenis
// $gydytojas = mysqli_fetch_assoc($allDoctors);
// $gydytojas = mysqli_fetch_assoc($allDoctors);
// var_dump($allDoctors); //test
// print_r($gydytojas); // dabar jau cia bus trecias gydytojas, nes tris kart issivedineji //test

// while ($gydytojas) { // ar/kol gydytojas true
// 	echo 'pavarde: ' . $gydytojas['lname'] . '<br>' . 'vardas: ' . $gydytojas['name'] . '<br>' . '<br>'; // patikrina ar rado, kai randa > spausdina

// 	$gydytojas = mysqli_fetch_assoc($allDoctors); // imame sekancia eilute / sekanti gydytoja / sekancia eilute galime whil'e deti per lygybe cia nebereiks ir taip isspaudins visa masyva (masyva masyve)
	
// }


// echo $gydytojas['lname'] . '<br>' . "vardas" . '<br>' . $gydytojas['name'];


//---------------APIE

function getApie($nr) {
	// global $connection; // php ne js sitas kintamas turi but itrauktas i f-ja
	$manoSQL = "SELECT * FROM apie WHERE id='$nr';"; 
	// mysqli_query - grazina duomenis MYSQL objekte
	$rezultatai = mysqli_query(getConnection(), $manoSQL); // $link - irodymai kad prisijungimus turi; $query - darbas kuri vykdyt, $rezultatai kad nedingtu: is viso kartu vykdo uzduota SQL teksta;
	if (!$rezultatai) {
		echo "ieskomo elemento nera: nr " . $nr . "<br>";
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

//-------------------CONTACT


function getKontaktai($nr) {
	// global $connection; // php ne js sitas kintamas turi but itrauktas i f-ja
	$manoSQL = "SELECT * FROM kontaktai WHERE id='$nr';"; 
	// mysqli_query - grazina duomenis MYSQL objekte
	$rezultatai = mysqli_query(getConnection(), $manoSQL); // $link - irodymai kad prisijungimus turi; $query - darbas kuri vykdyt, $rezultatai kad nedingtu: is viso kartu vykdo uzduota SQL teksta;
	if (!$rezultatai) {
		echo "ieskomo elemento nera: nr " . $nr . "<br>";
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

// del saugumo, kad neprikodintu i laukus 
function createZinute($vardas, $zinute, $elpastas) { // naujo gydytojo sukurimas
	$vardas = mysqli_real_escape_string(getConnection(), $vardas); // uzkoduoja spec simbolius " ' /n /t <>
	$zinute = mysqli_real_escape_string(getConnection(), $zinute); 
	$elpastas = mysqli_real_escape_string(getConnection(), $elpastas); 
	$manoSQL = " INSERT INTO zinutes VALUES ('', '$vardas', '$zinute', '$elpastas'); "; // i msql paste'inti be $
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
	if($arPavyko) {
			//pavyko
	} else { //nepavyko
		echo "sukurti zinutes nepavyko <br>" . mysqli_error($getConnection()) . "<br>";
	}
}
//-------------REGISTRACIJA

// del saugumo, kad neprikodintu i laukus 
function createNarys($vardas, $slaptazodis, $elpastas) { // naujo gydytojo sukurimas
	$vardas = mysqli_real_escape_string(getConnection(), $vardas); // uzkoduoja spec simbolius " ' /n /t <>
	$slaptazodis = mysqli_real_escape_string(getConnection(), $slaptazodis); 
	$elpastas = mysqli_real_escape_string(getConnection(), $elpastas); 
	$manoSQL = " INSERT INTO nariai VALUES ('', '$vardas', '$slaptazodis', '$elpastas'); "; // i msql paste'inti be $
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
	if($arPavyko) {
		$taip = "užsiregistravote";
		include('reg_resp.php');			
	} else { //nepavyko
		$taip =  "užsiregistruoti nepavyko <br>" . mysqli_error($getConnection()) . "<br>";
		include('reg_resp.php');
	}
}

//-------------KOMENTARAI

// del saugumo, kad neprikodintu i laukus 
function createKomentaras($vardas, $komentaras) { // naujo gydytojo sukurimas
	$vardas = mysqli_real_escape_string(getConnection(), $vardas); // uzkoduoja spec simbolius " ' /n /t <>
	$komentaras = mysqli_real_escape_string(getConnection(), $komentaras); 
	$manoSQL = " INSERT INTO komentarai VALUES ('', '$vardas', '$komentaras'); "; // i msql paste'inti be $
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
	if($arPavyko) {
		$taip = "Dėkoju už Jūsų komentarą";
		include('koment_resp.php');			
	} else { //nepavyko
		$taip =  "Komentaro išsiųsti nepavyko <br>" . mysqli_error($getConnection()) . "<br>";
		include('koment_resp.php');
	}
}
//-------------BALSAVIMAS

// del saugumo, kad neprikodintu i laukus 
function createBalas($balas) { // naujo gydytojo sukurimas
	$manoSQL = " INSERT INTO balsavimas VALUES ('', '$balas'); "; // i msql paste'inti be $
	$arPavyko = mysqli_query(getConnection(), $manoSQL);
	// if($arPavyko) {
	// 	$taip = "Dėkoju už Jūsų balsą";
	// 	include('balsav_resp.php');			
	// } else { //nepavyko
	// 	$taip =  "Balsavimas nepavyko <br>" . mysqli_error($getConnection()) . "<br>";
	// 	include('balsav_resp.php');
	// }
}



?>


