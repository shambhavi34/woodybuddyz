
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Browse Jobs</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
      <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- Main Style Css -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="assets/css/commonstyle.css">
<style>
    p {
        overflow:hidden;
        -webkit-line-clamp: 3;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }
    .form-v5-content {
        border-radius:0px;
        width: 850px;
    }
   
    .green{
        background-color:#a1ffa1;
        color:black;
        font-weight:400px;
        border-radius: 16px;
        border:none
    }
    .red{
        background-color:rgba(255, 0, 0, 0.4);
        color:black;
        font-weight:400px;
        border-radius: 16px;
        border:none
    }
    }
</style>
</head>
<body class="form-v5">
  <?php include 'includes/navbar.php';?>
	<div class="page-content">
      
		<div class="form-v5-content">
        <!-- content start -->
          <?php
          if(isset($_SESSION['success'])){
            echo "
            <div class='alert alert-success alert-dismissible'>
                ".$_SESSION['success']."
             <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            
            </button>
            </div>";
            unset($_SESSION['success']);
          }
          ?>
        
        <?php 
        $api_url = 'https://buddyzapp.com/api/buddyzWeb/view/getAllJobs/woody';
        $json_data = file_get_contents($api_url) ;
        $response_data = json_decode($json_data);
        // $jobs_data = $response_data->job;
        $total_records = count($response_data->jobs);  
        $limit = 10;
        if (isset($_GET["page"])) {
            $page  = $_GET["page"]; 
            } 
            else{ 
            $page=1;
            };  
        $start_from = ($page-1) * $limit;  
        $total_pages = ceil($total_records / $limit);

/* echo  $total_pages; */
$pagLink = "<div class='pt-3'><ul class='justify-content-end pagination pr-3'>
<li class='page-item'><select class= event-type-select'>
<option value='all'>Select Location</option>
<option value='New Delhi'> New Delhi</option>
<option value='Mumbai'>Mumbai</option>
<option value='Pune'>Pune</option>
<option value='Jaipur'>Jaipur</option>
<option value='Agra'>Agra</option>
<option value='Indore'>Indore</option>
</select>
<style>
padding:10dp;
</style>
<li class='page-item'><select class= event-type-select'>
<option value='all'>Job Type</option>
<option value='Door Repair'> Door Repair</option>
<option value='Furniture Assembly'>Furniture Assembly </option>
<option value='Lock Installation'>Lock Installation</option>
<option value='TV Installation'>TV Installation</option>
<option value='W'>Water Leakage</option>
<option value='Drill and Hang'>Drill and Hang</option>
</select>


<li class='page-item'><a class='page-link' href='viewJob1.php?page=".($page-1)."'>Previous</a></li>";
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='viewJob1.php?page=".$i."'>".$i."</a></li>";	
}
echo $pagLink ." <li class='page-item'><a class='page-link' href='viewJob1.php?page=".($page+1)."'>Next</a></li></ul></div>";  
$user_data = array_slice($response_data->jobs, $start_from, $limit-1);
        foreach ($user_data as $job_data) { 
        ?>
            <div class="card rounded-0">
                <div class="card-body textstyle">
                    <div class="row pt-3">
                        <div class="col-sm-8 pl-5">
                            <div class="row">
                                <div class="card-title">
                                <b><?php echo $job_data->jobTitle; ?></b>
                                </div>
                                
                                &nbsp; &nbsp;<span><small> <?php 
                                date_default_timezone_set('Asia/Kolkata');
                                $date1 = strtotime($job_data->prefferedToDate);
                                $date2 = strtotime(date("Y-m-d"));
                                // $diff=date_diff($date1,$date2);
                                if(($date1-$date2)/60/60/24>=0){
                                echo '<button class="green">'.($date1-$date2)/60/60/24 .'days left</button>'; 
                                }
                                else{
                                  echo '<button class="red">Expired</button>';   
                                }
                                ?>
                                
                                </small></span>
                             </div>
                        <div class="row">
                            <small>
                            
                            <p class="text-wrap">
                          <?php  echo 'Preffered Time Slot: '.($job_data->prefferedTime); ?><br>
                            <?php echo $job_data->jobDesc; ?><br>
                           
                            </p>
                            
                             <h6><span class="badge badge-primary">Preffered Langage: <?php echo $job_data->languagePreference; ?> </span></h6>
                            <?php 
                           
                                $url = "https://buddyzapp.com/api/buddyzWeb/view/getJobSkills/woody/".$job_data->jobId;
                                if (false == ($jsonSkill = @file_get_contents($url, true) )){
                                echo "";
                                }
                                else{
                                $responseSkill = json_decode($jsonSkill);?>
                                <ul class="list-inline">
                                <?php foreach ($responseSkill->jobsSkill as $jobSkillData) { 
                                ?>
                                <li class="list-inline-item text-primary"><?php echo $jobSkillData->skillName ?></li>
                                <?php }
                                }?>
                                </ul>
                            <p class="text-wrap"> <i class="fa fa-map-marker" style="font-size:24px;color:rgba(40, 58, 90, 0.9)"></i>
                            &nbsp;Location: <?php echo   $job_data->address.', '.$job_data->city; ?></p>
                            </small>
                            </div>
                        </div>
                        <div class="col-sm-4 pl-5 justify-content-end ">
                            <span><b>Rs <?php echo $job_data->paymentMinValue."- ".$job_data->paymentMaxValue; ?></b> </span>
                             <span><?php  if($job_data->paymentPref == 'Hour'){ echo "/".$job_data->paymentPref;} ?></span><br>
                            <span><small>No of bids</small></span><br><br>
                            <form action="openBid1.php" method="post">
                            <input type="hidden" name="jobId" value="<?php echo $job_data->jobId; ?>" >
                            <input type="hidden" name="custid" value="<?php echo $job_data->custid; ?>" >
                            <button type="submit" name="submitbtn" class="btn btn-success">Bid Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } 
       
        ?>
           
        </table>
          

</div>
</div>
</div>


  <?php include 'includes/footer.php' ?>
</body>
</html>