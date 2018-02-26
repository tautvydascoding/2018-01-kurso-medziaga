<!DOCTYPE html>
<html lang="lt">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css?version-5" />
        <link rel="stylesheet" type="text/css" href="css/media.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="libs/aos/aos.css" />
        <link rel="stylesheet" href="libs/lightbox2/src/css/lightbox.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="images/icon.png" />
        <title>Web programavimas</title>
    </head>
    <body>
        <div class="container-fluid about_bg_image">
            <div class="row">
                <?php include 'php/includes/header.php';?>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 about_me p-4">
                    <div class="col-lg-3 foto_box">
                        <img src="images/me.png" alt="Alminas" class="float_l img-responsive me" data-aos="flip-down" data-aos-duration="3000"/>
                    </div>
                    <?php
                    require_once 'php/includes/dbconnectionArticles.php';
                    $straipsnis6 = getArticle(6);
                    $straipsnis6 = mysqli_fetch_assoc($straipsnis6);
                    echo $straipsnis6['article'];
                    ?>
                </div>
                <div class="clear_fix"></div>
            </div>
            <div class="row gallery_margin">
                <div class="col-lg-8 offset-lg-2 gallery_bg">
                    <div class="col-lg-3 gallery_title ">
                        <p class="h2 pt-4">
                            Darbų pavyzdžiai
                        </p>
                        <p class="para" style="display:none;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                    <div class="col-lg-8 offset-1 float_r p-4 thumbnails">
                        <?php
                            include_once 'php/includes/dbconnImages.php';
                            for ($i=1; $i <= 6 ; $i++) {
                                $image = getImage($i);
                                $image = mysqli_fetch_assoc($image);
                                $image_src = $image['image_src'];
                                $image_thumb =  $image['thumb_src'];
                                echo "<a href='$image_src' data-lightbox='gallery' data-title='Title Nr. $i'><img src='$image_thumb' alt='gallery photo' class='img-thumbnail'></a>";
                            }
                        ?>
                    </div>

                </div>
                <div class="clear_fix"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 comments_div p-4">
                    <div class="comments col-lg-8 offset-lg-2">
                        <?php
                        include 'php/includes/comments.php';
                        echo "<form action='".setComment()."' method='post'>
                            <h2>Vartotojų komentarai</h2>

                            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                            <textarea name='message' rows='8' cols='80'></textarea>
                            <button class='default_button' name='submit' type='submit'>Rašyti</button>
                        </form>";
                        ?>
                        <!-- getComments(); -->
                        <div class="comments2">
                            <?php
                            $sql = "SELECT * FROM comments LIMIT 2;";
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
                            ?>
                        </div>
                        <button class='default_button load_more mt-4'>Daugiau komentarų</button></br>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php include 'php/includes/footer.php';?>
            </div>

        </div>
        <!-- SCRIPTS ------------------------------------>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="libs/lightbox2/src/js/lightbox.js"></script>
        <script src="libs/aos/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script type="text/javascript" src="js/about.js"></script>
    </body>
</html>
