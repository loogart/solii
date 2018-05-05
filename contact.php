<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | Contact</title>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <iframe class="mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.9343267190106!2d-75.69361238444436!3d45.41066387910032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce05b045093563%3A0x88f72b5f35b2f8bb!2s252+Argyle+Ave%2C+Ottawa%2C+ON+K2P+1B9!5e0!3m2!1sen!2sca!4v1525553778914" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        <section class="content-area pb-5">
            <div class="container p-3">
                <div class="row d-flex justify-content-md-center">
                    <div class="col-12 col-md-8">

                        <h1 class="py-3">Request a Quote</h1>
                        <p>Custom project to discuss? Give us a call or visit our showroom.</p>
                        <ul class="list-unstyled py-2">
                            <li>Robert Hardy, Sales Manager</li>
                            <li><a class="text-dark" href="tel:16137397696">+1.613.739.7696</a></li>
                            <li><a class="text-dark" href="mailto:robert@solii.ca">robert@solii.ca</a></li>
                        </ul>


                        <div class="card rounded-0 my-3">
                            <div class="card-body">
                                <h2 class="h3">Book an appointment.</h2>
                                <form class="mt-3" method="POST" action="https://formspree.io/chris@loogart.com">
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
                                    <input type="hidden" name="_next" value="http://loog.ca/solii">
                                    <input type="hidden" name="_cc" value="chris.soueidan@gmail.com" />
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
