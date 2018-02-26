<?php require_once 'dbconnectionArticles.php';
$straipsnis7 = getArticle(7);
$straipsnis7 = mysqli_fetch_assoc($straipsnis7);
echo $straipsnis7['article'];
?>
