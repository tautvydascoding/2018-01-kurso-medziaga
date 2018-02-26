<?php
session_start();
include "../dbh.php";
$name = $_POST['name'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$email = $_POST['mail'];

// echo $name."<br>";
// echo $lname."<br>";
// echo $username."<br>";
// echo $pwd."<br>";

$sql = "INSERT INTO user (name, lname, username, pwd, email) VALUES ('$name', '$lname', '$username', '$pwd', '$email')";
$result = mysqli_query($conn, $sql);

header("Location: ../redirect3.php");
// header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/Baigiamasis-beta/skelbimas-add-new.php");
