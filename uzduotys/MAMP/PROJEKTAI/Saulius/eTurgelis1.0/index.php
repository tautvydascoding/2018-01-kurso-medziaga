
<?php require_once("./header.php") ?>

<!-- Cont pgr -->
<div class="container pagrindinis">
    <section class="row mt-2">

        <!-- Categories -->
        <div class="col-lg-2 col-md-12 kat">
            <h3 class="mt-lg-1">Kategorijos</h3>
                    <nav class="navbar nav-transparent navbar-expand-lg navbar-light">
                        <button class="navbar-toggler w-100 button6" type="button" data-toggle="collapse" data-target="#kategorijos" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="kategorijos">
                            <div class="input-group-collapse">
                                <a href="" class="btn button6 w-100 mb-1" role="button">Elektronika</a>
                                <a href="" class="btn button6 w-100 mb-1" role="button">Baldai</a>
                                <a href="" class="btn button6 w-100 mb-1" role="button">Gyvuneliai</a>
                                <a href="" class="btn button6 w-100 mb-1" role="button">Sodas/daržas</a>
                                <a href="" class="btn button6 w-100 mb-1" role="button">Automobiliai</a>
                                <a href="" class="btn button6 w-100" role="button">Kiti</a>
                            </div>
                        </div>
                        <!-- Menu end -->
                    </nav>
        </div>
        <!-- Categories end -->

        <!-- Cards -->
        <main class="col-lg-8 col-md-12 mr-2-lg ml-2-lg tamsus">
            <div class="h1 text-center">Naujausi skelbimai</div>
            <div class=" row skelbimai">
                <?php include './libs/DB.php';
                for ($i=1; $i < 20; $i++) : ?>
                <?php $info = getInfo($i); // masyvas
                if ($info['aprasymas'] == false) {
                    break;
                } else { ?>
                <div class="col-10 col-sm-6 col-md-4 mb-4">
                    <div class="card w-100 h-100" style="">
                        <img class="card-img-top imga" src="./skelbimai/<?php echo $info['foto'] ?>" alt="Card image cap">
                        <div class="card-body pt-0">
                            <h5 class="card-title text-center font-weight-bold"><?php echo $info['antraste'] ?></h5>
                            <p class="card-text text-center"><?php echo $info['aprasymas'] ?></p>
                        </div>
                        <a href="./skelbimas.php?numeris=<?php echo $info['id']; ?>" class="btn btnc button6 w-100">Noriu!</a>
                    </div>
                </div>
                <?php if ($i === 9): ?>
                    <a href="" class="btn button6 w-100 mx-3 mb-1 mt-4 daugiau" role="button">Rodyti daugiau</a>
                <?php endif; ?>
                <?php }
                endfor; ?>
            </div>
        </main>
        <!-- Cards end -->

        <!-- Out/In/Up -->
        <div class="col mt-2-sm mt-0-md kat">
            <?php
            // Username
            if (isset($_SESSION['username'])) {
                echo
                    "<div class='vardas'>"
                        .$_SESSION['username']
                    ."</div>";
            // Username end

            // Logout
                echo
                    "<form action='./includes/logout.php'>
                        <button class='btn btn-dark button6 dark form-control'>logout</button>
                    </form>";
            // Logout end
            } else {
            // Login
                echo
                    "<form class='margint' action='./includes/login.php' method='post'>
                        <input class='form-control sviesus2 fontas' type='text' name='username' placeholder='Kietas usename'as' />
                        <br>
                        <input class='form-control sviesus2 fontas' type='password' name='pwd' placeholder='Slaptazodis' />
                        <br>
                        <button class='btn btn-dark button6 dark form-control' type='submit' name='button'>login</button>
                    </form>";
            // Login end

            // Signup
                echo
                    "<div class='dropdowwn-menu mt-1'>
                        <button class='btn btn-dark button6 dark dropdown-toggle form-control' type='button' data-toggle='dropdown' >Registruokis</button>
                        <form class='form-group dropdown-menu reg' aria-labelledby='dropdownMenuButton' action='./includes/signup.php' method='post' onsubmit='return validation();'>
                            <input id='name' class='dropdown-item fontas' type='text' name='name' placeholder='Vartotojo vardas' />
                            <input id='lname' class='dropdown-item fontas' type='text' name='lname' placeholder='Vartotojo pavarde' />
                            <input id='usernm' class='dropdown-item fontas' type='text' name='username' placeholder='Kietas usename'as' />
                            <input id='psw' class='dropdown-item fontas' type='password' name='pwd' placeholder='Slaptazodis' />
                            <input id='mail' class='dropdown-item fontas' type='text' name='mail' placeholder='eMail' />
                            <button class='dropdown-item button6 text-center' action='submit'>Registruotis</button>
                        </form>
                    </div>";
            // Signup end
            }
            ?>
            </div>
            <!-- Out/In/Up  end -->
    </section>
    <!-- Row end -->
</div>
<!-- Cont end -->

<img class="kepuraite" src="./img/red.png" alt="">
<div class="float-fix"></div>

<?php require_once("./footer.php") ?>
