



<?php

define( 'DB_NAME', 'giraitestr');
define( 'USER', 'root');
define( 'PASSWORD', 'root');
define( 'BD_HOST', 'localhost');

$connection = mysqli_connect( BD_HOST, USER, PASSWORD, DB_NAME);

if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'giraitestr');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

// $paveikslas = getPav(2);
// if($paveikslas !=NULL) {
//     echo $paveikslas['name'] . "<br>"; }
