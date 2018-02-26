<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Juritta
        </title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <header class="office container-fluid">
            <div class="header row">
                <div class="col-5">
                    <a href="office_home.php"> <img src="./images/office_logo.png" id="offi_lo" alt="logo Office"> </a>
                </div>
                <nav class="col-7">
                    <div class="header adjust_mt row justify-content-end d-flex">
                        <?php include ('sql_functions.php');
                         $menuItem1 = getMItem(1);
                         $menuItem2 = getMItem(2);
                         $menuItem3 = getMItem(3);?>
                        <div class="col-3 text-center align-self-center"> <a class="navi" href="office_produktai.php"><?php echo $menuItem1['menu_item'];?></a> </div>
                        <div class="col-3 text-center align-self-center"> <a class="navi" href="office_paslaugos.php"><?php echo $menuItem2['menu_item'];?></a> </div>
                        <div class="col-3 text-center align-self-center"> <a class="navi" href="office_projektai.php"><?php echo $menuItem3['menu_item'];?></a> </div>
                        <div class="col-2 text-center align-self-center meniu_icon"><span>||</span></div>
                    </div>
                </nav>

            </div>

        </header>
        <div class="meniu-isvaziuojantis text-center">
            <a class="navi-vazi navi-coll" href="office_produktai.php"><?php echo $menuItem1['menu_item'];?></a>
            <a class="navi-vazi navi-coll" href="office_paslaugos.php"><?php echo $menuItem2['menu_item'];?></a>
            <a class="navi-vazi navi-coll" href="office_projektai.php"><?php echo $menuItem3['menu_item'];?></a>
            <span class="navi-coll"><hr></span>
            <a class="navi-vazi isimtinai"href="#">virtuvei</a>
            <a class="navi-vazi"href="office_home.php">ofisui</a>
            <a class="navi-vazi"href="#">namams</a>
            <a class="navi-vazi"href="contacts.php">kontaktai</a>
            <a class="navi-vazi"href="login.php">login</a>
        </div>
        <div class="office_im"></div>
