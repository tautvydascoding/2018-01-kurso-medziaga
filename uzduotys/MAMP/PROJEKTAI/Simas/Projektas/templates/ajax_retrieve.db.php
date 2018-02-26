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
    }
    return $connect;
}

//====================
// newsletters isemimas is bazes, puikiai veikia, bet isima tik viena
    $manoSQL = "SELECT * FROM newsletters";
    $letter = mysqli_query(getPrisijungimas(), $manoSQL);
    $all_letters = mysqli_fetch_row($letter);
    echo json_encode($all_letters);


