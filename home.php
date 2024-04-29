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

   <!-- signika-google-font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300..700&display=swap" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i&display=swap" rel="stylesheet"> -->
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
<header id="menu-area">
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
                            <a class="nav-link underline" href="/about-us">About</a>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                          <a class="nav-link underline" href="/services">Services</a>
                      </li>
                          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                              <a class="nav-link underline dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                 aria-expanded="false"> MBBS<span><i class="fa fa-chevron-down"></i></span></a>
                              <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="/mbbs-west-bengal">West Bengal</a></li>
                                  <li><a class="dropdown-item" href="/mbbs-bihar">Bihar</a></li>
                                  <li><a class="dropdown-item" href="/mbbs-uttar-pradesh">Uttar Pradesh</a></li>
                                  <li><a class="dropdown-item" href="/mbbs-andhra-pradesh">Andhra Pradesh</a></li>
                                  <li><a class="dropdown-item" href="/mbbs-haryana">Haryana</a></li>
                                  <li><a class="dropdown-item" href="/mbbs-karnataka">Karnataka</a></li>
                                  <li><a class="dropdown-item" href="/mbbs-kerala">Kerala</a></li>
                                  <li><a class="dropdown-item" href="/mbbs-deemed">Deemed University</a></li>
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
                              <li><a class="dropdown-item" href="/md-ms-west-bengal">West Bengal</a></li>
                                <li><a class="dropdown-item" href="/md-ms-bihar">Bihar</a></li>
                                <li><a class="dropdown-item" href="/md-ms-uttar-pradesh">Uttar Pradesh</a></li>
                                <li><a class="dropdown-item" href="/md-ms-karnataka">Karnataka</a></li>
                                <li><a class="dropdown-item" href="/md-ms-deemed">Deemed University</a></li>
                            </ul>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                            <a class="nav-link underline" href="/contact-us">Contact Us</a>
                        </li>
                      </ul>
                  </div>
              </nav>
          </div>
      </div>
  </div>
</header>
<!-- menu-area-end -->

<!-- banner-area-start -->
<section id="banner">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="3000">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="d-block w-100 " src="images/new-banner-1.jpg" loading="lazy" alt="First slide">
              <div class="carousel-caption">
                  <div class="row">
                    <div class="col-md-12"> 
                        <h5 data-aos="fade-right" data-aos-duration="1000">Are you ready to take the first step toward your<span> dream medical career?</span></h5>
                        <p data-aos="fade-left" data-aos-duration="1000">Embarking on a medical career is both exhilarating and challenging. At EICS, we focus on making the first step easy and hassle-free by providing personalized career counseling, comprehensive assessments from our expert team, and a streamlined admission process.</p>
                        <div class="btn-new" data-aos="fade-right" data-aos-duration="1000"><a class="cstm-btn" href="/about-us">Read More</a></div>
                  </div>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 " src="images/new-banner-2.jpg" loading="lazy" alt="First slide">
              <div class="carousel-caption">
                  <div class="row">
                      <div class="col-md-12"> 
                          <h5 data-aos="fade-right" data-aos-duration="1000">Admission in UG Medical Courses - <span>MBBS & BDS</span></h5>
                          <p data-aos="fade-left" data-aos-duration="1000">Gateway to becoming a doctor lies in securing admission to undergraduate medical courses. The journey is much easier with expert guidance from EICS.</p>
                          <div class="btn-new" data-aos="fade-right" data-aos-duration="1000"><a class="cstm-btn" href="/mbbs">Read More</a></div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 " src="images/new-banner-3.jpg" loading="lazy" alt="First slide">
              <div class="carousel-caption bg-hide">
                  <div class="row">
                      <div class="col-md-12"> 
                          <h5 data-aos="fade-right" data-aos-duration="1000">Admission in PG Medical Courses -<span>MS & MD</span></h5>
                          <p data-aos="fade-left" data-aos-duration="1000">Aspirants who are determined to postgraduate in medical courses, <br> get the best consultation and hassle-free admission process at EICS</p>
                          <div class="btn-new" data-aos="fade-right" data-aos-duration="1000"><a class="cstm-btn" href="/md-ms">Read More</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
