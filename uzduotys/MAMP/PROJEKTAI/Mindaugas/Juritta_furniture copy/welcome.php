<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h3>Sveikinu prisijungus,  <b><?php echo htmlspecialchars($_SESSION['username']); ?>, galite redaguoti</b></h3>
    </div>
    <div class="container redakcija">
        <div class="row">
            <div class="col-12">


                <h4>Pakeisti menu Item</h4>
                <?php require_once ('sql_functions.php');

                for ($i=0; $i<60; $i++) {
                $menuItem = getMItem($i);
                if ($menuItem != NULL) {


                ?>
                <form class="" action="update_menu.php" method="post">
                    <input type="text" name="id" value="<?php echo $menuItem['id']; ?>">
                    <input type="text" name="menu_item" value="<?php echo $menuItem['menu_item']; ?>">

                    <button type="submit" name="button">UPDATE</button>
                </form>

                <br>
                <br>
                <br>
                <?php }
                }
                 ?>


                <h4>Sukurti nauja menu Item</h4>
                <form class="" action="create_menu.php" method="post">

                    <input type="text" name="id" value="">
                    <input type="text" name="menu_item" value="">

                    <button type="submit" name="button">SAVE</button>
                </form>
            </div>
        </div>
    </div>
<!-- end container -->
<br>
<br>
<hr>
<br>
<br>
    <div class="container redakcija">
        <div class="row">
            <div class="col-12">


                <h4>Pakeisti preke</h4>
                <?php require_once ('sql_functions.php');

                for ($i=0; $i<60; $i++) {
                $produktas = getPItem($i);
                if ($produktas != NULL) {


                ?>
                <form class="" action="update_product.php" method="post">
                    <input type="text" name="id" value="<?php echo $produktas['id']; ?>">
                    <input type="text" name="name" value="<?php echo $produktas['name']; ?>">
                    <input type="text" name="img_path" value="<?php echo $produktas['img_path']; ?>">
                    <input type="text" name="description" value="<?php echo $produktas['description']; ?>">
                    <input type="text" name="type_order" value="<?php echo $produktas['type_order']; ?>">
                    <button type="submit" name="button">UPDATE</button>
                </form>
                <a href="delete_product.php?action=delete&numeris=<?php   echo $produktas['id']; ?>" method="post" class="btn btn-danger "> DELETE </a>
                <br>
                <br>
                <br>
                <?php }
                }
                 ?>


                <h4>Sukurti nauja produkta</h4>
                <form class="" action="create_product.php" method="post">

                    <input type="text" name="name" value="">
                    <input type="text" name="img_path" value="">
                    <input type="text" name="description" value="">
                    <input type="text" name="type_order" value="">
                    <button type="submit" name="button">SAVE</button>
                </form>
            </div>
        </div>
    </div>
<!-- end container -->
<br>
<br>
<hr>
<br>
<br>
    <div class="container redakcija">
        <div class="row">
            <div class="col-12">


                <h4>Spausdiname gautus laiskus</h4>
                <?php require_once ('sql_functions.php');

                for ($i=0; $i<60; $i++) {
                $uzklausa = getEmItem($i);
                if ($uzklausa != NULL) {

                ?>
                <hr>
                <h4>SIUNTEJAS: <?php echo $uzklausa['siuntejas']; ?></h4>

                <h6>El. PASTAS: <?php echo $uzklausa['email']; ?></h6>


                <p>UZKLAUSOS TEKSTAS: <?php echo $uzklausa['uzklausa']; ?></p>
                <br>
                <hr>
                <?php }
                }
                 ?>



            </div>
        </div>
    </div>
<!-- end container -->


    <p><a href="logout.php" class="btn btn-danger">Baigti darbą</a></p>
</body>
</html>
