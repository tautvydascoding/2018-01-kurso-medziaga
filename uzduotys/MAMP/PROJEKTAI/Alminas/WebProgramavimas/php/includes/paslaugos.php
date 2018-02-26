<?php
require_once 'dbconnectionArticles.php';
$straipsnis = getArticle(1);
$straipsnis = mysqli_fetch_assoc($straipsnis);
?>
<div class="col-lg-3 offset-lg-1 paslaugu_box" data-aos="fade-right" data-aos-duration="2000">
    <img src="images/paslauga1.png" alt="" class="paslaugu_images">
    <?php  echo $straipsnis['article'];  ?>
    <button class="default_button center_button" onclick="location.href='contacts.php';">UŽSISAKYTI</button>
</div>
<?php
$straipsnis2 = getArticle(2);
$straipsnis2 = mysqli_fetch_assoc($straipsnis2);
?>
<div class="col-lg-3 paslaugu_box" class="paslaugu_images" data-aos="fade-up" data-aos-duration="2000">
    <img src="images/paslauga2.png" alt="" class="paslaugu_images">
    <?php  echo $straipsnis2['article'];  ?>
    <button class="default_button center_button" onclick="location.href='contacts.php';">UŽSISAKYTI</button>
</div>
<?php
$straipsnis3 = getArticle(3);
$straipsnis3 = mysqli_fetch_assoc($straipsnis3);
?>
<div class="col-lg-3 paslaugu_box" class="paslaugu_images" data-aos="fade-left" data-aos-duration="2000">
    <img src="images/paslauga3.png" alt="" class="paslaugu_images">
    <?php  echo $straipsnis3['article'];  ?>
    <button class="default_button center_button" onclick="location.href='contacts.php';">UŽSISAKYTI</button>
</div>
