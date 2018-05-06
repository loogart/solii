<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | Single, Double and Triple Hung Windows</title>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <img class="product-jumbotron" src="./img/.jpg">
        <section class="content-area">
            <div class="container p-3 p-md-5">
                <h1 class="text-uppercase mb-md-5">Single, Double and Triple Hung</h1>
                <div class="row">
                    <div class="col-12 col-md-4 text-center product-img">
                        <img class="img-fluid p-4" src="./img/windows/hung.jpg">
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
                                <h2 class="py-3">Customize your Single, Double and Triple Hung Window</h2>
                                <p>Each Solii window is custom crafted. Harness your creativity and develop your own design, or get our experts to help bring your vision to life. Our classic style windows are made of solid wood only; no laminates, finger joints, or veneers are used.</p>
                                <p>A true work of art and a testament to quality craftsmanship, this exceptional window is made of solid wood and hand finished - a stunning combination of beauty and strength. Like all of our custom windows, the choice is yours: one, two, or three operating sashes with a concealed counter balance system or antique brass opening mechanism with pulleys, weights, and chains. No matter your style, the result is a window that is durable, reliable, and timeless.
                                </p>
                                <p>Material and finish options may vary.</p>
                                <hr class="mt-5">

                               
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
            $(".sub-menu__1 a:nth-child(4)").addClass("active");
        });

    </script>
</body>

</html>
