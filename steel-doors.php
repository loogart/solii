<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | Steel Doors</title>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <div class="overflow-hidden">
            <img class="product-jumbotron rellax" src="./img/gallery/doors/steel_1.jpg">
        </div>
        <section class="content-area">
            <div class="container p-3 p-md-5">
                <h1 class="text-uppercase mb-md-5">Steel Doors</h1>
                <div class="row">
                    <div class="col-12 col-md-4 text-center product-img">
                        <img class="img-fluid p-4" src="./img/doors/steel.jpg">
                        <div class="product-images">
                            <a href="./img/doors/steel.jpg" class="darker">View all Photos</a>
                            <a href="./img/gallery/doors/steel_1.jpg" class="d-none">Open popup 2</a>
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
                                <h2 class="py-3">Customize your Steel Door</h2>
                                <p>Each Solii door is custom crafted. Harness your creativity and develop your own design, or get our experts to help bring your vision to life.</p>
                                <p>Available in almost any colour and a variety of mouldings, steel doors provide excellent thermal insulation, all the while making a modern addition to your home. Choose refinement with a wide variety of stained glass.</p>
                                <p>Material and finish options may vary.</p>
                                <hr class="mt-5">
                                <h3 class="py-3">Advantages</h3>
                                <ul>
                                    <li>Increased comfort</li>
                                    <li>Easy maintenance</li>
                                    <li>Affordable</li>
                                    <li>Neat appearance</li>
                                </ul>
                                <h3 class="py-3">Chracteristics</h3>
                                <ul>
                                    <li>Magnetic weather-stripping</li>
                                    <li>Wide variety of glass</li>
                                    <li>Various mouldings</li>
                                </ul>
                                <h3 class="py-3">Materials</h3>
                                <ul>
                                    <li>Infinite choice of colors</li>
                                    <li>Steel with solid wood interior</li>
                                    <li>Pine, oak, maple, mahogany, wild cherry, Colombian cedar</li>
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
            $(".sub-menu__2 a:nth-child(9)").addClass("active");
        });

    </script>
</body>

</html>