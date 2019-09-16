<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | Contact</title>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <div class="overflow-hidden">
            <img class="product-jumbotron rellax" src="./img/about.jpg">
        </div>
        <section class="content-area pb-5">
            <div class="container p-md-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h1 class="py-3">Get in touch</h1>
                        <p>Custom project to discuss? Give us a call or visit our showroom.</p>
                        <h2 class="h5 mt-4"><i class="fal fa-map-marker"></i> Our location</h2>
                        <p><a href="https://www.google.com/maps/place/252+Argyle+Ave,+Ottawa,+ON+K2P+1B9/@45.410664,-75.691424,15z/data=!4m5!3m4!1s0x4cce05b045093563:0x88f72b5f35b2f8bb!8m2!3d45.4106639!4d-75.6914237?hl=en-CA" class="text-dark" target="_blank">252 Argyle Ave<br>Ottawa, ON K2P 1B9</a></p>
                        <h2 class="h5 mt-5"><i class="fal fa-file-alt"></i> Request a Quote</h2>
                        <ul class="list-unstyled py-2">
                            <li><a class="text-dark" href="tel:16137397696">+1.613.739.7696</a></li>
                            <li><a class="text-dark" href="mailto:info@solii.ca">info@solii.ca</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card rounded-0 mb-3 high-card">
                            <div class="card-body">
                                <h2 class="h3"><i class="fal fa-calendar-alt"></i> Book an appointment.</h2>
                                <form class="mt-3" method="POST" action="https://formspree.io/info@solii.ca">
                                    <div class="form-group">
                                        <label for="name">Your name</label>
                                        <input class="form-control rounded-0" type="text" name="name" placeholder="First name and last name">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Your phone number</label>
                                        <input class="form-control rounded-0" type="tel" name="name" placeholder="(123) 123-4567">
                                    </div>
                                    <div class="form-group">
                                        <label for="company">Your company (if applicable)</label>
                                        <input class="form-control rounded-0" type="text" name="company" placeholder="Optional">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your email</label>
                                        <input class="form-control rounded-0" type="email" name="email" placeholder="ex. your.name@email.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Your message</label>
                                        <textarea class="form-control rounded-0" rows="3" name="message" placeholder="How can we help you?"></textarea>
                                    </div>
                                    <button class="btn btn-dark btn-block rounded-0 bg-darker" type="submit"><i class="far fa-check"></i> Submit</button>
                                    <input type="hidden" name="_subject" value="Solii: Quote Request" />
                                    <input type="text" name="_gotcha" style="display:none" />
                                    <input type="hidden" name="_next" value="http://solii.ca/thank-you.php">
                                    <input type="hidden" name="_cc" value="chris@loogart.com" />
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php include './php/footer.php';?>

</body>

</html>
