<?php session_start(); ?>
<?php require_once "./templates/head_navbar.php"; ?>
    
    
    <section class="container-fluid background-contacts d-block">
    <div class="container">
        <h1 class="white-text">Sign In</h1>
    </div>
    </section>
    <?php 
    $value = isset($_SESSION['user']) ? $_SESSION['user'] : '';
    // //empty()
    // $value = !empty($_POST['value']) ? $_POST['value'] : '';
        // if ($_SESSION['user']) {
        if ($value) {
    ?>
        <form action="./templates/logout.php" method= "POST" class="container w-25">
                <div class="">
                    <button type="submit" name="submit" class="button-orange w-100">LOGOUT</button>
                </div>
            </div>
        </form>     
        
        <div class="container">
            <?php include "./templates/php_db.php" ;?>
            <h2>Coaching contacts</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    for ($i=1; $i < 100; $i++) {
                        $nr = $i;
                        getCoaching($nr);
                        $vienas_contact = getCoaching($nr);
                ?>
                    <tr>
                        <td><?php echo $vienas_contact['id']; ?></td>
                        <td><?php echo $vienas_contact['vardas']; ?></td>
                        <td><?php echo $vienas_contact['pavarde']; ?></td>
                        <td><?php echo $vienas_contact['telefonas']; ?></td>
                        <td><?php echo $vienas_contact['email']; ?></td>
                    </tr>
                <?php
                    if ($vienas_contact['id'] == false)
                    break;
                    }
                ?>
                </tbody>
            </table>
            
            <h2>Users</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    for ($i=1; $i <100; $i++) {
                        $nr = $i;
                        getUser($nr);
                        $vienas_user = getUser($nr);
                ?>
                    <tr>
                        <td><?php echo $vienas_user['id']; ?></td>
                        <td><?php echo $vienas_user['vardas']; ?></td>
                        <td><?php echo $vienas_user['pavarde']; ?></td>
                        <td><?php echo $vienas_user['user']; ?></td>
                        <td><?php echo $vienas_user['password']; ?></td>
                        <td><?php echo $vienas_user['telefonas']; ?></td>
                        <td><?php echo $vienas_user['email']; ?></td>
                    </tr>
                <?php
                    if ($vienas_user['id'] == false)
                    break;
                    }
                ?>
                </tbody>
            </table>
            


            <h2>Newsletters</h2>
                <form action="" method="" id="loginForm" novalidate="novalidate">
                <button id ='form-button-submit' type="submit" class="button-orange w-25" name="insert-data" id="insert-data">GET DATA</button>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="id1"></td>
                            <td id="name1"></td>
                            <td id="email1"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

    <?php 
        } else {
    ?>
        <div class="container w-50">
        <form action="./templates/login.php" method= "POST" class="container-fluid">
            <div class="row">
                <div class="col-12">
                <input name="user" placeholder="Username" type="text" class="form-input" required>
                </div>
                <div class="col-12">
                <input name="password" placeholder="Password" type="password" class="form-input" required>
                </div>
                <div class="col-12">
                    <button type="submit" name="submit" class="button-orange w-100">SIGN IN</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container w-25">
        <div class="row">
            <div class="col-12">
                <button class="button-white w-100" type="button" data-toggle="modal" data-target="#exampleModalCenter">SIGN UP</button>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sign Up</h5>
            </div>
            <div class="modal-body">
                <form action="" method= "" class="container-fluid" id="loginForm">
                    <div class="row">
                        <div class="col-12">
                            <input name="vardas" placeholder="First Name" type="text" class="form-input" id="vardas" required>
                        </div>
                        <div class="col-12">
                            <input name="pavarde" placeholder="Last Name" type="text" class="form-input" id="pavarde"required>
                        </div>
                        <div class="col-12">
                        <input name="user" placeholder="Username" type="text" class="form-input" id="user"required>
                        </div>
                        <div class="col-12">
                        <input name="password" placeholder="Password" id="password"type="text" class="form-input" required>
                        </div>
                        <div class="col-12">
                        <input name="telefonas" placeholder="Phone Number" type="text" class="form-input" maxlength="12" id="telefonas"required>
                        </div>
                        <div class="col-12">
                        <input name="email" placeholder="Email" id="email" type="email" class="form-input" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="button-orange w-100" name="insert-data" id="insert-data" onclick="signUp()">SIGN UP</button>
                        
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <?php
        }
    ?>
    

    

    


<?php require_once "./templates/maps_scripts_footer.php"; ?>