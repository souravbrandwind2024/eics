<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: EICS, Education India Career Services ::</title>
  <!-- favicon icon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="images/favicon.png">
    <!-- bootstrap css -->
    <link href="css/plugins/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome css -->
    <link href="css/plugins/fontawesome.min.css" rel="stylesheet">
    <!-- <link href="font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <!-- lineicons css -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i&display=swap" rel="stylesheet"> -->
    <!-- signika-google-font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300..700&display=swap" rel="stylesheet">
    <!--slick-css-->
    <link href="css/plugins/slick.css" rel="stylesheet">
    <link href="css/plugins/slick-theme.css" rel="stylesheet">
    <!--owl-carousel-css-->
    <link href="css/plugins/owl.carousel.min.css" rel="stylesheet">
    <link href="css/plugins/owl.theme.default.min.css" rel="stylesheet">
    <!--aos-css-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- custom style css -->
    <link href="css/style.css?v=1.0" rel="stylesheet">
    <!-- responsive css -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- modernizr js -->
    <script src="js/plugins/modernizr.js"></script>
  <!--[if lt IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
          href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<!-- menu-area-start -->
<header id="menu-area" class="topsec">
    <div class="navigation-wrap start-header start-style">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="images/logo.png" loading="lazy" alt=""/>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                <a class="nav-link underline" href="/">Home</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                              <a class="nav-link underline" href="about-us.html">About</a>
                          </li>
                          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link underline" href="services.html">Services</a>
                        </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link underline dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                   aria-expanded="false"> MBBS<span><i class="fa fa-chevron-down"></i></span></a>
                                   <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="mbbs-west-bengal.html">West Bengal</a></li>
                                    <li><a class="dropdown-item" href="mbbs-bihar.html">Bihar</a></li>
                                    <li><a class="dropdown-item" href="mbbs-uttar-pradesh.html">Uttar Pradesh</a></li>
                                    <li><a class="dropdown-item" href="mbbs-andhra-pradesh.html">Andhra Pradesh</a></li>
                                    <li><a class="dropdown-item" href="mbbs-haryana.html">Haryana</a></li>
                                    <li><a class="dropdown-item" href="mbbs-karnataka.html">Karnataka</a></li>
                                    <li><a class="dropdown-item" href="mbbs-kerala.html">Kerala</a></li>
                                    <li><a class="dropdown-item" href="mbbs-deemed.html">Deemed University</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                   aria-expanded="false">Living options <span><i class="fa fa-chevron-down"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Menu 1 &nbsp;<i class="fas fa-caret-right"></i></a>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Item 1</a></li>
                                            <li><a class="dropdown-item" href="#">Item 2</a></li>
                                            <li><a class="dropdown-item" href="#">Item 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Menu 2 &nbsp;<i class="fas fa-caret-right"></i></a>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Item 1</a></li>
                                          <li><a class="dropdown-item" href="#">Item 2</a></li>
                                          <li><a class="dropdown-item" href="#">Item 3</a></li>
                                          <li><a class="dropdown-item" href="#">Item 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                              <a class="nav-link underline dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                 aria-expanded="false"> MD / MS<span><i class="fa fa-chevron-down"></i></span></a>
                                 <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="md-ms-west-bengal.html">West Bengal</a></li>
                                      <li><a class="dropdown-item" href="md-ms-bihar.html">Bihar</a></li>
                                      <li><a class="dropdown-item" href="md-ms-uttar-pradesh.html">Uttar Pradesh</a></li>
                                      <li><a class="dropdown-item" href="md-ms-karnataka.html">Karnataka</a></li>
                                      <li><a class="dropdown-item" href="md-ms-deemed.html">Deemed University</a></li>
                                  </ul>
                          </li>
                          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                              <a class="nav-link underline" href="contact-us.php">Contact Us</a>
                          </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- menu-area-end -->

<!-- contact-us-area-start -->
<section id="contact" class="section">
    <div class="container">
    <div class="inner-contact">
    <div class="about-info">
    <div class="heading-area">
    <h2>Contact Us</h2>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 col-sm-12">
    <div class="contact-inside">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.510684504998!2d87.3523292751075!3d23.51412787883222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f771b27a01931d%3A0x9f14515e7ca80433!2sEducation%20India%20Career%20Services!5e0!3m2!1sen!2sin!4v1712237023780!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
    </div>
    <div class="col-md-6 col-sm-12">
    <div class="contact-inside">
    <div class="row">
    <div class="col-md-6 col-sm-6">
    <div class="contact-info">
    <i class="fa fa-phone"></i>
    <h4> Contact Us</h4>
    </div>
    </div>
    <div class="col-md-6 col-sm-6">
    <h4> 
        <a href="tel:+918945947929">+91 89459 47929</a><br>
        <a href="tel:+918101915400">+91 81019 15400</a> </h4>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 col-sm-6">
    <div class="contact-info">
        <i class="fas fa-map-marker-alt"></i>
    <h4> Address</h4>
    </div>
    </div>
    <div class="col-md-6 col-sm-6">
    <h4>RINA'S Apartment, 2nd floor, Sector 2B, 
        Above Indian Bank, Near DDA Market,
        Bidhannagar, Durgapur
        Paschim Bardhaman - 713212</h4>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 col-sm-6">
    <div class="contact-info">
    <i class="fa fa-envelope"></i>
    <h4> E-Mail</h4>
    </div>
    </div>
    <div class="col-md-6 col-sm-6">
    <h4> <a class="contact" href="mailto:educationindiacareerservises@gmail.com">educationindiacareerservises@gmail.com</a></h4>
    </div>
    </div>
    <!-- <div class="row">
    <div class="col-md-6 col-sm-6">
    <div class="contact-info">
    <i class="fa fa-fax"></i>
    <h4> Fax</h4>
    </div>
    </div>
    <div class="col-md-6 col-sm-6">
    <h4> <a href="#">+(000) 123 456 789</a> </h4>
    <h4> <a href="#">+(000) 123 456 789</a> </h4>
    </div>
    </div> -->
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12">
    <div class="form-area">
    <h3>Get in touch</h3>
    <div class="custom-container">
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <p><?php echo $_SESSION['error']; ?></p>
            </div>
        <?php unset($_SESSION['error']); endif; ?>
        <?php if(isset($_SESSION['success'])): ?>
            <div class="alert alert-success" role="alert">
                <p><?php echo $_SESSION['success']; ?></p>
            </div>
        <?php unset($_SESSION['success']); endif; ?>
        <form role="form" method="POST" action="/submit-contact.php">
            <input type="hidden" name="redirect" value="contact-us.php">
            <div class="row">
            <div class="col-sm-6">
            <div class="form-group">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name*" required>
            </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                </div>
                </div>
        
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                    </div>
                </div>
            <div class="col-sm-6">
            <div class="form-group">
                <input type="number" class="form-control" id="mobile" name="phone" placeholder="Phone number*" required>
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
                <textarea placeholder="Type your query here ..." type="text" class="form-control-2" id="message_input" rows="7" name="message" required></textarea>
            </div>
            </div>
            <div class="col-md-12">
                <div class="button-area text-center">
                    <button type="submit" class="cstm-btn">Submit</button>
                </div>
            </div>
            </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
<!-- contact-us-area-end -->

<!-- newsletter-area-start -->
<div class="it-newsletter-area it-newsletter-height fix p-relative theme-bg">
    <div class="it-newsletter-shape-1 d-none d-lg-block">
    <img src="images/left-oval-shape-1.png" loading="lazy" alt="">
    </div>
    <div class="it-newsletter-shape-2 d-none d-lg-block">
        <img src="images/riht-oval-shape-1.png" loading="lazy" alt="">
    </div>
    <div class="it-newsletter-shape-3 d-none d-xl-block">
        <img src="images/white-start.png" loading="lazy" alt="">
    </div>
    <div class="it-newsletter-shape-4 d-none d-xl-block">
        <img src="images/circle-box.png" loading="lazy" alt="">
    </div>
    <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="it-newsletter-left">
    <h4 class="it-section-title text-white pb-20">Join Our Newsletter</h4>
    <span>Subscribe our newsletter to get our latest update &amp; news.</span>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6">
    <div class="it-newsletter-right p-relative text-end">
    <input type="text" placeholder="Enter your email:">
    <button type="button" class="cstm-btn">Subscribe</button>
    <!-- <a class="cstm-btn" href="#">Subscribe</a> -->
    </div>
    </div>
    </div>
    </div>
    </div>
<!-- newsletter-area-end -->

<!-- footer-area-start -->
<footer>
    <div class="it-footer-area it-footer-bg black-bg pt-120 pb-70">
        <div class="container">
        <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-50">
        <div class="it-footer-widget footer-col-1">
        <div class="it-footer-logo pb-25">
        <a href="/">
            <!-- <img src="images/logo.png" loading="lazy" alt=""> -->
            Education India Career Services
        </a>
        </div>
        <div class="it-footer-text pb-5">
            <p>
                At EICS, we understand that the journey to becoming a medical professional is challenging enough, so we ensure that the admission process is as smooth and stress-free as possible. We handle the complexities, allowing students to focus on their academic preparations.
            </p>
        </div>
        <div class="it-footer-social">
        <a href="https://www.facebook.com/educationindiacareerserveses" target="_blank" data-placement="top" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/education_india_career/" target="_blank" data-toggle="tooltip" title="instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/@educationindiacareerservices" target="_blank" data-toggle="tooltip" title="youtube"><i class="fab fa-youtube"></i></a>
        <a href="https://web.whatsapp.com/" target="_blank" data-toggle="tooltip" title="whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
        <div class="it-footer-widget footer-col-2">
        <h4 class="it-footer-title">our services:</h4>
        <div class="it-footer-list">
            <ul>
                <li><a href="services-details-1.html"><i class="fas fa-angle-right"></i>Simplify the Admission Process</a></li>
                <li><a href="services-details-2.html"><i class="fas fa-angle-right"></i>Access to Wide Network of Private Colleges</a></li>
                <li><a href="services-details-3.html"><i class="fas fa-angle-right"></i>Provide Personalized Guidance</a></li>
                <li><a href="services-details-4.html"><i class="fas fa-angle-right"></i>Facilitate Online Career Consultations</a></li>
                <li><a href="services-details-5.html"><i class="fas fa-angle-right"></i>Navigate Students Through the Online Admission Process</a></li>
                <li><a href="services-details-6.html"><i class="fas fa-angle-right"></i>Bring Years of Experience to the Table</a></li>
            </ul>
        </div>
        </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-50">
        <div class="it-footer-widget footer-col-3">
        <h4 class="it-footer-title">quick links:</h4>
        <div class="it-footer-list">
        <ul>
        <li><a href="about-us.html"><i class="fas fa-angle-right"></i>About us</a></li>
        <li><a href="services.html"><i class="fas fa-angle-right"></i>services</a></li>
        <li><a href="mbbs.html"><i class="fas fa-angle-right"></i>MBBS</a></li>
        <li><a href="md-ms.html"><i class="fas fa-angle-right"></i>MD / MS</a></li>
        <li><a href="gallery.html"><i class="fas fa-angle-right"></i>Gallery</a></li>
        <li><a href="blog.html"><i class="fas fa-angle-right"></i>Blog</a></li>
        <li><a href="contact-us.php"><i class="fas fa-angle-right"></i>Contact Us</a></li>
        </ul>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
        <div class="it-footer-widget footer-col-4">
        <h4 class="it-footer-title">Gallery</h4>
        <div class="it-footer-gallery-box">
        <div class="row gx-5">
        <div class="col-md-4 col-4">
        <div class="it-footer-thumb mb-10">
            <a href="gallery.html">
                <img src="images/thumb-1.png" loading="lazy" alt="">
            </a>
        </div>
        </div>
        <div class="col-md-4 col-4">
        <div class="it-footer-thumb mb-10">
            <a href="gallery.html">
                <img src="images/thumb-2.png" loading="lazy" alt="">
            </a>
        </div>
        </div>
        <div class="col-md-4 col-4 mb-10">
        <div class="it-footer-thumb">
            <a href="gallery.html">
                <img src="images/thumb-3.png" loading="lazy" alt="">
            </a>
        </div>
        </div>
        <div class="col-md-4 col-4">
        <div class="it-footer-thumb">
            <a href="gallery.html">
                <img src="images/thumb-4.png" loading="lazy" alt="">
            </a>
        </div>
        </div>
        <div class="col-md-4 col-4">
        <div class="it-footer-thumb">
            <a href="gallery.html">
                <img src="images/thumb-5.png" loading="lazy" alt="">
            </a>
        </div>
        </div>
        <div class="col-md-4 col-4">
        <div class="it-footer-thumb">
            <a href="gallery.html">
                <img src="images/thumb-6.png" loading="lazy" alt="">
            </a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="footer-bottom">
            <div class="col-md-12">
            <div class="copy-right">
                <p> Copyright © <span class="year"></span> EICS / All Rights Reserved / Designed and Developed by <a href="https://brandwind.in/" target="_blank">brandwind.in</a></p>
            </div>
            </div>
            </div>
        </div>
        </div>
        </div>
</footer>
<!-- footer-area-end -->

<!------ scroll-to-top-area-start ------->
<section id="scroll-top">
    <div id="stop" class="scrollTop">
        <span><a href="#"><i class="fas fa-angle-double-up"></i></a></span>
    </div>
</section>
<!------ scroll-to-top-area-end ------->


<script src="js/plugins/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="js/plugins/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/plugins/bootstrap.min.js"></script>
<!--owl-carousel-js-->
<script src="js/plugins/owl.carousel.min.js"></script>
<!--slick-js-->
<script src="js/plugins/slick.min.js"></script>
<!--aos-js-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- main js -->
<script src="js/main.js"></script>

<script>
AOS.init();
</script>
</body>
</html>
