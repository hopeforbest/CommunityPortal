<?php
require_once '../../public/includes/autoload.php';
use app\Models\util\DBUtil;
use app\Controller\UserManager;
use app\Models\entity\User;
ob_start();
include 'includes/security.php';

$formerror="";
$firstname="";
$lastname="";
$email= $_GET["updateUseremail"];
$password="";
$job="";
$companyname="";
$city="";
$country="";


if(isset($_GET["updateUseremail"])){
		
	$UM=new UserManager();
	$existuser=$UM->getUserByEmail($_GET["updateUseremail"]);
    $firstname=$existuser->firstName;
	$lastname=$existuser->lastName;
	$email=$existuser->email;
	$password=$existuser->password;
	$job=$existuser->job;
	$companyname=$existuser->companyname;
	$city=$existuser->city;
	$country=$existuser->country;

		if($firstname!='' && $lastname!='' && $email!='' && $job!='' && $companyname!='' && $city!='' && $country!='')
		{
			$UM=new UserManager();
			$existuser=$UM->getUserByEmail($_GET["updateUseremail"]);
			$existuser->firstName=$_REQUEST['FirstName'];
			$existuser->lastName=$_REQUEST['LastName'];
			$existuser->email=$_REQUEST['Email'];
			$existuser->job=$_REQUEST['Job'];
			$existuser->companyname=$_REQUEST['CompanyName'];
			$existuser->city=$_REQUEST['City'];
			$existuser->country=$_REQUEST['Country'];
			$UM->saveUser($existuser);
				   
		}
 }else{
      $formerror="Record Not Found !......";
  }
  

if (isset($_REQUEST['search'])) {
	$searchvalue =  $_REQUEST['txtSearch'];
	$_SESSION['searchvalue'] = $searchvalue ;
	header('Location:loginsucesspage.php');
}   
?>   
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
	<title>Login page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/portalstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.14.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src = "https://code.jquery.com/jquery-1.10.4.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src = "js/registration.js"></script>
</head>
<body>
 <div class="container-fluid"> 
<?php include 'includes/header.php';?>
</div>


 <div class="container ">
    	<form  id="loginform" class=" cent regiForm" action="" method="post" >
            <center><h5 style="color:white">Hi<span style="color:yellow"> <?=$_GET["updateUseremail"];?> </span> you can update your details </h5></center><br>
			
			<div id="err"></div>
			<div id="error"><?=$formerror?></div>
			
			<div class="col-md-9">
				 
				<div class="row">
				<div class="form-group" >
					<label for  ="txt_FirstName" class="control-label col-md-3" col-form-label>FirstName</label>
					<div class="col-md-6">
						<input type="text" class="form-control input-md" id="txt_FirstName"  name="FirstName" value="<?=$firstname?>" ><br>
					</div>mckl
				</div>
				</div>	
			
				<div class="row">
				<div class="form-group " >
					<label for  ="txt_LastName" class="control-label col-md-3" col-form-label>LastName</label>
						<div class="col-md-6 .row-bottom-margin">
							<input type="text" class="form-control input-md" id="txt_LastName"  name="LastName" value="<?=$lastname?>" ><br>
						</div>
				</div>
				</div>
				
				<div class="row">
				<div class="form-group " >
					<label for  ="txt_LastName" class="control-label col-md-3" col-form-label>Email</label>
						<div class="col-md-6 .row-bottom-margin">
							<input type="text" class="form-control input-md" id="txt_LastName"  name="Email" value="<?=$email?>" ><br>
						</div>
				</div>
				</div>
				
				
												
				<div class="row">
				<div class="form-group " >
					<label for  ="txt_Job" class="control-label col-md-3" col-form-label>Job</label>
						<div class="col-md-6">
							<input type="text" class="form-control input-md" id="txt_Job"  name="Job" value="<?=$job?>" ><br> 
           				</div>
				</div>
				</div>
				
				<div class="row">
				<div class="form-group " >
					<label for  ="txt_CompanyName"  class=" control-label col-md-3" col-form-label>Company Name</label>
					<div class="col-md-6">
						<input type="text" class="form-control input-sm" id="txt_CompanyName"  name="CompanyName" value="<?=$companyname?>" >
           			</div>
				</div>
				</div>		
				
				<div class="row">
				<div class="form-group  ">
					<label for  ="txt_City" class=" control-label col-md-3" col-form-label>City</label>
						<div class="col-md-6">
								<input type="text" class="form-control input-md" id="txt_City"  name="City" value="<?=$city?>" ><br> 
           				</div>
				</div>
				</div>	
				
				<div class="row">
				<div class="form-group " >
					<label for  ="txt_Country" class="control-label col-md-3" col-form-label>Country</label>
						<div class="col-md-6">
							<input type="text" class="form-control input-md" id="txt_Country"  name="Country" value="<?=$country?>" ><br> 
           				</div>
				</div>
				</div>
				<div class="row">
				<div class="form-group " >
						<div class="col-md-8">
							<div class='btn-group'>
								 <input type="hidden" name="submitted" value="1">
								 <button class="btn-Primary " name= "update" onclick="return formValidation();">update</button>
								 <input type="reset" value="Cancel" class="btn-Primary onclick="javascript:clearForm();"">
							</div>
           				</div>
				</div>
				</div>
				
				
				
				
				</div>
				<div class="col-md-3">
				<br>
				<br>
				<br>
				<center><img src="image/profileimage.jpg"class="img-circle" alt="Cinque Terre" width="100" height="90" style="padding-top:5px;"> 
					<h6 style="margin-left:5px;">Pick a Photo</h6>
					<h6 style="margin-left:5px;margin-right:5px;">Size Limit 2MB</h6>
					<button class="btn-Primary" name="uploadPhoto">Edit Your Photo</button>
				</div>
		</form> 
</div>        
<div class="container"> 
	<?php include 'includes/footer.php';?>
</div>
 </body>
</html>