</section>
<!-- banner-area-end -->


<!-- header-promo-area-start -->
<!-- <section class="header_promo section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="promo-up-area grey">
                    <h3>heading area</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit ratione totam neque ullam, aliquam labore recusandae maxime eaque, facere ut ipsum dolorem alias dignissimos natus, harum rem reprehenderit voluptatem magni?
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="promo-up-area white">
                    <h3>heading area</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit ratione totam neque ullam, aliquam labore recusandae maxime eaque, facere ut ipsum dolorem alias dignissimos natus, harum rem reprehenderit voluptatem magni?
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="promo-up-area grey">
                    <h3>heading area</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit ratione totam neque ullam, aliquam labore recusandae maxime eaque, facere ut ipsum dolorem alias dignissimos natus, harum rem reprehenderit voluptatem magni?
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- header-promo-area-end -->

<!-- courses-area-start -->
<!-- <section class="ourpackage section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="coloumn-wrapper">
                    <h3>UG</h3>
                </div>
                <ul>
                    <li>
                        MBBS
                    </li>
                    <li>
                        BDS
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="coloumn-wrapper">
                    <h3>PG</h3>
                </div>
                <ul>
                    <li>
                      MD
                    </li>
                    <li>
                        MS
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<!-- courses-area-end -->

<section class="about-section">
    <div class="container">
        <div class="row fast-bg">                
            <div class="content-column col-lg-7 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2><span>MBBS</span> (Bachelor of Medicine and Bachelor of Surgery)</h2>
                    </div>
                    <div class="text"><span><i class="far fa-dot-circle"></i> Overview: </span> MBBS is an undergraduate degree in medicine. It offers a comprehensive curriculum with 19 core subjects, including Anatomy, Physiology, Pharmacology, Community Medicine, Biochemistry, Pathology, Anesthesiology, etc.
                    </div>
                    <div class="text">
                        <span><i class="far fa-dot-circle"></i>Duration: </span> 5.5 Years (including one year of internship)
                      </div>
                      <div class="text">
                        <span><i class="far fa-dot-circle"></i> Admission Process:</span> Through national entrance exams, NEET-UG (National Eligibility Cum Entrance Test for Undergraduate) conducted by the National Testing Agency (NTA).
                      </div>
                  
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image-1">
                        <img src="https://images.unsplash.com/photo-1658235081452-c2ded30b8d9f?q=80&w=2014&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" loading="lazy" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <!-- <div class="content-top">
          
        </div> -->
    </div>
</section>

<!-- reverse-area-start -->
<section class="about-section" style="padding-top: 0 !important;">
    <div class="container">
        <div class="row second-bg">       
            <div class="content-column col-lg-7 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2><span>MD/MS</span> (Doctor of Medicine, Master of Surgery)</h2>
                    </div>
                    <div class="text"><span><i class="far fa-dot-circle"></i>Overview:</span> MD/MS are postgraduate degrees that allow doctors to specialize in a specific area. These courses provide in-depth knowledge and training in a particular field, enhancing career prospects and expertise.
                    </div>
                  <div class="text">
                    <span><i class="far fa-dot-circle"></i>Duration: </span> 3 Years
                  </div>
                  <div class="text">
                    <span><i class="far fa-dot-circle"></i> Admission Process: </span> Admission is based on the performance in the NEET-PG (National Eligibility cum Entrance Test for Postgraduate) exam conducted by the National Board of Examinations (NBE).
 
                  </div>
                </div>
            </div>
            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column second">
                    <figure class="image-1">
                        <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" loading="lazy" alt="">
                    </figure>
                </div>
            </div>  
        </div>
    </div>
