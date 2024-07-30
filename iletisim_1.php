<?php include 'code.php' ?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GM Turizm Dergisi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="<?=$dataHOTEL->website?>/assets/img/1/gm-kategori-logo.jpg" rel="icon">
    <link href="<?=$dataHOTEL->website?>/assets/img/1/gm-kategori-logo.jpg" rel="apple-touch-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link href="<?=$dataHOTEL->website?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$dataHOTEL->website?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?=$dataHOTEL->website?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?=$dataHOTEL->website?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?=$dataHOTEL->website?>/assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="<?=$dataHOTEL->website?>/assets/css/variables.css" rel="stylesheet">
    <link href="<?=$dataHOTEL->website?>/assets/css/main.css" rel="stylesheet">


    <?php include 'inc/header.php' ?>



    <main id="main">
        <section id="contact" class="contact mb-5">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-12">
                        <h3 class="aside-title">İLETİŞİM <img src="<?=$dataHOTEL->website?>/assets/img/1/gm-kategori-logo.jpg" alt=""></h3>
                    </div><?php print_r($dataPAGES) ?>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4">
                        <div class="info-item">

                            <h3>Adres</h3>
                            <address>Çağlayan Mah. 2039/1 Sokak Bal Plaza Kat: 5 No: 11 Muratpaşa / Antalya</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info-item info-item-borders">

                            <h3>Telefon</h3>
                            <p><a href="tel:+902423162297">+90 242 316 22 97</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info-item">

                            <h3>Email</h3>
                            <p><a href="mail:info@gm-center.com">info@gm-center.com</a>
                            </p>
                            <p><a href="mail:info@gm-center.com">info@gm-center.com</a>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="form mt-5">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ad Soyad"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder=" Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Mesaj"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <!-- <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div> -->
                        </div>
                        <div class="text-center"><button type="submit">Mesaj Gönder</button></div>
                    </form>
                </div>


                <div class="col-12 mt-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12769.415600470105!2d30.775126000000004!3d36.857947!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c39a93584a39f5%3A0xa18e5154a1886038!2zR01UIEZ1YXJjxLFsxLFrIC8gR00gQ0VOVEVS!5e0!3m2!1str!2sus!4v1721177663062!5m2!1str!2sus"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

    </main><!-- End #main -->


    <?php include 'inc/footer.php' ?>



    <script src="<?=$dataHOTEL->website?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/assets/vendor/aos/aos.js"></script>


    <script src="<?=$dataHOTEL->website?>/assets/js/main.js"></script>
    </body>

</html>