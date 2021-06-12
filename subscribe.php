
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">
 <link rel="stylesheet" href="assets/css/commonstyle.css">

 <style>
 button{
   border:none;
   background-color:white
 }
 .card-button2 {
    border: 1px solid grey;
    background-color: white;
}
.card-button3 {
    border: 1px solid grey;
    background-color: white;
}

  
 .cards [type=radio] { 
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  /* IMAGE STYLES */
  [type=radio] + .border-white {
    cursor: pointer;
  }
  

  [type=radio]:checked + .border-white2{
    outline: 2px solid royalblue;
  }
 </style>
</head>
<body>
  
<?php include 'includes/navbar.php'; ?>

  <!-- ======= Hero Section ======= -->

    

    <div class="container mt-5 pt-5">
    <form action="checkSubscription.php" method="POST">
       <div class="form-group pb-3">
            
    <br>
            <div class="cards  pb-5 pt-3 mb-5 text-center shadow">
            <h1 for="your-email" class="text-black">Subscribe WoodyBuddyz As</h1><br>
            <div class="row justify-content-center">
            <div class="col-sm-4 col-md-4 col-xl-3">
                <label>
                  <input type="radio" name="subsType" value="sc" checked>
                  <div class="card border-white2" style="width: 12rem;">
                    <img class="card-img-top" width="100%" height="180 px" src="assets/img/sc.png">
                    <div class="card-footer  border-light  bg-transparent  text-center">As Hirer</div>
                  </div>
                </label>
            </div>  <br>  
            <div class="col-sm-4 col-md-4 col-xl-3">
                <label>
                  <input type="radio" name="subsType" value="sp">
                  <div class="card border-white2" style="width: 12rem;">
                    <img class="card-img-top" width="100%" height="180 px" src="assets/img/sp.jpg">
                    <div class="card-footer  border-light  bg-transparent  text-center">As Carpenter</div>
                  </div>
                </label>
            </div>
            <br>
            <input type="hidden" name="custId" value="<?php echo $_GET['custId']; ?>" >
            <input type="hidden" name="channelId" value="woody" >
            <div class="col-sm-4 col-md-4 col-xl-2 align-self-center text-right">
            <button type="submit"  name="submitSubscribe"><i class="fa fa-arrow-circle-right" style="font-size:60px;color:blue"></i>
            </button>
            </div>
            
            </div>
            </div>
              
        </div>
        </form>
    </div>
    
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