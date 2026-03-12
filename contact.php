<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>Achalare Realtors</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Unbounded:wght@200..900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="css/all.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">
</head>

<body>

<?php include 'includes/preloader.php';?>

    <!-- Header Start -->
   <?php include 'includes/header.php';?>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <div class="hero2 hero-image" style="background: url('images/contact-banner.jpg') no-repeat center center/cover;padding-top:150px; padding-bottom:150px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Contact us</h1>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->


    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get in Touch We're Here for You</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Fields marked with an * are required</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info Box Start -->
                        <div class="contact-info-box">
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="images/icon-phone.svg" alt="Phone Icon" style="width:40px; height:40px;">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Phone</h3>
                                    <p>
                                        Head Office: 020 27292736 | 020 27292737 <br>
                                        Sales: 99224 95551 | 88888 10253
                                    </p>
                                </div>
                            </div>

                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="images/Email.svg" alt="Email Icon" style="width:40px; height:40px;">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email</h3>
                                    <p>
                                        Sales: sales@achalare.com<br>
                                        General Enquiries: admin@achalareassociates.com<br>
                                        Careers: hr@achalare.com
                                    </p>
                                </div>
                            </div>

                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="images/Map.svg" alt="Map Icon" style="width:40px; height:40px;">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Head Office</h3>
                                    <p>
                                        ACHALARE House, Fourth Floor, Survey No.1, Revenue Village, Baner,<br>
                                        Pune, Maharashtra – 411045
                                    </p>
                                </div>
                            </div>

                            <!-- Page Contact Item End -->
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>

                <div class="col-lg-6">
                    <!-- Page Contact Form Start -->
                    <div class="contact-us-form">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Have any questions</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Fill out the form to connect with us today.
                            </p>
                        </div>

                        <div class="contact-form">
                            <!-- Contact Form Start -->
                            <form method="post" action="js/sendenquiry.php" onSubmit="javascript:return validate();">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-pos contect_form1">
                                            <div class="form-group i-name">

                                                <input type="text" class="form-control require" name="first_name"
                                                    required="required" placeholder="First Name">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-pos contect_form1">
                                            <div class="form-group i-name">

                                                <input type="text" class="form-control require" name="last_name"
                                                    required="required" placeholder="Last Name">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-e">
                                            <div class="form-group i-email contect_form1" style="margin-top: 30px;">
                                                <input type="email" class="form-control require" name="email"
                                                    required="required" placeholder="Email" data-valid="email"
                                                    data-error="Email should be valid.">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-s">
                                            <div class="form-group i-subject contect_form1" style="margin-top: 30px;">

                                                <input type="text" class="form-control require" name="Subject"
                                                    required="required" placeholder="Subject">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <div class="form-m">
                                            <div class="form-group i-message contect_form1" style="margin-top: 30px;">

                                                <textarea class="form-control require" name="message" required=""
                                                    rows="5" id="messageTen" placeholder="Message"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                    <div class="col-md-12 ">
                                        <div class="tb_es_btn_div">
                                            <div class="response"></div>
                                            <!-- Apply Button -->

                                            <div class="col-md-12">
                                                <button type="submit" class="btn-default">Apply Now</button>
                                                <div id="msgSubmit" class="h3 hidden"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form End -->
                        </div>
                    </div>
                    <!-- Page Contact Form End -->
                </div>

            </div>
        </div>
    </div>
    <!--  Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container-flude">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Start -->
                    <div class="google-map-iframe">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15129.463914163971!2d73.793223!3d18.557532!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c0790b27c7d9%3A0x103240cdd825b2bf!2sAchalare%20Realtors!5e0!3m2!1sen!2sin!4v1759224230263!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->
    <!-- Footer Start -->
  <?php include 'includes/footer.php';?>
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="js/function.js"></script>
    <script src="https://demo.awaikenthemes.com/assets/js/theme-panel.js"></script>
</body>

</html>