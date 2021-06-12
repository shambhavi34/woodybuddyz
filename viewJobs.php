
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Browse Jobs</title>

    <!-- -------------Font Awesome ------------- -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
    <!-- css  -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!----------------- Added Stylesheets------- -->
    <link rel="stylesheet" href="assets/css/commonstyle.css">
    <link rel="stylesheet" href="assets/css/style3.css">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
</head>

<body>
 <?php include 'includes/navbar.php';?>
  <br><br><br><br>
 
 
    <div class="container">
        <div class="row">
            <!---------- =====================Search Filter ===========================-->
            <div class="col-lg-4 col-xs-12 col-sm-12 col-md-12 col-xl-4">
                <div class="project-sidebar">
                    <div class="heading">
                        <h4>Search Filters</h4>
                        <a href="">Clear Result</a>
                    </div>
                    <div class="project-widgets">
                        <form action="">
                            <div class="panel panel-default">
                                <div class="panel-heading active"> <a role="button" class="" data-bs-toggle="collapse"
                                        href="#search-widget"> Search by Keyword </a> </div>
                                <div id="search-widget" class="panel-collapse collapse show" role="tabpanel">
                                    <div class="panel-body" tabindex="1" style="overflow: hidden; outline: none;">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="title"
                                                placeholder="What are you looking for" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading active"> <a role="button" class="" data-bs-toggle="collapse"
                                        href="#category-widget"> Type </a> </div>
                                <div id="category-widget" class="panel-collapse collapse show" role="tabpanel">
                                    <div class="panel-body" tabindex="2" style="overflow: hidden; outline: none;">
                                        <ul class="main">
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="category[]" value="165" id="165">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="165">Local Jobs </span>

                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="category[]" value="22" id="22">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="22">Recruiter Jobs</span>

                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="category[]" value="17" id="17">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="17">Featured Jobs</span>
                                                <ul></ul>
                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="category[]" value="19" id="19">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="19">Full Time Jobs</span>
                                                <ul></ul>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading active"> <a role="button" class="" data-bs-toggle="collapse"
                                        href="#price-widget"> Price </a> </div>
                                <div id="price-widget" class="panel-collapse collapse show" role="tabpanel">
                                    <div class="panel-body" tabindex="3" style="overflow: hidden; outline: none;">

                                        <div class="extra-controls">
                                            <input type="text" class="services-input-from form-control" value=""
                                                name="price-min" placeholder="min value">
                                            <input type="text" class="services-input-to form-control" value=""
                                                name="price-max" placeholder="max value">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading active"> <a role="button" class="collapsed"
                                        data-bs-toggle="collapse" href="#skills-widget" aria-expanded="false"> Filter by
                                        Skills </a> </div>
                                <div id="skills-widget" class="panel-collapse collapse" role="tabpanel" style="">
                                    <div class="panel-body" tabindex="4" style="overflow: hidden; outline: none;">
                                        <ul class="main">
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="skill[]" value="113" id="113">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="113">Carpenter</span>
                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="skill[]" value="103" id="103">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="103">Plumber</span>
                                            </li>



                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="skill[]" value="100" id="100">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="100">Other</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading active"> <a role="button" class="" data-bs-toggle="collapse"
                                        href="#english-level-widget">Preferred Time</a> </div>
                                <div id="english-level-widget" class="panel-collapse collapse show" role="tabpanel">
                                    <div class="panel-body" tabindex="5" style="overflow: hidden; outline: none;">
                                        <ul class="main">
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="english-level[]" value="93" id="93">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="93">Morning</span>
                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="english-level[]" value="167" id="167">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="167">Afternoon</span>
                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="english-level[]" value="91" id="91">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="91">Evening</span>
                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="english-level[]" value="92" id="92">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="92">AnyTime</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading active"> <a role="button" class="collapsed"
                                        data-bs-toggle="collapse" href="#languages-widget" aria-expanded="false">
                                        Languages </a> </div>
                                <div id="languages-widget" class="panel-collapse collapse" role="tabpanel" style="">
                                    <div class="panel-body" tabindex="6" style="overflow: hidden; outline: none;">
                                        <ul class="main">
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="language[]" value="35" id="35">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="35">Hindi</span>
                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="language[]" value="34" id="34">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="34">English</span>
                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="language[]" value="32" id="32">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="32">Punjabi</span>
                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="language[]" value="37" id="37">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="37">Other</span>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading active"> <a role="button" class="collapsed"
                                        data-bs-toggle="collapse" href="#locations-widget" aria-expanded="false"> Filter
                                        Distance </a> </div>
                                <div id="locations-widget" class="panel-collapse collapse" role="tabpanel" style="">
                                    <div class="panel-body" tabindex="7" style="overflow: hidden; outline: none;">
                                        <ul class="main">
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="location[]" value="333" id="333">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="333">From 1km to 3km</span>

                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="location[]" value="335" id="335">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="335">From 3km to 5km</span>

                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="location[]" value="345" id="345">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="345">From 5km to 8km</span>

                                            </li>
                                            <li class="">
                                                <div class="pretty p-icon p-thick p-curve">
                                                    <input type="checkbox" name="location[]" value="258" id="258">
                                                    <div class="state p-warning">
                                                        <i class="icon fa fa-check" aria-hidden="true"></i>
                                                        <label></label>
                                                    </div>
                                                </div>
                                                <span for="258">From 8Km to 10km</span>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn">

                                <p><i>Select the options and press the Filter Result button to apply the changes </i>
                                </p>
                                <input type="hidden" name="sort" value="">
                                <button class="btn btn-theme btn-block" type="submit"> Filter Result</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ----------------------Search Filter End -->

















            <div class="col-xl-8 col-xs-12 col-sm-12 col-md-12 col-lg-8">
                <div class="row">
                    <!-- -------top Found Results Page------------------------------- -->
                    <div class="col-xl-12 col-xs-12 col-sm-12 col-md-12">
                        <div class="services-filter-2" style="height:90px">
                            <form>
                                <div class="heading-area">
                                    <h4>Found 9 Results </h4>
                                </div>
                                <div class="filters">
                                    <select class="default-select select2-hidden-accessible" name="sort" id="order_by"
                                        tabindex="-1" aria-hidden="true" style="
                                        width: 351px;
                                        padding-left: 12px;
                                        border-radius: 6px;
                                        background-color: #f4f6f9;
                                        color: black;
                                        
                                    ">
                                        <option value="">Sort by</option>
                                        <option value="new-old"> Date: New to old</option>
                                        <option value="old-new"> Date: Old to new</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!------------------------------- Found Results Page End --------------------------------->
                    <?php
        if(isset($_SESSION['success'])){
            echo '
            <div class="alert alert-success alert-dismissible show" role="alert">
                '.$_SESSION['success'].'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>';
            unset($_SESSION['success']);
             echo '</div>'; 
            
          }
          ?>	
        <?php
        // for ($x = 0; $x <= 10; $x++)  { 
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
        $pagLink = "<div class='pt-3'><ul class='justify-content pagination '>

        <li class='page-item'><a class='page-link' href='viewJobs.php?page=".($page-1)."'>Previous</a></li>";
        for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='viewJobs.php?page=".$i."'>".$i."</a></li>";	
        }
        echo $pagLink ." <li class='page-item'><a class='page-link' href='viewJobs.php?page=".($page+1)."'>Next</a></li></ul></div>";  
        $user_data = array_slice($response_data->jobs, $start_from, $limit-1);
        foreach ($user_data as $job_data) { 
        
        ?>




                    <!--------------------------------JOb CARD STARTS----------------------------------------  -->
                    <div class="col-xl-12 col-xs-12 col-lg-12 col-sm-12 col-md-12" style="margin-top: -65px;">
                        <div class="fr-right-detail-box"style="margin-bottom:0px">
                            <div class="fr-right-detail-content">
                                <div class="fr-right-details-products">
                                    <div class="features-star"><i class="fa fa-star" aria-hidden="true"></i></div>
                                    <div class="fr-right-views">
                                        <ul>
                                            <li><span><a href="" style="font-weight: 500;"><i class="fa fa-check"
                                                            aria-hidden="true"></i> 
                                <?php 
                                date_default_timezone_set('Asia/Kolkata');
                                $date1 = strtotime($job_data->prefferedToDate);
                                $date2 = strtotime(date("Y-m-d"));
                                // $diff=date_diff($date1,$date2);
                                if(($date1-$date2)/60/60/24>=0){
                                echo '<span style="background-color: rgba(255, 180, 19, 0.2);font-weight: 500;padding: 4px 12px;
                                border-radius: 4px;font-size: 16px;">'.($date1-$date2)/60/60/24 .'days left</span>'; 
                                }
                                else{
                                  echo '<span style="background-color: rgba(255, 180, 19, 0.2);font-weight: 500;padding: 4px 12px;
                                  border-radius: 4px;font-size: 16px;">Expired</span>';   
                                }
                                ?>
                                                    </a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="fr-jobs-price">
                                        <div class="style-hd">
                                        <?php echo $job_data->paymentMinValue."- ".$job_data->paymentMaxValue; ?><small class="protip" data-pt-position="top"
                                                data-pt-scheme="black"
                                                data-pt-title="Estimated Hours 100<br><br>Total: 40*100= $4,000.00"><i
                                                    class="far fa-question-circle" aria-hidden="true"></i></small>
                                        </div>
                                        <p><?php  if($job_data->paymentPref == 'Hour'){ echo "/".$job_data->paymentPref; } ?></p>
                                    </div>
                                    <div class="fr-right-details2">
                                        <a href="/">
                                            <h3 title="iOS and Android SENIOR mobile app developer"><?php echo $job_data->jobTitle; ?></h3>
                                        </a>
                                    </div>
                                    <div class="fr-right-product">
                                        <ul class="skills">
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
                                            <li class=""><a href=""><?php echo $jobSkillData->skillName ?></a>
                                             <?php }
                                }?>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="fr-right-index">
                                        <p> <?php  echo 'Preffered Time Slot: '.($job_data->prefferedTime); ?> </p>
                                        <p><?php echo $job_data->jobDesc; ?></p>

                                    </div>
                                </div>
                            </div>
                            <style>
                                .fr-right-list ul li p {
                                    font-weight: 600;
                                    color: #000;
                                }

                                .fr-right-list ul li span {
                                    color: #777;
                                    font-weight: 500;

                                }
                            </style>
                            <div class="fr-right-information">
                                <div class="fr-right-list">
                                    <ul>
                                        <li>
                                            <p class="heading"> Preferred Language</p>
                                            <div>
                                                <span><?php echo $job_data->languagePreference ; ?></span>
                                            </div>
                                        </li>
                                       
                                        <li>
                                            <p class="heading">Location</p>
                                            <span><?php echo   $job_data->address.', '.$job_data->city; ?> </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fr-right-bid">
                                    <ul>
                                        <li> <a href="javascript:void(0);" class="mark_fav protip" data-post-id="2669"
                                                data-pt-position="top" data-pt-scheme="black"
                                                data-pt-title="Save project">
                                            </a> 
                                        </li>
                                         <form action="bidding.php" method="post">
                                        <input type="hidden" name="jobId" value="<?php echo $job_data->jobId; ?>" >
                                        <input type="hidden" name="custid" value="<?php echo $job_data->custid; ?>" >
                                        <button type="submit" name="submitbtn" class="btn btn-theme btn-bid-now">
                                            Bid Now
                                        </button>
                                        </form>            
                                        <!--<li><a href="https://www.google.com/" class="btn btn-theme btn-bid-now"> Bid-->
                                        <!--        Now</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                        <!-- --------------------------Job CARDS END-------------------------- -->

                      


                    </div>
                     <?php
                        }
                    ?>
                </div>
            </div>
        </div>

<br>

    </div>




 <?php include 'includes/footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>
</body>
                            
</html>