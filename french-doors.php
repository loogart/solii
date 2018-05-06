<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | French Doors</title>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <img class="product-jumbotron" src="./img/.jpg">
        <section class="content-area">
            <div class="container p-3 p-md-5">
                <h1 class="text-uppercase mb-md-5">French Doors</h1>
                <div class="row">
                    <div class="col-12 col-md-4 text-center product-img">
                        <img class="img-fluid p-4" src="./img/doors/french.jpg">
                        <div class="product-images">
                            <a href="./img/classic.jpg" class="darker">View all Photos</a>
                            <a href="./img/featurette-1.png" class="d-none">Open popup 2</a>
                            <a href="./img/featurette-2.jpg" class="d-none">Open popup 3</a>
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
                                <h2 class="py-3">Customize your French Doors</h2>
                                <p>Each Solii door is custom crafted. Harness your creativity and develop your own design, or get our experts to help bring your vision to life. </p>
                                <p>Made of luxurious solid wood, the French door with two leaves offers incomparable elegance and timeless appeal. Full-size glazing yields exceptional brightness and adds a sense of prestige to any space. A celebration of time-honoured craftsmanship merged with state of the art technology, this door brightens interiors like nothing else.</p>
                                <p>Material and finish options may vary.</p>
                                <hr class="mt-5">

                                <h2 class="py-3">Wood</h2>
                                <p>Clear Pine, Western Red Cedar, White Oak, Red Oak, Douglas Fir, Alder, or Honduran Mahogany</p>

                                <h2 class="py-3">Glass</h2>
                                <ul>
                                    <li>Low-E, Argon filled, tempered, laminated, and historical glass available</li>
                                    <li>Factory glazed with single lite or double insulated glass available in standard and custom sizes</li>
                                </ul>

                                <h2 class="py-3">Casings &amp; Brickmold</h2>
                                <p>Interior and exterior available upon request in standard or custom sizes and profiles.</p>

                                <h2 class="py-3">Jambs</h2>
                                <ul>
                                    <li>Standard sizes</li>
                                    <li>Incredible strength, stability, and durability </li>
                                    <li>ustom jamb depth available upon request</li>
                                </ul>

                                <h2 class="py-3">Shashes</h2>
                                <ul>
                                    <li>Mortise and tenon construction</li>
                                    <li>Fully weather-stripped</li>
                                    <li>High performance and classic lines</li>
                                </ul>

                                <h2 class="py-3">Muntins</h2>
                                <ul>
                                    <li>7/8ʺ Simulated Divided Lite (SDL) and 1 1⁄4” True Divided Lite (TDL) options</li>
                                    <li>Choice of colors for perimeter and internal spacer bars</li>
                                </ul>

                                <h2 class="py-3">Hardware</h2>
                                <p>Several finishes and options available, including brass, silver, and dark brown</p>

                                <h2 class="py-3">Screen</h2>
                                <ul>
                                    <li>Wood frame screens with fiberglass, stainless steel, or bronze mesh </li>
                                    <li>Coppertone, black, or white aluminium frames with fiberglass mesh </li>
                                    <li>Roll-up screens available upon request on special orders</li>
                                </ul>
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
            $("#showDoors").toggleClass("active");
            $("nav.sub-menu__2").toggleClass("d-flex");
            $("nav.sub-menu__1").removeClass("d-flex");
            $(".sub-menu__2 a:nth-child(2)").addClass("active");
        });
    </script>
</body>

</html>
