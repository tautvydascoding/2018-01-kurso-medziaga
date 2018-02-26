<?php

//static pvz

function augu() {
	$ugis = 50; //local
	echo "ugis:  $ugis <br>";
	$ugis++;
}
augu();
augu();
augu();
augu();

echo "<br>";

//su static

function augu2() {
	static $ugis = 50; //stativ kintamasis nebus naikinamas pabaius f-jai darba
	echo "ugis:  $ugis <br>";
	$ugis++;
}
augu2();
augu2();
augu2();
augu2();

echo "<br>";
//-------rekursija - f-ija kuri pati save paleidzia
// uzduotis: atspausdinti 20 kartu "labas" ir salia numeri, kelinta karta spausdinames

function testRecursion() {
	static $nr = 0;
	//echo "labas $nr";
	$nr++;
	if($nr < 20) { //kol nr maziau nei 20 tol iskvieciam funkcija
	testRecursion();
	} //nenurodai else pabaigs f-ija darba
		echo "labas $nr"; //tol nevykdys echo kol nepadare tos funkcijos virsuje if'e
}
testRecursion();

echo "<br>";

$vardai = ["tomas", "jurgis"];
function spausdinti() {
	getVardas();
	echo " spausdinu varda: ";
}
function getVardas() {
	echo "imu varda " . getVardasIsDB();
}
function getVardasIsDB() {
	global $vardai; // kad butu galima prieiti iki kintamojo uz f-ijos ribu 
	return $vardai[0];
}
spausdinti();


?>