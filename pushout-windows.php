<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | Push-Out Windows</title>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <div class="overflow-hidden">
            <img class="product-jumbotron rellax" src="./img/gallery/pushout_1.jpg" style="object-position:50% 25%">
        </div>
        <section class="content-area">
            <div class="container p-3 p-md-5">
                <h1 class="text-uppercase mb-md-5">Push-Out Casement</h1>
                <div class="row">
                    <div class="col-12 col-md-4 text-center product-img">
                        <img class="img-fluid p-4" src="./img/windows/pushout.png">
                        <div class="product-images">
                            <a href="./img/windows/pushout.png" class="darker">View all Photos</a>
                            <a href="./img/gallery/pushout_1.jpg" class="d-none">Open popup 2</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 product-info">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Downloads</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-4 pb-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h2 class="py-3">Customize your Push-Out Casement Window</h2>
                                <p>Each Solii window is custom crafted. Harness your creativity and develop your own design, or get our experts to help bring your vision to life. Our classic style windows are made of solid wood only; no laminates, finger joints, or veneers are used.</p>
                                <p>The traditional push-out window was inspired by the architecture of the early 16th century. One of the most recognizable elements of this architecture is the use of leaded glass panels within heavy mullioned windows. There is elegance in the contrast of dark solid wood against a historical cachet. Designed with the highest standards of quality, and executed with the highest standards of construction, this premium custom window adds an enchanting element to any home.</p>
                                <p>The push-out casement window is operated by using a solid brass cam lock and friction stay. The operable sash is assembled with mortise and tenon joinery and is supported by solid brass screw-in butt hinges.</p>
                                <p>As always with Solii custom products, the options are endless. Decorative Colonial, Diamond or Tudor-style geometric muntin patterns combine a leaded glass panel within an insulated glass unit (triple glazed).</p>
                                <p>Material and finish options may vary.</p>
                                <hr class="mt-5">
                                <h3 class="py-3">Solid Wood Construction</h3>
                                <ul>
                                    <li>Western Red Cedar, White Oak, Douglas Fir, African and Honduran Mahogany</li>
                                    <li>Solid wood only, no laminates, finger joints or veneers are used</li>
                                </ul>
                                <h3 class="py-3">Exterior Casing or Brickmold</h3>
                                <ul>
                                    <li>Available upon request in standard or custom sizes and profiles</li>
                                    <li>Interior casing is also available</li>
                                </ul>
                                <h3 class="py-3">Glass</h3>
                                <ul>
                                    <li>Factory glazed with 3/4” double insulated glass units</li>
                                    <li>Low-E, Argon filled, tempered, laminated and historical glass available</li>
                                    <li>Other options available upon request</li>
                                </ul>
                                <h3 class="py-3">1 3/8″ X 5 1/2″ Jamb, Standard Size</h3>
                                <ul>
                                    <li>Solid wood frame</li>
                                    <li>10 degree sloped sill</li>
                                    <li>Incredible strength, stability and durability</li>
                                    <li>Custom jamb depth available upon request</li>
                                </ul>
                                <h3 class="py-3">1 3/4″ Sash</h3>
                                <ul>
                                    <li>Mortise and tenon construction</li>
                                    <li>Unique design and double weather-stripping</li>
                                    <li>High performance and classic lines</li>
                                </ul>
                                <h3 class="py-3">Muntins</h3>
                                <ul>
                                    <li>7/8″ Simulated Divided Lite (SDL) and 1 1/4″ True Divided Lite (TDL) options</li>
                                    <li>Choice of colors for perimeter and internal spacer bars</li>
                                </ul>
                                <h3 class="py-3">Hardware</h3>
                                <ul>
                                    <li>Unique rustic solid brass ball bearing hinges, friction stay and sash lock</li>
                                </ul>
                                <h3 class="py-3">Screen</h3>
                                <ul>
                                    <li>In-swing wood frame screen with fiberglass, stainless steel or bronze mesh</li>
                                    <li>Roll down screen available upon request</li>
                                </ul>
                                <h3 class="py-3">Performance</h3>
                                <p>Every Solii product is tested for air and water infiltration under extreme weather simulations, as well as structural and energy performance, at an independent certified testing laboratory.</p>
                                <p>Each Solii window is custom crafted. Harness your creativity and develop your own design, or contact us - our experts can help bring your vision to life.</p>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h2 class="py-3">Available Downloads</h2>
                                <p>Documents and product brochure are available upon request. Please hit the "Request Product Brochure" button below to contact our sales team for more information.</p>
                                <hr class="mt-5">
                                <ul class="list-unstyled download-links">
                                    <li><a href="mailto:robert.hardy@solii.ca">Request Product Brochure <i class="far fa-arrow-to-bottom"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="get-a-quote py-3">
            <div class="container justify-content-center">
                <h5 class="d-none d-md-block m-0 mr-auto">Contact our sales team to get more information.</h5>
                <a class="btn btn-dark bg-darker" href="mailto:robert@solii.ca">Get a quote</a>
            </div>
        </section>
    </main>

    <?php include './php/footer.php';?>

    <!-- custom page javascript -->
    <script>
        $(document).ready(function() {
            $("#showWindows").toggleClass("active");
            $("nav.sub-menu__1").toggleClass("d-flex");
            $("nav.sub-menu__2").removeClass("d-flex");
            $(".sub-menu__1 a:nth-child(3)").addClass("active");
        });

    </script>
</body>

</html>
