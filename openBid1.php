
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Browse Jobs</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- Main Style Css -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="assets/css/commonstyle.css">
<style>
  
    .form-v5-content {
        border-radius:0px;
        width: 1000px;
        float:left
    }
    .header2{
        padding-top:250px;
        max-height:150px;
      
    }
    #contentbid{
        max-width:800px;
        /* margin-left:30px; */
        /* padding-left:30px; */
        background-color:white
    }
    p{
        font-size:1rem;
        font-family: Roboto,"Helvetica Neue",Helvetica,Arial,sans-serif;
    }
    .green{
        background-color:lightblue;
        color:black;
        font-weight:400px;
        border-radius: 16px;
        border:none;
        height:2rem;
        padding-left:10px;
        padding-right:10px;
    }
</style>
</head>
<?php include 'includes/navbar.php';?>
<body style=" background-color:#f7f7f9">
 

    
<div class="jumbotron jumbotron-fluid" style="background-color:#d8f4f5;max-height:250px">
  <div class="container">
    
    <div class="row pt-5 pl-3 align-items-center" style="color:#37517e">
        <div class="col-sm-8 col-lg-8">
            <?php 
            if(isset($_POST['submitbtn'])){
                $_SESSION["formid"] = $_POST['jobId'];  
            }
            $id = $_SESSION["formid"];
            $api_url = "http://buddyzapp.com/api/woody/view/getJob/$id";
            $json_data = file_get_contents($api_url) ;
            
            $response_data = json_decode($json_data);
            $job_data = $response_data->job;
            echo "<h1><b>$job_data->jobTitle</b></h1>";
            ?>
        </div>
        <div class="col">
            <h2>Budget<b>&nbsp;
            <?php  echo "&#8377;$job_data->paymentMinValue - $job_data->paymentMaxValue"; ?></b></h2>
            
            <?php 
            $date1 = strtotime($job_data->prefferedToDate);
            $date2 = strtotime(date("Y-m-d"));
            echo '<button class="green">'.($date1-$date2)/60/60/24 .' days left</button>'; ?> 
        </div>
    </div>
   </div>
</div>

      
<div class="container ">
        <div class="card rounded-0 shadow-sm border-0 mb-5" id="contentbid">
       
            <div class="card-body pl-3">
                <div class="align-items-center">
           
                <?php  echo "<p>$job_data->jobTitle</p>"; ?>
                <?php  echo "<p><b>Details:</b>&nbsp;$job_data->jobDesc</p>"; ?>
                <?php  echo "<p><b>ProjectId:</b>&nbsp;#woody$id</p>"; ?>
           
                    <div class="row pl-3">
                        <p><b>Supporting Images and Videos:</b>&nbsp;</p>
                    </div>
                    <div class="row pl-3">
                        <?php 
                         $api_url2 = "https://buddyzapp.com/api/buddyzWeb/view/getJobMedia/woody/$id";
                         if (false == ($jsonmedia = @file_get_contents($api_url2, true) )){
                             echo "<p>No Supporting files</p>";
                         }
                        else{
                         $response_media = json_decode($jsonmedia);
                        
                        foreach ($response_media->jobsMedia as $jobMediaData) { 
                            if($jobMediaData->imageLocation != NULL || $jobMediaData->imageLocation != ''){?>
                               <?php $filepath = 'uploads/woodyJobMedia/'.$jobMediaData->imageLocation ;?>
                               <div class="col-lg-4 col-md-6 col-xs-6">
                               <a href="<?= $filepath; ?>" target="new"><img src='uploads/woodyJobMedia/<?php echo $jobMediaData->imageLocation ;?>' class="img-fluid"></a>
                               </div>
                            <?php } 

                                   if($jobMediaData->videoLocation != NULL || $jobMediaData->videoLocation != ''){
                                        $filepath2 = 'uploads/woodyJobMedia/'.$jobMediaData->videoLocation ;
                                        ?>
                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <video  controls>
                                        <a href="<?= $filepath; ?>" target="new"><source class="img-fluid" type='video/mp4' src='uploads/woodyJobMedia/<?php echo $jobMediaData->videoLocation ;?>' ></a>
                                        </video>       
                                        </div>
                        <?php }}  
                        } ?>
                    </div>
                </div>      
             </div>
        
               
        
            <hr>
            <div class="Card-footer pl-3">
            <div class="row pr-3">
                <div class="col ">
                    <h5 class="PageProjectViewLogout-signupFormHeading"><b>Offer to work on this job now! Bidding closes in 6 days</b></h5>
                </div>
                <div class="col">
                <div class="PageProjectViewLogout-timeLimit text-right">
                <div class="PageProjectViewLogout-timeExpire-label">
                    <span class="text-wrap">
                        Open - 6 days left
                    </span>
                </div> 
                </div>
                </div>
            </div>
           
            <form action="#" >
                <div class="form-row  pr-3 pb-3 align-item-center">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Your Bid">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Phone No">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-danger btn-block " data-subsection="project-bid">Bid on this job</button>
                </div>            
                   
                </div>
            </form>
            </div>

            <div class="PageProjectViewLogout-feature pl-3 pt-3 pb-3">
            <div class="PageProjectViewLogout-feature-Item"><span class="text-success"><i class="fa fa-check" aria-hidden="true"></i>
                </span></span> Set your budget and timeframe
            </div>
            <div class="PageProjectViewLogout-feature-Item"><span class="text-success"><i class="fa fa-check" aria-hidden="true"></i>
                </span></span> Outline your proposal
            </div>
            <div class="PageProjectViewLogout-feature-Item"><span class="text-success"><i class="fa fa-check" aria-hidden="true"></i>
                </span></span> Get paid for your work
            </div>
            <div class="PageProjectViewLogout-feature-Item"><span class="text-success"><i class="fa fa-check" aria-hidden="true"></i>
            </span></span> It&#039;s free to sign up and bid on jobs
            </div>
            </div>

            </div>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>