</section>
<!-- reverse-area-end -->

<section class="about-section" style="padding-top: 0 !important;">
    <div class="container">
        <div class="row third-bg">                
            <div class="content-column col-lg-7 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2><span>BDS</span> (Bachelor of Dental Surgery)</h2>
                    </div>
                 
                  <div class="text">
                    <span><i class="far fa-dot-circle"></i> Overview:</span> BDS is an undergraduate degree program in Bachelor of Dental Surgery. 
                  </div>
                  <div class="text">
                    <span><i class="far fa-dot-circle"></i> Duration: </span> 5 Years (including one year of internship)
                  </div>
                  <div class="text">
                    <span><i class="far fa-dot-circle"></i> Admission Process: </span> Admission is through National Entrance Exam, NEET-UG
                  </div>
                </div>
            </div>
            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure>
                        <img src="https://plus.unsplash.com/premium_photo-1661277793925-9a74734a8fd9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" loading="lazy" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- about-us-area-start -->
<div class="it-about-area p-relative pt-185 pb-185 section">
    <!-- <div class="it-about-shape-4 d-none d-md-block">
    <img src="images/star-shape.png" loading="lazy" alt="">
    </div> -->
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="it-about-right-box">
    <div class="it-about-title-box mb-20">
    <span class="it-section-subtitle">about us</span>
    <h4 class="it-section-title">Education India Career Services (EICS)
    <!-- <br> From anywhere -->
    </h4>
    </div>
    <div class="it-about-text pb-10">
        <p>
            Welcome to Education India Career Services (EICS), your trusted partner in the journey towards a successful medical career. As a West Bengal government-registered organization, we specialize in facilitating admissions for aspiring medical professionals. Whether you’re aiming for MBBS, MS, MD, or BDS programs, we are here to guide you through every step.
         </p>
    </div>
    <!-- <div class="it-about-content-wrapper">
    <div class="it-about-content">
    <h5>Flexible Classes</h5>
    <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.
    </p>
    </div>
    <div class="it-about-content">
    <h5>Flexible Classes</h5>
    <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.
    </p>
    </div>
    </div> -->
    <a class="cstm-btn" href="/about-us">Read More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
<!-- about-us-area-end -->

<!-- why-choose-us-area-start -->
<section class="it-choose-area it-choose-style-2 z-index fix p-relative grey-bg pt-180 pb-110">
    <!-- <div class="it-choose-shape-8 d-none d-xl-block">
        <img src="images/left-oval.png" loading="lazy" alt="">
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h1>WHY EICS?</h1>
                    <p class="short-txt second">
                        Why Choose Education India Career Services (EICS)?
                    </p>
                    <p class="short-txt">
                        At Education India Career Services (EICS), we understand that choosing the right path for your medical career is a critical decision.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <dv class="iner-part">
                    <img src="images/icon-small-1.png" loading="lazy" alt=""/>
                    <h3>
                        Streamlined Admission Process
                    </h3>
                    <p>
                        We at EICS simplify admission to private medical colleges nationwide. With our extensive network and expertise, securing your desired institution is streamlined for you.
                    </p>
                </dv>
            </div>
            <div class="col-lg-3">
                <dv class="iner-part">
                    <img src="images/small-5.png" loading="lazy" alt=""/>
                    <h3>
                        Online Admission Process
                    </h3>
                    <p>
                        We provide comprehensive support for NEET UG and PG admissions, ensuring a stress-free experience from application to enrollment.
                     </p>
                </dv>
            </div>
            <div class="col-lg-3">
                <dv class="iner-part">
                    <img src="images/small-4.png" loading="lazy" alt=""/>
                    <h3>
                        Holistic Career Consultation 
                    </h3>
                    <p>
                        Our seasoned counselors provide career guidance beyond admissions, helping you navigate choices and make informed decisions about specializations and postgraduate studies.
                    </p>
                </dv>
            </div>
            <div class="col-lg-3">
                <dv class="iner-part">
                    <img src="images/icon-small-2.png" loading="lazy" alt=""/>
                    <h3>
                        Effective Counseling Approach 
                    </h3>
                    <p>
                        Our personalized counseling addresses your aspirations, concerns, and needs, from exam prep to course selection and eligibility criteria understanding.
                    </p>
                </dv>
            </div>
        </div>
    </div>
