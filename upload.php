<?php
session_start();
if(isset($_POST['submitbtn'])){
 
unset($_POST['submitbtn']);

$serviceArray = preg_split ("/\,/", $_POST['services']);  
unset($_POST['services']);
// print_r($serviceArray); 

$a=array();
$t=array();
$t['tname']="userJobs";
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
// Call API for inserting user job details in userJobs Table
$response = httpPost("https://buddyzapp.com/api/woody/view/insert",
	json_encode($a)
);


echo $response;
$decoderesponse = json_decode($response);

if( $decoderesponse->message=='Successfully Inserted'){
  $Job_Id = $decoderesponse->lastInsertedID;
  //for  inserting required job skills in userJobSkills Table
 
  
  foreach($serviceArray as $serviceName) {
       $sericear=array();
       $title=array();
       $services = array();
//   echo json_encode($serviceArray);
       $title['tname']="userJobSkill";
    $servicear["requestHeader"]=$title;
      $services['jobId'] = $Job_Id;
      $services['skillName'] = $serviceName;
      $services['custid'] = $_SESSION['custid'];
      $services['channelId'] = $_SESSION['channelId'];
      $servicear['requestBody'] = $services;
    //   echo json_encode($servicear);
      $response = httpPost("https://buddyzapp.com/api/woody/view/insert",
      json_encode($servicear)
      );
     }

  //start of inserting media files in woodyJobMedia Table
  if (!empty($_FILES))
  {
    // echo json_encode($_POST);
    
      $countfiles = count($_FILES['media']['name']);
      $Job_Id = $decoderesponse->lastInsertedID;
      for($i=0;$i<$countfiles;$i++){
          $filename = $_FILES['media']['name'][$i];
          $tempname1 = $_FILES['media']['tmp_name'][$i];   
          $destination1 = 'uploads/woodyJobMedia/' . $filename;
          move_uploaded_file($tempname1,$destination1);
          $ar=array();
          $title=array();
          $media = array();
          $title['tname']="userJobMedia";
          $ar["requestHeader"]=$title;
          $mime = $_FILES['media']['type'][$i];
         
        if(strstr($mime, "video/")){
          $media['videoLocation'] = $filename;
          $media['imageLocation'] = '';
          $media['jobId'] = $Job_Id;
          $media['custid'] = $_SESSION['custid'];
          $media['channelId'] = $_SESSION['channelId'];
          $ar['requestBody'] = $media;
        }else if(strstr($mime, "image/")){
          $media['videoLocation'] = '';
          $media['imageLocation'] = $filename;
          $media['jobId'] = $Job_Id;
          $media['custid'] = $_SESSION['custid'];
          $media['channelId'] = $_SESSION['channelId'];
          $ar['requestBody'] = $media;
        }
       
        echo json_encode($ar);
        $response = httpPost("https://buddyzapp.com/api/woody/view/insert",
        json_encode($ar)
                );
                
        echo $response;
        }
          // Looping all files
          $_SESSION['success'] = 'Posted job Successfully';  
          header('location: viewJobs.php');
  }
  else{
        $_SESSION['error'] = 'Error in inserting uploaded images and video';
        header('location: PostJob.php');
      }
    } 
    else{
      $_SESSION['error'] = 'Error';
      header('location: PostJob.php');
    }
  }

else{
  $_SESSION['error'] = 'Fill up signup form first';
  header('location: PostJob.php');
  // echo 'First Fill Form';
}
   
?>