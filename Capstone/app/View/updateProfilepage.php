<?php
require_once '../../public/includes/autoload.php';
use app\Models\util\DBUtil;
use app\Controller\UserManager;
use app\Models\entity\User;
ob_start();
include '../../public/includes/security.php';

$formerror="";
$firstname="";
$lastname="";
$email=$_SESSION["email"];
$password="";
$job="";
$companyname="";
$city="";
$country="";


if(!isset($_REQUEST["submitted"])){
	$UM=new UserManager();
	$existuser=$UM->getUserByEmail($_SESSION["email"]);
    $firstname=$existuser->firstName;
	$lastname=$existuser->lastName;
	$email=$existuser->email;
	$password=$existuser->password;
	$job=$existuser->job;
	$companyname=$existuser->companyname;
	$city=$existuser->city;
	$country=$existuser->country;
	}else{
		$firstname=$_REQUEST["FirstName"];
		$lastname=$_REQUEST["LastName"];
		$job=$_REQUEST["Job"];
		$companyname=$_REQUEST["CompanyName"];
		$city=$_REQUEST["City"];
		$country=$_REQUEST["Country"];

		if($firstname!='' && $lastname!='' && $email!='' && $job!='' && $companyname!='' && $city!='' && $country!='')
		{
		   $update=true;
		   $UM=new UserManager();
		   $emailtoupdate = $_SESSION['email'];
		   $newemail      = $email;
		   if($newemail!=$emailtoupdate){
			   $existuser=$UM->getUserByEmail($emailtoupdate);
			   if(isset($existuser)){
				   $formerror="User Email already in use, unable to update email";
				   $update=false;
			   }
		   }
		   if($update){
				   $existuser=$UM->getUserByEmail($email);
				   $existuser->firstName=$firstname;
				   $existuser->lastName=$lastname;
				   $existuser->email=$email;
				   $existuser->job=$job;
				   $existuser->companyname=$companyname;
				   $existuser->city=$city;
				   $existuser->country=$country;
				   $UM->saveUser($existuser);
				   
			   }
  }else{
      $formerror="Please provide required values";
  }
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
	<title>Community Portal-ABC</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/portalstyle.css">
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	
	<script src = "../../public/js/loginform.js"></script>
	<script src="../../public/js/jquery-3.3.1.min.js"></script>
	<!--  abovejquery should be first -->
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>
<body>
 <div class="container-fluid"> 
<?php include '../../public/includes/header.php';?>
</div>


 <div class="container ">
    	<form  id="loginform" class=" cent regiForm" action="" method="post" >
            <center><h5 style="color:white">Hi<span style="color:yellow"> <?=$email?> </span> you can update your details </h5></center><br>
			
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
				
		</form> 
</div>        
<div class="container"> 
	<?php include '../../public/includes/footer.php';?>
</div>
    
                  
</body>
</html>