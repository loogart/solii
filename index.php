<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii Dev</title>
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
                    <a class="btn btn-dark bg-darker border-light btn-shadow" href="mailto:robert@solii.ca">Get a custom quote</a>
                </div>
                <img class="img-jumbotron" src="./img/jumbotron.jpg">
            </div>
        </section>

        <!-- Select style section -->
        <section class="classic-vs-modern">
            <div class="d-md-flex flex-md-equal p-3">
                <div class="pr-md-2 mb-3 mb-md-0">
                    <img class="w-100 img-style" src="img/classic.jpg">
                    <div class="bg-beige text-left darker">
                        <div class="p-5">
                            <h2 class="display-5 text-uppercase">Classic<br> Traditional</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a class="btn btn-dark bg-darker btn-shadow" style="border-radius: 0" href="#!" data-toggle="modal" data-target="#classicStyle">Classic Style</a>
                        </div>
                    </div>
                </div>
                <div class="pl-md-2">
                    <img class="w-100 img-style" src="img/modern.png">
                    <div class="bg-darker text-left text-light">
                        <div class="p-5">
                            <h2 class="display-5 text-uppercase">Sleek<br> Modern</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a class="btn btn-outline-light" href="#!" data-toggle="modal" data-target="#modernStyle">Modern Style</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Made in Canada Section-->
        <section class="made-in-canada">
            <div class="px-3 mb-3">
                <div class="py-5 d-flex justify-content-center text-center video-section">
                    <div class="p-md-5 w-75 darker">
                        <h2 class="display-5 text-uppercase">Made in Canada</h2>
                        <p class="my-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi explicabo illum ad tenetur quaerat perspiciatis quidem minus fugit, quos aperiam aut beatae possimus odit ipsam suscipit. Atque temporibus nisi harum!</p>
                        <div class="embed-responsive embed-responsive-16by9 video-shadow">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ERd9v_3KPuQ" allowfullscreen></iframe>
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
                        <h2 class="text-uppercase">The First Impression</h2>
                        <p>You have finished building your own website. You have introduced your company and presented your products and services. You have added propositions and promos to catch your target audience’s attention. You think you are doing. everything “right”, but all your promotions have failed to produce growth in your new internet business.</p>
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
                        <p>You have finished building your own website. You have introduced your company and presented your products and services. You have added propositions and promos to catch your target audience’s attention. You think you are doing. everything “right”, but all your promotions have failed to produce growth in your new internet business.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- final CTA -->
        <section class="pre-footer">
            <div class="container-fluid p-5 text-light d-flex justify-content-center" style="background-color:#181918">
                <div class="text-center p-md-5">
                    <h3 class="text-uppercase mb-3">Designed by You.</h3>
                    <p class="mb-4">Crafed by Belisle and Dionne.</p>
                    <a class="btn btn-outline-light btn-shadow" href="mailto:robert@solii.ca">Get a custom quote</a>
                </div>
            </div>
        </section>

    </main>

    <?php include './php/footer.php';?>

</body>

</html>
