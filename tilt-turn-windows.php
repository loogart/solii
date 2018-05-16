<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | Aluminum Tilt-Turn Windows</title>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <div class="overflow-hidden">
            <img class="product-jumbotron rellax" src="./img/gallery/tilt-turn_1.png">
        </div>
        <section class="content-area">
            <div class="container p-3 p-md-5">
                <h1 class="text-uppercase mb-md-5">Insulated Aluminum Tilt-Turn</h1>
                <div class="row">
                    <div class="col-12 col-md-4 text-center product-img">
                        <img class="img-fluid p-4" src="./img/windows/tilt-turn.jpg">
                        <div class="product-images">
                            <a href="./img/windows/tilt-turn.jpg" class="d-none">View all Photos</a>
                            <a href="./img/gallery/tilt-turn_1.png" class="d-none">Open popup 2</a>
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
                                <h2 class="py-3">Customize your Insulated Aluminum Tilt-Turn Window</h2>
                                <p>Each Solii window is custom crafted. Harness your creativity and develop your own design, or get our experts to help bring your vision to life.</p>
                                <p>Each high-performance aluminum tilt-turn can be customized for sizing, glazing, finishes, and colour. Each and every Dionne product is Energy Star certified so you can stay cool and comfortable in the summer, and warm and cozy in the winter. Whether your project is architectural, residential, or commercial, our product will adapt to your environment to create a lighter, more open space. Create unobstructed views and enjoy your surroundings.</p>
                                <p>Material and finish options may vary.</p>
                                <hr class="mt-5">

                                <h3 class="py-3">Size</h3>
                                <ul>
                                    <li>Large glass surfaces available (up to approx. 72 sqft)</li>
                                </ul>
                                <h3 class="py-3">Material</h3>
                                <ul>
                                    <li>Thermally-broken aluminum (Paint, Anodized, Durana, or Duracron Coating)</li>
                                </ul>
                                <h3 class="py-3">Hardware</h3>
                                <ul>
                                    <li>An array of high-end German hardware from Ferco</li>
                                </ul>
                                <h3 class="py-3">Glass</h3>
                                <ul>
                                    <li>Low-E, Argon filled, tempered, or laminated</li>
                                    <li>Factory glazed with double or triple insulated glass</li>
                                </ul>
                                <h3 class="py-3">Screens</h3>
                                <ul>
                                    <li>Fixed or sliding screens</li>
                                </ul>
                                <h3 class="py-3">Performance</h3>
                                <p>Every Solii product is tested for air and water infiltration under extreme weather simulations, as well as structural and energy performance, at an independent certified testing laboratory. </p>
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
            $(".sub-menu__1 a:nth-child(7)").addClass("active");
        });

    </script>
</body>

</html>
