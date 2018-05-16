<?php
echo '
<!-- modal classic -->
    <section class="modal-classic">
        <div class="modal fade" id="classicStyle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-beige">
                    <img class="w-100 img-style" src="img/classic.jpg">
                    <div class="modal-body">
                        <div class="container">
                            <h2 class="text-uppercase my-4">Classic Style</h2>
                            <div class="row">
                                <div class="col-6">
                                    <h4>Windows</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="./inswing-windows.php" class="darker">Inswing</a></li>
                                        <li><a href="./outswing-windows.php" class="darker">Outswing</a></li>
                                        <li><a href="./pushout-windows.php" class="darker">Push-out</a></li>
                                        <li><a href="./hung-windows.php" class="darker">Hung</a></li>
                                        <li><a href="./fixed-windows.php" class="darker">Fixed</a></li>
                                        <li><a href="./specialty-windows.php" class="darker">Specialty</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <h4>Doors</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="./single-doors.php" class="darker">Single</a></li>
                                        <li><a href="./french-doors.php" class="darker">French</a></li>
                                        <li><a href="./lift-and-slide-doors.php" class="darker">Lift &amp; Slide</a></li>
                                        <li><a href="./screens.php" class="darker">Screens</a></li>
                                        <li><a href="./specialty-doors.php" class="darker">Specialty</a></li>
                                        <li><a href="./garage-doors.php" class="darker">Garage</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark bg-darker rounded-0" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- modal modern -->
    <section class="modal-modern">
        <div class="modal fade" id="modernStyle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-darker text-white">
                    <img class="w-100 img-style" src="img/modern.png">
                    <div class="modal-body">
                        <div class="container">
                            <h2 class="text-uppercase my-4">Modern Style</h2>
                            <div class="row">
                                <div class="col-6">
                                    <h4>Windows</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="./tilt-turn-windows.php" class="text-light">Tilt-Turn</a></li>
                                        <li><a href="./wood-tilt-turn-windows.php" class="text-light">Wood Tilt-Turn</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <h4>Doors</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="./contemporary-doors.php" class="text-light">Contemporary</a></li>
                                        <li><a href="./tilt-and-turn-doors.php" class="text-light">Tilt-Turn</a></li>
                                        <li><a href="./steel-doors.php" class="text-light">Steel</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
<!-- footer  -->
    <footer class="py-5 bg-darker text-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="d-none d-md-block mt-md-2" src="./img/logo-solii-full.svg" style="width:120px">
                    <ul class="list-unstyled mt-4">
                        <li class="text-white">Robert Hardy, Sales</li>
                        <li><a class="text-white" href="tel:16137397696">+1.613.739.7696</a></li>
                        <li><a class="text-white" href="mailto:robert@solii.ca">robert@solii.ca</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md d-none d-md-block">
                    <h6 class="text-uppercase text-muted mb-3">Windows</h6>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-white" href="#!" data-toggle="modal" data-target="#classicStyle">Classic</a></li>
                        <li><a class="text-white" href="#!" data-toggle="modal" data-target="#modernStyle">Modern</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md d-none d-md-block">
                    <h6 class="text-uppercase text-muted mb-3">Doors</h6>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-white" href="#!" data-toggle="modal" data-target="#classicStyle">Classic</a></li>
                        <li><a class="text-white" href="#!" data-toggle="modal" data-target="#modernStyle">Modern</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md d-none d-md-block">
                    <h6 class="text-uppercase text-muted mb-3">Company</h6>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-white" href="./about.php">About</a></li>
                        <li><a class="text-white" href="#!">Blog (Coming Soon)</a></li>
                        <li><a class="text-white" href="./contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-12 d-flex justify-content-start flex-wrap">
                    <img class="certification-logo" src="img/certifications/logo-energy-star.svg">
                    <img class="certification-logo" src="img/certifications/logo-aama.svg">
                    <img class="certification-logo" src="img/certifications/logo-fsc.svg">
                    <img class="certification-logo" src="img/certifications/logo-nfrc.svg">
                    <img class="certification-logo" src="img/certifications/logo-sa.svg">
                    <img class="certification-logo" src="img/certifications/logo-wdma.svg">
                </div>
                <div class="col-12">
                    <hr style="border-bottom: 1px solid #333">
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <small class="d-block mt-3 text-muted order-md-3">
                            <ul class="list-inline">
                                <li class="list-inline-item ml-2">
                                    <a href="https://www.facebook.com/soliiwindows/" target="_blank">
                                        <i class="fab fa-facebook fa-2x"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item ml-3">
                                    <a href="https://www.instagram.com/soliiwindows/" target="_blank">
                                        <i class="fab fa-instagram fa-2x"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item ml-3">
                                    <a href="https://www.linkedin.com/company/soliiwindows/" target="_blank">
                                        <i class="fab fa-linkedin fa-2x"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item ml-3">
                                    <a href="https://www.houzz.com/pro/info776582/__public" target="_blank">
                                        <i class="fab fa-houzz fa-2x"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item ml-3">
                                    <a href="mailto:robert@solii.ca" target="_blank">
                                        <i class="fal fa-envelope fa-2x"></i>
                                    </a>
                                </li>
                            </ul>
                        </small>
                        <small class="d-block mt-3 text-muted order-md-2"><a href="./privacy-policy.php">Privacy Policy</a></small>
                        <small class="d-block mt-3 text-muted order-md-1">&copy; Copyright 2018 Solii</small> </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/typeahead.js"></script>
    <script src="./js/handlebars.js"></script>
    <script src="./js/rellax.js"></script>
    <script src="./js/jquery.magnific-popup.min.js"></script>
    <script src="./js/scripts.js"></script>
';?>
