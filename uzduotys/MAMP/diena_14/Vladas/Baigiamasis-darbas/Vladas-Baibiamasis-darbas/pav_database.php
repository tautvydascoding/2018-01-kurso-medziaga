<?php


define( 'DB_NAME', 'giraitestr');
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
}
    return $connection;
}

function getPav($nr) {
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
