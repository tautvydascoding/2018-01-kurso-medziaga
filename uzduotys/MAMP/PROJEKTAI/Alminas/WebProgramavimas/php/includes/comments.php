<?php
include 'dbconnComments.php';
$comments = $_POST['newcount'];
$sql = "SELECT * FROM comments LIMIT $comments";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<strong>";
        echo $row['author'];
        echo "</strong></br>";
        echo $row['date'];
        echo "</br>";
        echo "<p>";
        echo $row['message'];
        echo "</p></br>";
    }
}

date_default_timezone_set('Europe/Vilnius');
function setComment(){
    include 'dbconnComments.php';
    if (isset($_POST['submit'])) {
        $date = $_POST['date'];
        $msg = $_POST['message'];
        $author = $_SESSION['u_uid'];

        $sql = "INSERT INTO comments (id, author, message, date)
        VALUES ('', '$author', '$msg', '$date');";
        mysqli_query($conn, $sql);

    }
}
