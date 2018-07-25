<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii Windows and Doors</title>


	<meta name="keywords" content="windows, doors, garage doors, Ottawa">
        <meta itemprop="description" content="Ottawa based company providing superior Canadian-made, luxury windows and doors">



</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <!-- jumbotron area-->
        <section class="intro">
            <div class="p-3 p-md-5 text-center bg-light overflow-hidden position-relative d-flex">
                <div class="p-md-5 mx-auto my-5 jumbotron-specs">
                    <h1 class="text-uppercase mb-3 darker font-weight-normal">Artisanal</h1>
                    <h2 class="h3 text-uppercase mb-4 darker">Windows &amp; Doors</h2>
                    <a class="btn btn-dark bg-darker border-light btn-shadow" href="mailto:info@solii.ca">Get a custom quote</a>
                </div>
                <img class="img-jumbotron rellax" src="./img/jumbotron.jpg">
            </div>
        </section>

        <!-- Select style section -->
        <section class="classic-vs-modern">
            <div class="d-md-flex flex-md-equal p-3">
                <div class="pr-md-2 mb-3 mb-md-0">
                    <img class="w-100 img-style" src="img/classic-2.jpg">
                    <div class="bg-beige text-left darker">
                        <div class="p-5">
                            <h2 class="display-5 text-uppercase">Classic<br> Traditional</h2>
                            <p class="lead">A timeless sense of character. Rich finishes that are essential to a classic home.</p>
                            <a class="btn btn-dark bg-darker btn-shadow" style="border-radius: 0" href="#!" data-toggle="modal" data-target="#classicStyle">Classic Style</a>
                        </div>
                    </div>
                </div>
                <div class="pl-md-2">
                    <img class="w-100 img-style" src="img/modern.jpg">
                    <div class="bg-darker text-left text-light">
                        <div class="p-5">
                            <h2 class="display-5 text-uppercase">Sleek<br> Modern</h2>
                            <p class="lead">
                                Seamless design. Precise elements that yield a contemporary expression.
                            </p>
                            <a class="btn btn-outline-light" href="#!" data-toggle="modal" data-target="#modernStyle">Modern Style</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Made in Canada Section-->
        <section class="made-in-canada">
            <div class="px-3">
                <div class="py-5 d-flex justify-content-center text-center video-section">
                    <div class="p-md-5 w-75 darker">
                        <h2 class="display-5 text-uppercase">Made in Canada</h2>
                        <p class="my-md-4">Supporting Canadian talent is something we are proud of, and as each product bears the hallmarks of time-honoured Canadian craftsmanship - you can be proud too. </p>
                        <div class="embed-responsive embed-responsive-16by9 video-shadow text-light d-flex align-items-center justify-content-center" style="background:#000">
<!--                            <h4><i class="fal fa-video-slash"></i> Video Coming Soon.</h4>-->
                             <iframe src="https://www.youtube.com/embed/A6ivaeFl85I?ecver=2" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- featurette 1 -->
        <section class="featurette-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 order-md-2 px-0">
                        <img class="" style="width:100%;height:440px;object-fit: cover" src="./img/featurette-1.png">
                    </div>
                    <div class="col-md-6 d-flex flex-column p-5 d-flex flex-column justify-content-center darker">
                        <h2 class="text-uppercase">A First Impression Like No Other</h2>
                        <p>Make the right first impression. As the exclusive Ontario distributor for award-winning Belisle Architectural and Dionne Architectural, Solii Artisanal Windows &amp; Doors is proud to offer superior Canadian-made, luxury windows and doors for your next new build or renovation project.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- featurette 2 -->
        <section class="featurette-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 px-0">
                        <img class="w-100" style="height:440px;object-fit: cover" src="./img/featurette-2.jpg">
                    </div>
                    <div class="col-md-6 d-flex flex-column p-5 d-flex flex-column justify-content-center">
                        <h2 class="text-uppercase darker">Architects Rejoice</h2>
                        <p>We understand that client satisfaction is paramount. Renowned builders, architects, and designers in the nation’s capital use our product offerings to enhance their buildings. Discover how working with the best in windows and doors can elevate your projects to give you that special signature. Enhance your reputation from the outside in.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- final CTA -->
        <section class="pre-footer">
            <div class="container-fluid p-5 text-light d-flex justify-content-center" style="background-color:#181918">
                <div class="text-center p-md-5">
                    <h3 class="text-uppercase mb-3">Designed by You.</h3>
                    <p class="mb-4">Crafted by Solii</p>
                    <a class="btn btn-outline-light btn-shadow" href="mailto:info@solii.ca">Get a custom quote</a>
                </div>
            </div>
        </section>

    </main>

    <?php include './php/footer.php';?>
</body>

</html>
