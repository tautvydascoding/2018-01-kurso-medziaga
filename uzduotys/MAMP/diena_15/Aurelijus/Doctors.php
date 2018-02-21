<?php

//phpinfo();  //visa info apie php

define('DB_NAME', 'hospital1');
define('User', 'root');
define('Password','root');
define('DB_HOST','localhost');

$connection = mysqli_connect( DB_HOST, User, Password, DB_NAME); //mysqli- truputi saugiau

if(!$connection){
    echo "Prisijungti prie Duomenu bazes nepavyko ". DB_NAME ." nepavyko <br>";
    // echo "Error " . mysqli_connect_error($connection) . "<br>";
} else{
    echo "Jus prisijungete prie Duomenu bazes: ". DB_NAME;
}
