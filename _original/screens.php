<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | Screens</title>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <div class="overflow-hidden">
            <img class="product-jumbotron rellax" src="./img/gallery/doors/screen_1.jpg" style="object-position:50% 80%">
        </div>
        <section class="content-area">
            <div class="container p-3 p-md-5">
                <h1 class="text-uppercase mb-md-5">Screens</h1>
                <div class="row">
                    <div class="col-12 col-md-4 text-center product-img">
                        <img class="img-fluid p-4" src="./img/doors/screen.jpg">
                        <div class="product-images">
                            <a href="./img/doors/screen.jpg" class="d-none">View all Photos</a>
                            <a href="./img/gallery/doors/screen_1.jpg" class="d-none">Open popup 2</a>
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
                                <h2 class="py-3">Customize Your Screen Door</h2>
                                <p>There’s nothing like fresh air flowing through your home, and a screen door perfectly suited to your front door offers optimal air flow and great style. Made according to custom specifications, our door frames are tailor-made to match the dimensions and style of your front door. </p>
                                <p>Material and finish options may vary.</p>
                                <hr class="mt-5">
                                <h3 class="py-3">Details</h3>
                                <p>Our screen doors allow for maximum air circulation while remaining incredibly sturdy at 1 ½” thick.</p>
                                <ul>
                                    <li>Mortise and tenon construction</li>
                                    <li>1 1/2″ door thickness</li>
                                    <li>Solid wood members, not finger-jointed</li>
                                    <li>Made in Western Red Cedar, White Oak, Douglas Fir, African and Honduran Mahogany</li>
                                    <li>Standard or custom sizes and models</li>
                                    <li>Fibreglass, stainless steel or bronze insect mesh</li>
                                    <li>Corner carvings available upon request</li>
                                </ul>
                                <p>Each Solii screen door is custom crafted. Harness your creativity and develop your own design, or contact us - our experts can help bring your vision to life.</p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h2 class="py-3">Available Downloads</h2>
                                <p>Documents and product brochure are available upon request. </p>
                                <hr class="mt-5">
                                <ul class="list-unstyled download-links">
                                    <li><a href="https://gemstonecorporation.box.com/s/34kg8iw4w0ddmmuquv72m8wnxn43evyx" target="_blank">Product Brochure <i class="far fa-arrow-to-bottom"></i></a></li>
                                    <li><a href="https://gemstonecorporation.box.com/s/0tctqnpieujpe2qaghzg0s7xx0hujj63" target="_blank">Installation Instructions <i class="far fa-arrow-to-bottom"></i></a></li>
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
            $("#showDoors").toggleClass("active");
            $("nav.sub-menu__2").toggleClass("d-flex");
            $("nav.sub-menu__1").removeClass("d-flex");
            $(".sub-menu__2 a:nth-child(4)").addClass("active");
        });

    </script>
</body>

</html>
