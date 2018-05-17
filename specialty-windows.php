<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | Specialty Windows</title>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <div class="overflow-hidden">
            <img class="product-jumbotron rellax" src="./img/gallery/specialty_1.png" style="object-position:50% 86%">
        </div>
        <section class="content-area">
            <div class="container p-3 p-md-5">
                <h1 class="text-uppercase mb-md-5">Specialty Windows</h1>
                <div class="row">
                    <div class="col-12 col-md-4 text-center product-img">
                        <img class="img-fluid p-4" src="./img/windows/specialty.jpg">
                        <div class="product-images">
                            <a href="./img/windows/specialty.jpg" class="d-none">View all Photos</a>
                            <a href="./img/gallery/specialty_1.png" class="d-none">Open popup 2</a>
                            <a href="./img/gallery/specialty_2.png" class="d-none">Open popup 2</a>
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
                                <h2 class="py-3">Customize Your Specialty Window</h2>
                                <p>Our classic style windows are made of solid wood only; no laminates, finger joints, or veneers are used.</p>
                                <p>There is no better opportunity to let your creative dreams come to life than with a custom designed architectural window. Design any geometric shape or original profile to match the architecture of your home - if you can dream it, we can build it. No limitations.</p>
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
                                <h3 class="py-3">1 3/4″ or 2 1/4″ Sash</h3>
                                <ul>
                                    <li>Mortise and tenon construction</li>
                                    <li>Various weather-stripping system available</li>
                                    <li>High performance and classic lines</li>
                                </ul>

                                <h3 class="py-3">Muntins</h3>
                                <ul>
                                    <li>7/8″ Simulated Divided Lite (SDL) and 1 1/4″ True Divided Lite (TDL) options</li>
                                    <li>Choice of colors for perimeter and internal spacer bars</li>
                                </ul>
                                <h3 class="py-3">Hardware</h3>
                                <ul>
                                    <li>Varies, depending on the chosen window system</li>
                                </ul>
                                <h3 class="py-3">Screen (if operating)</h3>
                                <ul>
                                    <li>Aluminium frame screen with fibreglass mesh</li>
                                    <li>Wood frame screen with fibreglass, stainless steel or bronze mesh available upon request</li>
                                    <li>Roll-up screens available upon request on special orders</li>
                                </ul>
                                <h3 class="py-3">Performance</h3>
                                <p>Every Solii product is tested for air and water infiltration under extreme weather simulations, as well as structural and energy performance, at an independent certified testing laboratory. </p>
                                <p>Ratings vary depending on the chosen window system.</p>
                                <p>Each Solii window is custom crafted. Harness your creativity and develop your own design, or contact us - our experts can help bring your vision to life.</p>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h2 class="py-3">Available Downloads</h2>
                                <p>Documents and product brochure are available upon request. </p>
                                <hr class="mt-5">
                                <ul class="list-unstyled download-links">
                                    <li><a href="https://gemstonecorporation.box.com/s/6qeumjhcgcsgi0gott8juhy1ghaahugt" target="_blank">Installation Instructions <i class="far fa-arrow-to-bottom"></i></a></li>
                                    <li><a href="https://gemstonecorporation.box.com/s/8y2htew87wyld0sc652wafdyxetl9qm7" target="_blank">Warranty <i class="far fa-arrow-to-bottom"></i></a></li>
                                    <li><a href="mailto:robert@solii.ca" target="_blank">Request More Information <i class="far fa-envelope"></i></a></li>
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
            $(".sub-menu__1 a:nth-child(6)").addClass("active");
        });

    </script>
</body>

</html>