</section>
<!-- <div class="it-choose-area it-choose-style-2 z-index fix p-relative grey-bg pt-180 pb-110">
    <div class="it-choose-shape-5 d-none d-xl-block">
    <img src="images/rotate-2.png" loading="lazy" alt="">
    </div>
    <div class="it-choose-shape-8 d-none d-xl-block">
        <img src="images/left-oval.png" loading="lazy" alt="">
    </div>
    <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-6 mb-30">
    <div class="it-choose-thumb-box text-center text-lg-end">
    <div class="it-choose-thumb p-relative">
        <img src="images/choose-sec.jpg" loading="lazy" alt="">
    <div class="it-choose-shape-1">
        <img src="images/square-left.png" loading="lazy" alt="">
    </div>
    <div class="it-choose-shape-2">
        <img src="images/shape-square.png" loading="lazy" alt="">
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 mb-30">
    <div class="it-choose-left">
    <div class="it-choose-title-box mb-30">
    <span class="it-section-subtitle-2">WHY CHOOSE US</span>
    <h4 class="it-section-title">Creating A Community of
    Life Long Learners.
    </h4>
    </div>
    <div id="accordion" class="accordion">
        <div class="card mb-0">
            <a class="card-header collapsed" data-toggle="collapse" href="#collapseOne"
               data-parent="#collapseOne">
               <div class="left-part">
                <span>
                    <img src="images/small-1.png" loading="lazy" alt="">
                   </span>
                   Affordable Courses
               </div>
            </a>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cupiditate obcaecati
                        nisi perspiciatis ipsa harum magnam assumenda recusandae, rerum expedita cumque
                        dignissimos voluptatum facere minus vitae beatae velit repellendus illo
                        voluptatibus. Nobis voluptates eum deserunt eius quia pariatur facere, cumque
                        ducimus? Dolore architecto officia praesentium.
                    </p>
                </div>
            </div>
            <a class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
               href="#collapseTwo">
               <div class="left-part">
                <span>
                    <img src="images/small-2.png" loading="lazy" alt="">
                   </span>
                   Efficient & Flexible
               </div>
            </a>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cupiditate obcaecati
                        nisi perspiciatis ipsa harum magnam assumenda recusandae, rerum expedita cumque
                        dignissimos voluptatum facere minus vitae beatae velit repellendus illo
                        voluptatibus. Nobis voluptates eum deserunt eius quia pariatur facere, cumque
                        ducimus? Dolore architecto officia praesentium.
                    </p>
                </div>
            </div>
            <a class="card-header collapsed" data-toggle="collapse" data-parent="#accordion"
               href="#collapseThree">
               <div class="left-part">
                <span>
                    <img src="images/small-3.png" loading="lazy" alt="">
                   </span>
                   Skilled Teachers
               </div>
            </a>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cupiditate obcaecati
                        nisi perspiciatis ipsa harum magnam assumenda recusandae, rerum expedita cumque
                        dignissimos voluptatum facere minus vitae beatae velit repellendus illo
                        voluptatibus. Nobis voluptates eum deserunt eius quia pariatur facere, cumque
                        ducimus? Dolore architecto officia praesentium.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> -->
<!-- why-choose-us-area-end -->

