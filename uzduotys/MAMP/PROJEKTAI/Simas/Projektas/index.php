<?php require "./templates/head_navbar.php"; ?>

        <main class="container">
            <section class="row background-1 img-fluid mx-auto d-block">
                <!-- section 1 -->
                <div class="col align-self-center white-text">
                    <h1 class="d-flex justify-content-center text-center">Learn to move well and live well</h1>
                    <h6 class="text-center">I really know how to push my clients to look and feel amazing! </h6>
                    <a href="./straipsniai.php?straipsnis=1" class="d-flex justify-content-center d-flex align-items-center">
                        <button class="button-orange">VIEW PROGRAMS</button>
                    </a>
                </div>
            </section>
            <!-- END section 1 -->

            <section class="row">
                <!-- section 2 -->
                <div class="col-md-6 d-none d-md-block no-padding-right">
                    <img src="/img/1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <h2 class="d-flex justify-content-center">Adult program</h2>
                    <h5 class="text-center">Express (2 weeks), Smart (3 months), Normal (6 months)</h5>
                    <p class="text-center">These programs will help you get lean and sculpted. My exercise plan will
                        speed your metabolism and help you slim down. These explosive programs
                        require almost no equipment.</p>
                    <a href="./straipsniai.php?straipsnis=2" class="d-flex justify-content-center d-flex align-items-center">
                        <button class="button-white">VIEW PROGRAMS</button>
                    </a>
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <h2 class="d-flex justify-content-center">Junior programs</h2>
                    <h5 class="text-center">Express (2 weeks), Smart (3 months), Normal (6 months)</h5>
                    <p class="text-center">I offer programs for all ages, not just adults. My staff of trained professionals
                        did their research to gather technology to create this amazing set
                        of junior programs.</p>
                    <a href="./straipsniai.php?straipsnis=3" class="d-flex justify-content-center d-flex align-items-center">
                        <button class="button-white">VIEW PROGRAMS</button>
                    </a>
                </div>
                <div class="col-md-6 d-none d-md-block no-padding-left">
                    <img src="/img/2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 d-none d-md-block no-padding-right">
                    <img src="/img/3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <h2 class="d-flex justify-content-center">Workshops</h2>
                    <h5 class="text-center">Express (2 weeks), Smart (3 months), Normal (6 months)</h5>
                    <p class="text-center">CrossFit Workshops include the most comprehensive range of state of the
                        art, ergonomically correct strength and cardio equipment as well as
                        training instructions available at the best possible prices.</p>
                    <a href="./straipsniai.php?straipsnis=4" class="d-flex justify-content-center d-flex align-items-center">
                        <button class="button-white">VIEW PROGRAMS</button>
                    </a>
                </div>
            </section>
            <!-- END section 2 -->
        </main>

        <section class="container-fluid row background-2 img-fluid mx-auto d-block">
            <!-- section 3 -->
            <h2 class="white-text d-flex justify-content-center text-center">Daily workouts</h2>
            <h4 class="white-text text-center">Personalized for every client</h4>
            <a href="./straipsniai.php?straipsnis=5" class="d-flex justify-content-center d-flex align-items-center">
                <button class="button-white2">VIEW WORKOUTS</button>
            </a>
        </section>
        <!-- END section 3 -->

        <main class="container">
            <section class="row padding-l-r-15">
                <!-- section 4 -->
                <div class="bg-orange col-md-5 col-12 align-self-center">
                    <h5 class="text-center white-text">My personal free 14 days fat loss guide</h5>
                    <p class="text-center">The Fat Loss expert guide teaches you everything you need to know about
                        losing body fat while maintaining muscle mass. Use this guide for your
                        fat loss plan!</p>
                    <a href="" class="d-flex justify-content-center d-flex align-items-center">
                        <button class="button-white3">DOWNLOAD
                            <i class="fas fa-download"></i>
                        </button>
                    </a>
                </div>
                <div class="col-md-7 col-12 padding-4">
                    <h2 class="text-left">Newsletter</h2>
                    <h5 class="text-left">Subscribe to my newsletter for</h5>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <ul>
                                <li>Tips on managing stress</li>
                                <li>Ways to stay motivated</li>
                                <li>How to improve your metabolism</li>
                                <li>Healthy and tasty recipes</li>
                                <li>How to conquer procrastination</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-12">
                            <form action="" method="POST" id="loginForm" novalidate="novalidate">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="pirmasvardas" placeholder="First Name"  name="pirmasvardas" required>
                                        <input type="email" class="form-control" id="pastukas" name="pastukas" aria-describedby="emailHelp" placeholder="E-mail" required>

                                        <button type="submit" class="button-orange w-100" name="insert-data" id="newsletter" onclick="duomenuIvedimas()">Sign Up</button>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- END section 4 -->
        </main>

<?php require "./templates/maps_scripts_footer.php"; ?>