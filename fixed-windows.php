<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | Fixed Windows</title>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <div class="overflow-hidden">
            <img class="product-jumbotron rellax" src="./img/gallery/fixed_1.jpg">
        </div>
        <section class="content-area">
            <div class="container p-3 p-md-5">
                <h1 class="text-uppercase mb-md-5">Panoramic Fixed Windows</h1>
                <div class="row">
                    <div class="col-12 col-md-4 text-center product-img">
                        <img class="img-fluid p-4" src="./img/windows/fixed.jpg">
                        <div class="product-images">
                            <a href="./img/windows/fixed.jpg" class="d-none">View all Photos</a>
                            <a href="./img/gallery/fixed_1.jpg" class="d-none">Open popup 2</a>
                            <a href="./img/gallery/fixed_2.jpg" class="d-none">Open popup 2</a>
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
                                <h2 class="py-3">Customize your Panoramic Fixed Window</h2>
                                <p>Each Solii window is custom crafted. Harness your creativity and develop your own design, or get our experts to help bring your vision to life. Our classic style windows are made of solid wood only; no laminates, finger joints, or veneers are used.
                                </p>
                                <p>Contemporary in style, the fixed frame panoramic window celebrates natural light, inviting your space to unfold in pure, natural beauty.</p>
                                <p> The panoramic window can be custom-made with several sections of glass retained in wooden frames - fine sightlines maximize every vista. With its luminosity, it is the natural ally of the tilt-turn, yielding efficient ventilation in any space.</p>
                                <p>Material and finish options may vary.</p>
                                <hr class="mt-5">
                                <h3 class="py-3">Performance</h3>
                                <p>Every Solii product is tested for air and water infiltration under extreme weather simulations, as well as structural and energy performance, at an independent certified testing laboratory. </p>
                                <p>Each Solii window is custom crafted. Harness your creativity and develop your own design, or contact us - our experts can help bring your vision to life.</p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h2 class="py-3">Available Downloads</h2>
                                <p>Documents and product brochure are available upon request. </p>
                                <hr class="mt-5">
                                <ul class="list-unstyled download-links">
                                    <li><a href="https://gemstonecorporation.box.com/s/6qeumjhcgcsgi0gott8juhy1ghaahugt" target="_blank">Installation Instructions <i class="far fa-arrow-to-bottom"></i></a></li>
                                    <li><a href="https://gemstonecorporation.box.com/s/8y2htew87wyld0sc652wafdyxetl9qm7" target="_blank">Warranty <i class="far fa-arrow-to-bottom"></i></a></li>
                                    <li><a href="mailto:robert@solii.ca" target="_blank">Request DWG Files <i class="far fa-envelope"></i></a></li>
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
            $(".sub-menu__1 a:nth-child(5)").addClass("active");
        });

    </script>
</body>

</html>
