<?php include 'partials/header.php'; ?>

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