<!-- overall-us-area-start -->
<!-- <div class="it-funfact-area z-index-5">
    <div class="container">
    <div class="it-funfact-bg-wrap theme-bg">
    <div class="row gx-0">
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="it-funfact-item d-flex align-items-center">
    <div class="it-funfact-icon">
    <span>
        <img src="images/overall-1.png" loading="lazy" alt=""/>
    </span>
    </div>
    <div class="it-funfact-content">
    <h6><i class="purecounter" data-purecounter-duration="0" data-purecounter-end="3">3</i>k+</h6>
    <span>Successfully Trained</span>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="it-funfact-item d-flex align-items-center">
    <div class="it-funfact-icon">
    <span>
        <img src="images/overall-2.png" loading="lazy" alt=""/>
    </span>
    </div>
    <div class="it-funfact-content">
    <h6><i class="purecounter" data-purecounter-duration="0" data-purecounter-end="15">15</i>k+</h6>
    <span>Classes Completed</span>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="it-funfact-item d-flex align-items-center">
    <div class="it-funfact-icon">
    <span>
        <img src="images/overall-3.png" loading="lazy" alt=""/>
    </span>
    </div>
    <div class="it-funfact-content">
    <h6><i class="purecounter" data-purecounter-duration="0" data-purecounter-end="97">97</i>k+</h6>
    <span>Satisfaction Rate</span>
    </div>
    </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="it-funfact-item d-flex align-items-center">
    <div class="it-funfact-icon">
    <span>
        <img src="images/overall-4.png" loading="lazy" alt=""/>
    </span>
    </div>
    <div class="it-funfact-content">
    <h6><i class="purecounter" data-purecounter-duration="0" data-purecounter-end="102">35</i>k+</h6>
    <span>Faculties
    </span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> -->
<!-- overall-us-area-end -->

<!-- expert-trainers-area-start -->
<!-- <section id="team-part" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h1>Meet Our Expert Instructor</h1>
                </div>
                <div class="content-part">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis ducimus ratione quos quia eveniet quas nulla fugit nobis atque voluptas, voluptatum itaque doloremque asperiores natus obcaecati dolorum iure. Aliquam, soluta.
                       </p>
                </div>
            </div>
        </div>
        <div class="team-main-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team">
                            <img src="images/face-1.jpg" loading="lazy" class="img-fluid" alt=""/>
                            <div class="details">
                                <h6>John Doe</h6>
                                <span>Position Here</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team">
                            <img src="images/face-2.jpg" loading="lazy" class="img-fluid" alt=""/>
                            <div class="details">
                                <h6>John Doe</h6>
                                <span>Position Here</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team">
                            <img src="images/face-3.jpg" loading="lazy" class="img-fluid" alt=""/>
                            <div class="details">
                                <h6>John Doe</h6>
                                <span>Position Here</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team">
                            <img src="images/face-4.jpg" loading="lazy" class="img-fluid" alt=""/>
                            <div class="details">
                                <h6>John Doe</h6>
                                <span>Position Here</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- expert-trainers-area-end -->

