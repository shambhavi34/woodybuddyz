
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Carpenter</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">
 <link rel="stylesheet" href="assets/css/commonstyle.css">

 
</head>
<body>
  
<?php include 'includes/navbar2.php'; ?>

     <?php 
     if($_SESSION['subsType']=="sp")
     {
     include 'includes/subMenu.php';
     }
     else{
         include 'includes/subMenuSC.php';
     }
     ?>  
 
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid">
     <div class="videobg">
    <video autoplay loop muted poster="assets/img/cover.jpeg">
    <source src="assets/img/video2.mp4" type="video/mp4">
   </video> 
  <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Hire the best Buddy, online</h1>
          <h2>Find the perfect buddy for your desired woodwork</h2>
          <!-- We are a team of experienced and trusted workers -->
          <div class="d-lg-flex">
            <a href="PostJob.php" class="btn-get-started scrollto">Hire a Carpenter</a>
            <a href="viewJobs.php" class="btn-watch-video"> Browse Jobs <i class="icofont-search-2"></i></a>
          </div>
        </div>
        </div>
        <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/carpenter2.jpg" class="img-fluid animated" alt="">
        </div> -->
      </div>
    </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

   
    </section> <!--End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>How It <strong>Works?</strong></h3>
             <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>-->
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Pick your wood work <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Select the type of woodwork you want to get done – repair, installation, or custom make wooden furniture or fixtures (doors and windows, railings, cupboards, etc.).
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> What type of Carpenter service do you need? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Mention what kind of carpentry service you want. We deal with all types of wooden work including repairing or fixing wooden fixtures and furniture, as well as making new furniture or door and windows, etc.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Select your preferred time-slot<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Our professionals work from 9 AM to 9 PM throughout the week. So, share the most convenient time-slot that suits you.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Get the service from a trusted Buddy and Pay him. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Your buddy will approach you as soon as you book the service for further discussions. Once it’s finalized the woodwork expert visits your place to get your project started.
                    </p>
                  </div>
                </li>


              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/tools.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    
    
    </section> <!--End Portfolio Section -->
   <div class="counter">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="employees">
                      <p class="counter-count">879</p>
                      <p class="employee-p">Employee</p>
                  </div>
              </div>
  
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="customer">
                      <p class="counter-count">954</p>
                      <p class="customer-p">Customer</p>
                  </div>
              </div>
  
              
          </div>
      </div>
  </div> 

    
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Your Buddyz</h2>
         <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
            <div class="row">
            <?php 
            //  $api_url3 = "https://buddyzapp.com/api/woody/view/getFourUserProfile/woody";
            //  $json_data3 = file_get_contents($api_url3) ;
             for ($x = 11; $x <= 14; $x++)  { 
             $api_url = "https://buddyzapp.com/api/woody/view/getUser/$x";
             $json_data = file_get_contents($api_url) ;
             $response_data = json_decode($json_data);
             $user_data = $response_data->user;
             $api_url2 = "https://buddyzapp.com/api/woody/view/getUserProfile/$x";
             $json_data2 = file_get_contents($api_url2) ;
             $response_data2 = json_decode($json_data2);
             $profile_data = $response_data2->user;
            //  foreach ($response_data->users as $card_data) { 
              ?>
            <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="uploads/cards/<?php echo $user_data->profilePic ;?>" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4><?php echo $user_data->fname." ".$user_data->lname; ?></h4>
                <span>Carpenter</span>
                <p><?php echo $profile_data->description; ?></p>
                <div class="social">
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <!-- <a href=""><i class="ri-instagram-fill"></i></a> -->
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    <a href="sp/dashboard.php?custid=<? echo  $profile_data->custid ?>" target="_blank"><i class="ri-cursor-line"></i></a>
                </div>
            </div>
            </div>
            </div>
              <?php
             }
            ?>
     
<!--        <div class="row">-->

<!--<div class="col-lg-6">-->
<!--  <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">-->
<!--    <div class="pic"><img src="assets/img/team/team-1.jpeg" class="img-fluid" alt=""></div>-->
<!--    <div class="member-info">-->
<!--      <h4>RajKumar</h4>-->
<!--      <span>Carpenter</span>-->
<!--      <p>I am highly energetic in woody work,capable of doing any work</p>-->
<!--      <div class="social">-->
<!--         <a href=""><i class="ri-twitter-fill"></i></a> -->
<!--        <a href=""><i class="ri-facebook-fill"></i></a>-->
<!--         <a href=""><i class="ri-instagram-fill"></i></a> -->
<!--        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>-->
<!--        <a href="profile\index.php"><i class="ri-cursor-line"></i></a>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<!--          <div class="col-lg-6 mt-4 mt-lg-0">-->
<!--            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">-->
<!--              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>-->
<!--              <div class="member-info">-->
<!--                <h4>Sarah Jhonson</h4>-->
<!--                <span>Product Manager</span>-->
<!--                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>-->
<!--                <div class="social">-->
<!--                   <a href=""><i class="ri-twitter-fill"></i></a> -->
<!--                  <a href=""><i class="ri-facebook-fill"></i></a>-->
<!--                   <a href=""><i class="ri-instagram-fill"></i></a> -->
<!--                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->

<!--          <div class="col-lg-6 mt-4">-->
<!--            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">-->
<!--              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>-->
<!--              <div class="member-info">-->
<!--                <h4>William Anderson</h4>-->
<!--                <span>CTO</span>-->
<!--                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>-->
<!--                <div class="social">-->
<!--                   <a href=""><i class="ri-twitter-fill"></i></a> -->
<!--                  <a href=""><i class="ri-facebook-fill"></i></a>-->
<!--                   <a href=""><i class="ri-instagram-fill"></i></a> -->
<!--                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->

<!--          <div class="col-lg-6 mt-4">-->
<!--            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">-->
<!--              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>-->
<!--              <div class="member-info">-->
<!--                <h4>Amanda Jepson</h4>-->
<!--                <span>Accountant</span>-->
<!--                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>-->
<!--                <div class="social">-->
<!--                   <a href=""><i class="ri-twitter-fill"></i></a> -->
<!--                  <a href=""><i class="ri-facebook-fill"></i></a>-->
<!--                   <a href=""><i class="ri-instagram-fill"></i></a> -->
<!--                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->

<!--        </div>-->

      </div>
    </section><!-- End Team Section -->

    
    </section> <!--End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
         <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Which type of carpentry services do you provide?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  we provide all the carpentry services directly related to your home, office, school, building etc.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What are the costs for providing the services? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Different services are charged solely as per their structure and design and further details are giving to you directly by carpenter himself. dear customers.
                </p>
              </div>
            </li>

           

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Do you provide woods and equipments also?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Woods and other equipments are also available if you demanded any other wise you must purchased from market.
                </p>
              </div>
            </li>

           

          </ul>
        </div>

      </div>
    </section> <!--End Frequently Asked Questions Section -->

   
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

 <?php include 'includes/footer.php'; ?>
 <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<!--<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->


<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>