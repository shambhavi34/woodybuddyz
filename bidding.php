<?php
session_start();
if(isset($_POST['submitbid'])){
$msg = NULL;
unset($_POST['submitbid']);

$a=array();
$t=array();
$t['tname']="userSPBid";
$a["requestHeader"]=$t;

$a["requestBody"]=$_POST;
// echo json_encode($a);

function httpPost($url, $data){
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($curl);
  curl_close($curl);
  return $response;
}
// Call API for inserting woody job details in woodyJob Table
$response = httpPost("https://buddyzapp.com/api/woody/view/insert",
	json_encode($a)
);


// echo $response;
$decoderesponse = json_decode($response);


$_SESSION['msg'] =  $decoderesponse->message;
header('Location:https://buddyzapp.com/woodybuddyz/viewJobs.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>bid</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="assets/css/commonstyle.css">
	<!-- <link href="assets/css/style.css" rel="stylesheet"> -->
<!--===============================================================================================-->
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
<!--===============================================================================================-->
</head>
<style>
	.input-file-container {
  position: relative;
  width: 225px;
} 
.js .input-file-trigger {
  display: block;
  padding: 14px 45px;
  background: #00b3e7;
  color: #fff;
  font-size: 1em;
  transition: all .4s;
  cursor: pointer;
}
.js .input-file {
  position: absolute;
  top: 0; left: 0;
  width: 225px;
  opacity: 0;
  padding: 14px 0;
  cursor: pointer;
}
.js .input-file:hover + .input-file-trigger,
.js .input-file:focus + .input-file-trigger,
.js .input-file-trigger:hover,
.js .input-file-trigger:focus {
  background: #4481ec;
  color: #fff;
}

.file-return {
  margin: 0;
}
.file-return:not(:empty) {
  margin: 1em 0;
}
.js .file-return {
  font-style: italic;
  font-size: .9em;
  font-weight: bold;
}
.js .file-return:not(:empty):before {
  content: "Selected file: ";
  font-style: normal;
  font-weight: normal;
}
 .btn {
  border: 2px solid #4481ec;
  border-radius:25px;
  background-color:white
}
</style>
<body>
<?php include 'includes/navbar2.php';?>
<br><br>
<div class="container-contact100">
		<div class="wrap-contact100">

<?php 
if(isset($_POST['submitbtn'])){
	$_SESSION["jobId"] = $_POST['jobId']; 
  
}
$id = $_SESSION["jobId"];
$api_url = "https://buddyzapp.com/api/buddyzWeb/view/getJob/woody/$id";
$json_data = file_get_contents($api_url) ;

$response_data = json_decode($json_data);
$job_data = $response_data->job;

?>

            
           
	
			<form class="contact100-form" id='contactform'  method='POST' name='contactform'  onsubmit="return validateForm();"   action="<?php echo $_SERVER['PHP_SELF']; ?>" >
				<span class="contact100-form-title">
					Bidding <?php echo $msg ; ?>
				</span>
			 
			    <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Title of Work *</span>
					<input class="input100" type="text"  id="JobTitle" value=<?php echo $job_data->jobTitle; ?> readonly >
				</div> 
				<!-- <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" id="email" placeholder="Enter Your Email ">
				</div>  -->

				<!-- <div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="text" name="phone" id="phone" placeholder="Enter Number Phone">
				</div>  -->
				

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Bid Describe*</span>
					<textarea class="input100" name="bidDesc" placeholder="Write here" id="bidDesc"></textarea>
					<input type="hidden" name="jobId" value="<?php echo $_SESSION["jobId"]; ?>" >
					<input type="hidden" name="channelId" value="<?php echo $_SESSION["channelId"]; ?>" >
                    <!-- here custId come from token for now it is empty -->
                    <input type="hidden" name="custid" value="<?php echo $_SESSION['custid']; ?>" >
				</div>

				
				<div class="wrap-input100  validate-input bg1">
					<span class="input100">Bidding Amount*</span><br>
					<input type="text" class="form-control" placeholder="Bid Amount" name="bidAmount">

				</div>
				<!-- <div class="wrap-input100 validate-input bg1">
				<div class="dropzone input100" class="dropzone"  id="myDropzone">
					<input type="file" name="dropfiles" multiple>
				</div>
				 </div>  -->
							
				
				<div class="wrap-contact100-form-range">
						
					<span> Budget Range<br>
					
					
				
					<br>
					<div class="contact100" >
					<div class="row">
						<div class="col-sm-6">
						<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your City">
							<span class="label-input100">Min *</span>
							<input class="input100" type="text"  id="Paymentminvalue" value=<?php echo $job_data->paymentMinValue ?> placeholder="From " readonly>
						</div>
						</div>
						<div class="col-sm-6">
						<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your City">
								<span class="label-input100">Max *</span>
								<input class="input100" type="text"  id="Paymentmaxvalue" value=<?php echo $job_data->paymentMaxValue ?> placeholder="To" readonly>
						</div>
						</div>
					</div>
					</div>
				</div>
					<!-- <span class="label-input100">Your Full Address *</span> -->
					<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Required date to avail services *</span>
					<input class="input100" type="date"  id="PrefferedFromDate" value=<?php echo $job_data->prefferedToDate; ?> readonly >
				</div> 
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">What day can you serve *</span>
					<input class="input100" type="date"  id="serviceDate" name="serviceDate" value="" >
				</div> 
				

				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Preferable time Slot*</span><br>
					<input class="input100" type="text"  id="PrefferedTime" placeholder="Time Slot"  >
					<button class="btn  buttontime" type="button" onclick = 'timeadd(this.value);' value="Morning(8-12 A.M.)">Morning(9-12 A.M.)</button>
					<button class="btn buttontime" type="button" onclick = 'timeadd(this.value);' value="Afternoon(12-4 P.M.)">Afternoon(12-4 P.M.)</button>
					<button class="btn  buttontime" type="button" onclick = 'timeadd(this.value);' value="Evening(4-8 P.M.)">Evening(4-7 P.M.)</button>
					<!-- <input type="datetime-local" id="PrefferedDateTime" name="prefferedDateTime"> -->
				</div>

				


		

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" id="submitbid"  name="submitbid" style="background-color:#00b3e7">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
			
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>

	
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
	
	<script type="text/javascript">
			console.log('function not called');
			
				function validateForm() {
				var projectTitle =  document.forms["contactform"]["jobTitle"].value; 
				var projectDesc = document.forms["contactform"]["JobDesc"].value;
		
		
				var prefferedDate = document.forms["contactform"]["PrefferedToDate"].value;
				var prefferedTime = document.forms["contactform"]["PrefferedTime"].value;
		
				
				var paymentPref  = document.forms["contactform"]["PaymentPref"].value;
				
				// var file = document.getElementById("media"); 
				if(projectTitle == "" ||projectTitle== null||projectDesc==null||projectDesc==""){
						// returnToPreviousPage();
						// document.getElementById("ProjectName").style.borderColor = "red";
						// event.preventDefault();
						alert('complete details');
						return false;		
					  }
					  
					  else if(prefferedDate==""||prefferedTime==""){
						alert('complete Date  Time Details');
						return false;
					  }
					  else if(paymentPref==""||paymentPref==null){
						// event.preventDefault();
						alert('complete Payment Preference details');
						return false;
					  }
					
					  
					  else{	
				  		return true;
					  }
			}

			
				 </script>
		
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	
	<script>
// 	    var filterBar = document.getElementById('filter-bar');
// 		Lower = document.getElementById('value-lower');
// 		Upper = document.getElementById('value-upper');
// 		Paymentminvalue = document.getElementById('Paymentminvalue');
// 		Paymentmaxvalue = document.getElementById('Paymentmaxvalue');
	    

// 	    var skipValues = [
// 	    document.getElementById('value-lower'),
// 		document.getElementById('value-upper')
		
// 	    ];
		
// 	    var changeValues = [
// 	    document.getElementById('Paymentminvalue'),
// 		document.getElementById('Paymentmaxvalue')
		
// 	    ];
// 	    filterBar.noUiSlider.on('update', function( values, handle ) {
// 			var value = values[handle]
// 	        changeValues[handle].value = Math.round(values[handle]);

// 		}
// 		);
// 		document.getElementById('Paymentminvalue').addEventListener('change', function(){
// 			filterBar.noUiSlider.set([ this.value,null]);
// 	  });
// 	  document.getElementById('Paymentmaxvalue').addEventListener('change', function(){
// 			filterBar.noUiSlider.set([null, this.value]);
// 	  });
	 
	
		function timeadd(val){
		document.getElementById('PrefferedTime').value = val;  
		}
	
	</script>
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
 
	document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  
</script>
<?php include('includes/footer.php'); ?>

</body>
</html>
