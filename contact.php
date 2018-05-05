<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | Contact</title>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <section class="content-area pb-5">
            <div class="container p-3">
                <div class="row d-flex justify-content-md-center">
                   
                    <div class="col-12 col-md-8">
                        <h1 class="py-3">Get in touch.</h1>
                        <p>Each Solii window is custom craftfted. Harness your creatitivity and develop your own design, or get our experts to help bring your vision to life. Our classic style windows are made of solid wood only; no laminates, finger joints, or veneers are used.</p>
                        <p>Material and finish options vary depending on window type.</p>

                        <form method="POST" action="https://formspree.io/chris@loogart.com">
                            <div class="form-group">
                                <label for="name">Your name</label>
                                <input class="form-control rounded-0" type="text" name="name" placeholder="First and Last names">
                                <input type="hidden" name="_subject" value="Solii: Need information" />
                            </div>
                            <div class="form-group">
                                <label for="email">Votre email</label>
                                <input class="form-control rounded-0" type="email" name="email" placeholder="ex. hello@email.com">
                            </div>
                            <div class="form-group">
                                <label for="message">Your message</label>
                                <textarea class="form-control rounded-0" name="message" placeholder="How can we help you?"></textarea>
                            </div>
                            <button class="btn btn-dark btn-block rounded-0 bg-darker" type="submit"><i class="far fa-check"></i> Submit</button>
                            <input type="text" name="_gotcha" style="display:none" />
                            <input type="hidden" name="_next" value="http://loogart.github.io/solii">
                            <input type="hidden" name="_cc" value="chris.soueidan@gmail.com" />
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>

    <?php include './php/footer.php';?>

</body>

</html>
