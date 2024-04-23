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
                              <a class="nav-link underline" href="about-us.php">About</a>
                          </li>
                          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link underline" href="services.php">Services</a>
                        </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link underline dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                   aria-expanded="false"> MBBS<span><i class="fa fa-chevron-down"></i></span></a>
                                   <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="mbbs-west-bengal.php">West Bengal</a></li>
                                    <li><a class="dropdown-item" href="mbbs-bihar.php">Bihar</a></li>
                                    <li><a class="dropdown-item" href="mbbs-uttar-pradesh.php">Uttar Pradesh</a></li>
                                    <li><a class="dropdown-item" href="mbbs-andhra-pradesh.php">Andhra Pradesh</a></li>
                                    <li><a class="dropdown-item" href="mbbs-haryana.php">Haryana</a></li>
                                    <li><a class="dropdown-item" href="mbbs-karnataka.php">Karnataka</a></li>
                                    <li><a class="dropdown-item" href="mbbs-kerala.php">Kerala</a></li>
                                    <li><a class="dropdown-item" href="mbbs-deemed.php">Deemed University</a></li>
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
                                    <li><a class="dropdown-item" href="md-ms-west-bengal.php">West Bengal</a></li>
                                      <li><a class="dropdown-item" href="md-ms-bihar.php">Bihar</a></li>
                                      <li><a class="dropdown-item" href="md-ms-uttar-pradesh.php">Uttar Pradesh</a></li>
                                      <li><a class="dropdown-item" href="md-ms-karnataka.php">Karnataka</a></li>
                                      <li><a class="dropdown-item" href="md-ms-deemed.php">Deemed University</a></li>
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

<?php include 'partials/footer.php'; ?>