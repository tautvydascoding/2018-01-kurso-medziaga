
<?php
$connection = mysqli_connect('localhost', 'root', '', 'users');
if (!$connection){
    die("Prisijungimas nepavyko" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'users');
if (!$select_db){
    die("DB select nepavyko" . mysqli_error($connection));
}