<!-- testimonial-area-start -->
<section id="testimonial" class="section">
    <div class="container">
        <div class="heading">
            <h1>Creating A Community Of <br> Life Long Learners.</h1>
        </div>
        <div class="row">
			<div id="news">
			<div class="owl-carousel owl-theme testimonial">
			<div class="item">
			<div class="col-md-12">
			<img src="images/user-placeholder-1.jpeg" loading="lazy" class="img-responsive">
			<div class="new-box">
			<h5>Semim Hasan</h5>    
            <p>
                One of the best counselors treated me like a family member, especially Sandip sir. Thank you so much for your help. So much respect for you, sir. If you want genuine counseling, contact EICS, 100% guaranteed admission.
            </p>
			</div>
			</div>
			</div>
			<div class="item">
			<div class="col-md-12">
                <img src="images/user-placeholder-1.jpeg" loading="lazy" class="img-responsive">
			<div class="new-box">
			<h5>ABHISHEK BANERJEE</h5>
            <p>
                The consultation was awesome, providing the best advice and excellent insight.
            </p>
			</div>
			</div>
			</div>
			<div class="item">
			<div class="col-md-12">
                <img src="images/user-placeholder-ladies-1.jpeg" loading="lazy" class="img-responsive">
			<div class="new-box">
			<h5>Aarushi Singh</h5>
            <p>
                EICS Consultancy surpassed all my expectations in facilitating my pursuit of studying MBBS. EICS team's dedication and expertise shone through at every stage of the application process. I wholeheartedly recommend EICS to every student.
            </p>
			</div>
			</div>
			</div>
			<div class="item">
			<div class="col-md-12">
				<img src="images/user-placeholder-1.jpeg" loading="lazy" class="img-responsive">
			<div class="new-box">
			<h5>Rohan Gupta</h5>
            <p>
                Enlisting the services of EICS Consultancy was a decision that significantly eased my journey towards pursuing an MD. I am immensely grateful for their unwavering support in helping me achieve my academic aspirations.
            </p>
			</p>
			</div>
			</div>
			</div>
			<div class="item">
			<div class="col-md-12">
                <img src="images/user-placeholder-ladies-1.jpeg" loading="lazy" class="img-responsive">
			<div class="new-box">
			<h5>Nisha Patel</h5>
            <p>
                EICS Consultancy proved invaluable in my quest to study MS. They provided comprehensive guidance, addressing my concerns with patience and clarity.  I cannot thank EICS enough for their exceptional service and unwavering commitment to student success.
            </p>
			</div>
			</div>
			</div>
			<div class="item">
			<div class="col-md-12">
                <img src="images/user-placeholder-1.jpeg" loading="lazy" class="img-responsive">
			<div class="new-box">
			<h5>Arjun Mehta</h5>
            <p>
                Thanks to EICS expertise and unwavering dedication, I am now embarking on my BDS journey. I want to thank each member of the EICS family for their constant help in every aspect of my admission to BDS.             </p>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
    </div>
</section>
<!-- testimonial-area-end -->

<!-- horizontal-about-us-area-start -->
<!-- <div class="it-cta-area it-cta-height black-bg p-relative">
    <div class="it-cta-bg d-none d-xl-block">
    <img src="images/about-horizontally.png" loading="lazy" alt="">
    </div>
    <div class="container">
    <div class="row align-items-center">
    <div class="col-xl-9 col-lg-7 col-md-7">
    <div class="it-cta-content">
    <h4 class="it-cta-title">educate gives you the tools
    create an online course.</h4>
    </div>
    </div>
    <div class="col-xl-3 col-lg-5 col-md-5">
    <div class="it-cta-button text-md-end">
        <a class="cstm-btn" href="/about-us">More About Us</a>
    </div>
    </div>
    </div>
    </div>
</div> -->
<!-- horizontal-about-us-area-end -->

