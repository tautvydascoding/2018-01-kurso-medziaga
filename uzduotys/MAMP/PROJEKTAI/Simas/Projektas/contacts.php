<?php require "./templates/head_navbar.php"; 
    // $query_age = (isset($_GET['query_age']) ? $_GET['query_age'] : null);
        // $vardas = $_GET['vardas'];
        // $pavarde = $_GET['pavarde'];
        // $klausimas = $_GET['klausimas'];
        // $elpastas = $_GET['pastas'];
        //jeigu kada nebeveiktu laisku siuntimas
?>
<section class="container-fluid background-contacts d-block">
    <div class="container">
        <h1 class="white-text">CONTACTS</h1>
    </div>
</section>
<main class="container">
    <section>
        <div class="row margin-t-10">
            <div class="col-lg-4 col-12 margin-t-10  text-center">
                <h2 class="font1">Contact Me</h2>
            </div>
            <div class="col-lg-4 col-12 margin-t-10  text-center">
                <p><strong>Kalvarijų g. 88,</strong> <br> Vilnius 09303</p>
            </div>
            <div class="col-lg-4 col-12 margin-t-10  text-center">
                <p><strong>Mon - Sat 8.00 - 18.00</strong> <br> Sunday CLOSED</p>
            </div>
        </div>
    </section>

    <section class="row">
        <div class="col-lg-8 col-12 offset-lg-2">
            <div class="row">
                <div class="col-12 ">
                    <h2>Get in touch</h2>
                </div>
                <form action="./templates/email.php" method= "GET" class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                        <input name="vardas" placeholder="First Name" type="text" class="form-input" required>
                        </div>
                        <div class="col-lg-6 col-12">
                        <input name="pavarde" placeholder="Last Name" type="text" class="form-input" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 w100">
                            <textarea name="klausimas" placeholder="Your Message" class="form-input min-height-210 " required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <input name="pastas" placeholder="Email" id="email" type="email" class="form-input" required>
                        </div>
                        <div class="col-lg-4 col-12">
                            <button type="submit" class="button-orange w-100">Send a Message</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<div class="col-12 no-padding-right no-padding-left"><!-- zemelapis -->
                <div id="map"></div>
            </div><!-- END zemelapis -->

<?php require "./templates/scripts_footer.php"; ?>