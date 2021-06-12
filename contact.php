<?php
    if(isset($_POST['submit'])){
        $to="support@buddyzapp.com";
        $email = $_POST['email'];
        $sub = $_POST['subject'];
        $msg = $_POST['message'];
        $message = "From Email:- $email"."<br>"."Subject:- $sub"."<br>"."Message:- $msg";
        $subject = "Conetct us Form from Buddyzapp.com";
        mail($to, $subject, $message);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="keyword" content="">
	<meta name="description" content="All in one solution for your day to day need. Trusted & Authenticated Buddyz provided by BuddyzApp | Buddyzapp.com">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="apple-touch-icon" href="./img/favicon.png">
	<link rel="icon" href="./img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
	<title>BuddyzApp | Your BuddyzApp for day to day need. . . . . .</title>
	<link rel="stylesheet" href="css/vendor.min.css">
	<link rel="stylesheet" href="css/dashcore.min.css">
	<!--Font Awesome Icons-->
	<script src='https://kit.fontawesome.com/a076d05399.js'></script> 
	<script>(function(w, d) { w.CollectId = "5dbb09bc8b1e3d354ad0362c"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
</head>
	
<body>
	<nav class="st-nav navbar main-nav navigation fixed-top no-dropdown-transition" id="main-nav">
		<div class="container"><ul class="st-nav-menu nav navbar-nav">
			<li class="st-nav-section nav-item">
				<a href="#main" class="navbar-brand">
					<img src="img/logo1.png" alt="buddyzapp" class="logo logo-sticky d-block d-md-none"> 
					<img src="img/logo.png" alt="buddyzapp" class="logo d-none d-md-block">
				</a>
			</li>
			<li class="st-nav-section st-nav-primary nav-item">
				<a class="st-root-link nav-link" href="#home"><big><strong>Home</strong></big></a>
				<a class="st-root-link nav-link" href="#services"><big><strong>Services</strong></big></a>
				<a class="st-root-link nav-link" href="./contact.php"><big><strong>Contact Us</strong></big></a>
			</li>
			<li class="st-nav-section st-nav-secondary nav-item"><a class="btn btn-rounded btn-outline mr-3 px-3" href="https://auth.buddyzapp.com/login.php" target="_blank"><i class="fas fa-sign-in-alt d-none d-md-inline mr-md-0 mr-lg-2" aria-hidden="true"></i> <span class="d-md-none d-lg-inline">Login</span> </a><a class="btn btn-rounded btn-solid px-3" href="https://auth.buddyzapp.com/" target="_blank"><i class="fas fa-user-plus d-none d-md-inline mr-md-0 mr-lg-2" aria-hidden="true"></i> <span class="d-md-none d-lg-inline">Signup</span></a></li>
			
			<!-- Mobile Navigation -->
			<li class="st-nav-section st-nav-mobile nav-item"><button class="st-root-link navbar-toggler" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button><div class="st-popup"><div class="st-popup-container"><a class="st-popup-close-button">Close</a><div class="st-dropdown-content-group"><h4 class="text-uppercase regular">Pages</h4><a class="regular text-primary" href="https://buddyzapp.com/"><i class="far fa-building mr-2" aria-hidden="true"></i> Home </a><a class="regular text-success" href=""><i class="far fa-envelope mr-2" aria-hidden="true"></i> Service </a><a class="regular text-info" href="./contact.php"><i class="far fa-question-circle mr-2" aria-hidden="true"></i> Contact us</a></div><div class="st-dropdown-content-group bg-light b-t"><a href="https://auth.buddyzapp.com/login.php">Log in <i class="fas fa-arrow-right" aria-hidden="true"></i></a></div></div></div></li></ul></div><div class="st-dropdown-root"><div class="st-dropdown-bg"><div class="st-alt-bg"></div></div><div class="st-dropdown-arrow"></div><div class="st-dropdown-container"><div class="st-dropdown-section" data-dropdown="blocks"><div class="st-dropdown-content"><div class="st-dropdown-content-group"><div class="row"><div class="col mr-4"></div></div></div></div></div>
		</div>
	</div></nav>
	
	<main>
	    
	<!--Page Header-->
	<header class="page header text-contrast overlay alpha-8 image-background cover gradient gradient-purple-blue" style="background-image: url('img/bg/waves.jpg')"><div class="divider-shape"><!-- waves divider --> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shape-waves" style="left: 0; transform: rotate3d(0,1,0,180deg);"><path class="shape-fill shape-fill-contrast" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path></svg></div><div class="container pb-9" style=""><div class="row"><div class="col-md-6"><h1 class="regular display-4 text-contrast mb-4">Contact us</h1><p class="lead text-contrast">Get in touch and let us know how we can help. Fill out the form and we’ll be in touch as soon as possible.</p></div></div></div></header>
	<!--/Page Header-->
	<!--Conatct us-->
	<section class="section mt-7n"><div class="container bring-to-front pt-0"><div class="row align-items-center gap-y"><div class="col-md-6"><div class="shadow bg-contrast p-4 rounded"><form action="<? $SERVER['PHP_SELF']; ?>" method="post" class="form form-contact" name="form-contact" data-response-message-animation="slide-in-up" novalidate="novalidate"><div class="form-group"><label for="contact_email" class="bold mb-0">Email address</label> <small id="emailHelp" class="form-text text-secondary mt-0 mb-2 italic">We'll never share your email with anyone else.</small> <input type="email" name="email" id="contact_email" class="form-control bg-contrast" placeholder="Valid Email" required></div><div class="form-group"><label for="contact_email" class="bold">Subject</label> <input type="text" name="subject" id="contact_subject" class="form-control bg-contrast" placeholder="Subject" required></div><div class="form-group"><label for="contact_email" class="bold">Message</label> <textarea name="message" id="contact_message" class="form-control bg-contrast" placeholder="What do you want to let us know?" rows="8" required></textarea></div><div class="form-group"><button id="contact-submit" data-loading-text="Sending..." name="submit" type="submit" class="btn btn-primary btn-rounded">Send Message</button></div></form><div class="response-message"><div class="section-heading"><i class="fas fa-check font-lg"></i><p class="font-md m-0">Thank you!</p><p class="response">Your message has been send, we will contact you as soon as possible.</p></div></div></div></div><div class="col-md-5 ml-md-auto"><div class="section-heading"><p class="small bold badge badge-info">Let's do business</p><h2>Step into our place</h2></div><div class="media"><i class="fas fa-map-marker font-l text-primary mr-3"></i><div class="media-body">The Estate Building, The Estate, 8th Floor, Dickenson Road, Banglore, Karnataka - 560042,<span class="d-block">India</span></div></div><div class="media my-4"><i class="fas fa-phone font-l text-primary mr-3"></i><div class="media-body"><span class="d-block"><span class="d-block"><a href="tel:+91 6360144518">+91 6360144518</a></span></div></div><div class="media"><i class="fas fa-envelope font-l text-primary mr-3"></i><div class="media-body"><a href="mailto:support@buddyzapp.com">support@buddyzapp.com</a></div></div><hr class="my-4"><nav class="nav justify-content-center justify-content-md-start"><a href="https://www.facebook.com/virtua.qaptive" class="btn btn-circle btn-sm brand-facebook mr-3"><i class="fab fa-facebook"></i></a> <a href="https://twitter.com/VQaptive" class="btn btn-circle btn-sm brand-twitter mr-3"><i class="fab fa-twitter"></i></a> <a href="https://linkedin.com/company/virtuaqaptive-consulting-services" class="btn btn-circle btn-sm brand-instagram"><i class="fab fa-linkedin"></i></a></nav></div></div></div></section>
	<!--/contact us--->
	<!--Footer-->
	<footer class="page-footer font-small unique-color-dark">

  <div style="background-color: #ffffff;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a href="https://www.facebook.com/virtua.qaptive" class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a href="https://twitter.com/VQaptive" class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google ->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a href="https://linkedin.com/company/virtuaqaptive-consulting-services" class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a-->

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">BuddyzApp</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>All-in-one solutions for your day to day need by your Trusted & Authenticated Buddyz.<br>Be a part of the thousands Buddyz network for providing and availaing services</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="https://plasma.buddyzapp.com/">Plasma Buddyz</a>
        </p>
        <p>
          <a href="https://www.coronachaintracker.com/">Corona Chain Tracker</a>
        </p>
        <p>
          <a href="#">Travel Buddyz</a>
        </p>
        <p>
          <a href="#">Tutor Buddyz</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="https://auth.buddyzapp.com/login.php">Your Account</a>
        </p>
        <p>
          <a href="#!">Career</a>
        </p>
        <p>
          <a href="./contact.php">Contact Us</a>
        </p>
        <p>
          <a href="mailto:support@buddyzapp.com">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> The Estate Building, 8th Floor, Dickenson Road, Banglore - 560042</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> support@buddyzapp.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 91 6360144518</p>
        </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div style="background-color: #565555; color: white;" class="footer-copyright text-center py-3">© 2020 Copyright
    <a> BuddyzApp</a>
  </div>
  <!-- Copyright -->

</footer>
	<!--/footer-->