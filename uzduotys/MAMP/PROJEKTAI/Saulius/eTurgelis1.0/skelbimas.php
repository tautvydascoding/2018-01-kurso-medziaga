<?php require_once("./header.php");

include './libs/DB.php';

$nr = $_GET['numeris']; //globalus masyvas
$info = getInfo($nr); // masyvas
getInfo($nr);
$useris = $info['userid'];
$userInfo = getUserInfo($useris);
getUserInfo($useris);
 ?>
<!-- Cont -->
<section class="container sviesus foto">
    <div class="row">
        <!-- Info -->
        <div class="col">
            <h2 class=""><?php echo $info['antraste']; ?></h2>
            <div id="slides">
                <img src="./skelbimai/<?php echo $info['foto']; ?>" alt="">
                <img src="img/apiemus/2.jpg" alt="">
                <img src="img/apiemus/3.jpg" alt="">
                <img src="img/apiemus/4.jpg" alt="">
                <img src="img/apiemus/5.jpg" alt="">
                <img src="img/apiemus/6.jpg" alt="">
                <img src="img/apiemus/7.jpg" alt="">
                <img src="img/apiemus/8.jpg" alt="">
                <img src="img/apiemus/9.jpg" alt="">
                <img src="img/apiemus/10.jpg" alt="">
                <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
                <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
            </div>
            <p><?php echo $info['aprasymas'] ?></p>
        </div>
        <!-- Info end -->

        <!-- Contact -->
        <div class="col-12 col-md-12 col-lg-4 steel">
            <h3>Pardavejo kontaktai</h3>
            <h4 class="kk"><?php echo $userInfo['username']; ?></h4>
            <h4 class="kk"><?php echo $userInfo['name']; ?></h4>
            <h4 class="kk"><?php echo $userInfo['lname']; ?></h4>
            <h4 class="kk"><?php echo $userInfo['email']; ?></h4>
        </div>
        <!-- Contact end -->

    </div>
</section>
<!-- Cont end -->





<?php require_once("./footer.php") ?>
