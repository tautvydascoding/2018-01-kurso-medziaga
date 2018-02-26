<?php
session_start();
include "../dbh.php";
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$userId = $_POST['id'];

// echo $name."<br>";
// echo $lname."<br>";
// echo $username."<br>";
// echo $pwd."<br>";
$sql = "SELECT * FROM user WHERE username='$username' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);
if (!$row = mysqli_fetch_assoc($result)) {
    echo "Dishovai suvedei!";
} else {
    $_SESSION['username'] = $row['username'];
    $_SESSION['id'] = $row['id'];
}

header("Location: ../index.php");