<!-- blog-area-start -->
<section class="latest-post section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h1>Blog Posts</h1>
                </div>
                <!-- <div class="content-part">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis ducimus ratione quos quia eveniet quas nulla fugit nobis atque voluptas, voluptatum itaque doloremque asperiores natus obcaecati dolorum iure. Aliquam, soluta.
                       </p>
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            <div class="latestnewscard">
            <div class="latestnewsimg">
            <a href="/blog-details-1">
            <img src="images/blog-post-1.jpg" loading="lazy" alt=""/>
            </a>
            </div>
            <div class="latestnewscontent">
                <div class="both-wrap">
                    <h6><i class="far fa-clock"></i>10, Jan 2024</h6>
                    <h5>
                        <i class="far fa-comments"></i>
                        Comment (06)
                    </h5>
                </div>
           
            <h4><a href="/blog-details-1">Conquer Your Dreams With EICS: Education India Career Services</a></h4>
            <p>
                Is saving lives your passion? Your aspiration to become a doctor may come true with EICS.
            </p>
            <a href="/blog-details-1" class="latestnewslinkdesign">Read More<i class="fas fa-caret-right"></i></a>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="latestnewscard">
            <div class="latestnewsimg">
                <a href="/blog-details-2">
                    <img src="images/blog-details-4.png" loading="lazy" alt=""/>
                    </a>
            </div>
            <div class="latestnewscontent">
                <div class="both-wrap">
                    <h6><i class="far fa-clock"></i>25, Feb 2024</h6>
                    <h5>
                        <i class="far fa-comments"></i>
                        Comment (06)
                    </h5>
                </div>
           
            <h4><a href="/blog-details-2">Medical College Admission Everything You Need to Know</a></h4>
            <p>
                A career in the medical profession is fascinating as well as challenging. Following the challenges of an MBBS degree, one encounters numerous career prospects compared to other bachelor’s degrees. MBBS is a five-year bachelor's degree course in which students learn about human anatomy, physiology, and pharmacology. It is the first step for the students to become doctors.
            </p>
            <a href="/blog-details-2" class="latestnewslinkdesign">Read More<i class="fas fa-caret-right"></i></a>
            </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="latestnewscard">
            <div class="latestnewsimg">
                <a href="/blog-details-3">
                    <img src="images/blog-details-new-3.jpg" loading="lazy" alt=""/>
                    </a>
            </div>
            <div class="latestnewscontent">
                <div class="both-wrap">
                    <h6><i class="far fa-clock"></i>13, March 2024</h6>
                    <h5>
                        <i class="far fa-comments"></i>
                        Comment (06)
                    </h5>
                </div>
           
                <h4><a href="/blog-details-3">The Ultimate Guide to Navigating Medical College Admissions</a></h4>
                <p>
                    Have you ever dreamt of becoming a Doctor but need help figuring out where to start? There are many UG and PG courses available to pursue a career in Medicine and gain admission to medical colleges. But for that, you need to know how to pursue the career of your dreams.
                </p>
            <a href="/blog-details-3" class="latestnewslinkdesign">Read More<i class="fas fa-caret-right"></i></a>
            </div>
            </div>
            </div>
            </div>
            <div class="button-area text-center">
                <a class="cstm-btn" href="/blog">View More</a>
            </div>
    </div>
</section>
<!-- blog-area-end -->

<!-- contact-us-area-start -->
<section class="home-contact section" id="home-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="inner-area">
                    <!-- <h4>Send us a Message</h4> -->
                     <!-- After submit alert -->
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
                    <!-- After submit alert -->
                    <form class="custom-form" method="POST" action="/submit-contact.php">
                        <input type="hidden" name="redirect" value="/">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="first_name">First Name*</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name*" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        
                      <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="mobile">Phone number*</label>
                                <input type="number" class="form-control" id="mobile" name="phone" placeholder="Phone number*" required>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group last">
                                <label for="message_input">Massage*</label>
                                <textarea placeholder="Type your query here ..." type="text" class="form-control-2" id="message_input" rows="5" name="message" required></textarea>
                            </div>
                        </div>
                      </div>
                      <div class="button-area text-center">
                        <button type="submit" class="cstm-btn">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
            <aside class="col-lg-4">
                <div class="map-area">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.65682519046453!2d87.35461591221959!3d23.514181201562774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f7705b4825e739%3A0xa91306f3444dc2f0!2sIndian%20Bank%20-%20Bidhan%20Nagar%20Branch%20(%20Allahabad%20Bank)!5e0!3m2!1sen!2sin!4v1711522335647!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.5106845049963!2d87.35232927515608!3d23.514127878832284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f771b27a01931d%3A0x9f14515e7ca80433!2sEducation%20India%20Career%20Services!5e0!3m2!1sen!2sus!4v1709365242681!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
            </aside>
        </div>
    </div>
</section>
<!-- contact-us-area-end -->

<?php include 'partials/footer.php'; ?>