<?php
session_start();
use app\Controller\UserManager ;

require_once '../../public/includes/autoload.php';
$formerror="";
$firstname="";
$lastname="";
$email="";
$password="";
$job="";
$companyname="";
$city="";
$country="";
if(isset($_REQUEST["Register"])){
	    
		$firstname=$_REQUEST["FirstName"];
		$lastname=$_REQUEST["LastName"];
		$email=$_REQUEST["Email"];
		$password=$_REQUEST["Password"];
		$job=$_REQUEST["Job"];
		$companyname=$_REQUEST["CompanyName"];
		$city=$_REQUEST["City"];
		$country=$_REQUEST["Country"];
		if (($firstname == "")||($lastname == "")||($email == "")||($password == "")||($job == "")||($companyname == "")||($city == "")||($country == "")){
			$formerror = "all fields are mandatory";
		}			
		else
		{
		$_SESSION['firstname']=$firstname;
		$_SESSION['lastname']=$lastname;
        $_SESSION['email']=$email;
		$_SESSION['password']=$password;
		$_SESSION['job']=$job;
		$_SESSION['companyname']=$companyname;
		$_SESSION['city']=$city;
		$_SESSION['country']=$country;
		
		header('Location: RegistrationConfirmation.php');
		}
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
	<title>Community Portal-ABC</title>
	
	<link rel="stylesheet" type="text/css" href="../../public/css/portalstyle.css">
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	
	<script src = "../../public/js/loginform.js"></script>
	<script src="../../public/js/jquery-3.3.1.min.js"></script>
	<!--  abovejquery should be first -->
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src = "../../public/js/jquery-ui-1.11.4/jquery-ui.js"></script>
	
</head>

<body>
 <div class="container-fluid">
    <div class="row">
    <div class="col-md-14">
    <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#rightmenu" >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <img src="./../../public/image/logo.jpg"" width="50" height="50"  /> 
            </div>
            <div class="collapse navbar-collapse navbar-right" id="rightmenu">
            <ul class="nav navbar-nav" >
                <li><a  href="index.php"> Home </a></li
            </ul>
            </div>
            
    </nav>
    </div>
    </div>
 </div>


 <div class="container ">
    	<form  id="regiForm" class=" cent regiForm" action="" method="post" >
            <center><h3>Create your Account </h3></center><br>
			<div id="err"></div>
			<div id="error"><?=$formerror?></div>
			<div class="col-md-12">
				<div class="row">
				<div class="form-group" >
					<label for  ="txt_FirstName" class="control-label col-md-4" col-form-label>FirstName</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="txt_FirstName"  name="FirstName"  ><br>
					</div>
				</div>
				</div>	
			
				<div class="row">
				<div class="form-group " >
					<label for  ="txt_LastName" class="control-label col-md-4" col-form-label>LastName</label>
						<div class="col-md-8 .row-bottom-margin">
							<input type="text" class="form-control input-md" id="txt_LastName"  name="LastName" ><br>
						</div>
				</div>
				</div>		
				<div class="row">
				<div class="form-group" >
					<label for  ="txt_email" class=" control-label col-md-4" col-form-label>Email</label>
						<div class="col-md-8">
							<input type="text" class="form-control input-md" id="txt_Email"  name="Email" ><br>
						</div>
				</div>
				</div>		
				<div class="row">
				<div class="form-group " >
					<label for  ="txt_password" class="control-label col-md-4" col-form-label>Password</label>
						<div class="col-md-8">
							<input type="password" class="form-control input-md" id="txt_password"  name="Password" ><br> 
           				</div>
				</div>
				</div>							
				<div class="row">
				<div class="form-group " >
					<label for  ="txt_Job" class="control-label col-md-4" col-form-label>Job</label>
						<div class="col-md-8">
							<input type="text" class="form-control input-md" id="txt_Job"  name="Job" ><br> 
           				</div>
				</div>
				</div>
				
				<div class="row">
				<div class="form-group " >
					<label for  ="txt_CompanyName"  class=" control-label col-md-4" col-form-label>Company Name</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="txt_CompanyName"  name="CompanyName">
           			</div>
				</div>
				</div>		
				<br>
				<div class="row">
				<div class="form-group  ">
					<label for  ="txt_City" class=" control-label col-md-4" col-form-label>City</label>
						<div class="col-md-8">
								<input type="text" class="form-control input-md" id="txt_City"  name="City" ><br> 
           				</div>
				</div>
				</div>	
				
				<div class="row">
				<div class="form-group " >
					<label for  ="txt_Country" class="control-label col-md-4" col-form-label>Country</label>
						<div class="col-md-8">
							<input type="text" class="form-control input-md" id="txt_Country"  name="Country" ><br> 
           				</div>
				</div>
				</div>
				<div class="row">
				<div class="form-group col-md-12 " >
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class='btn-group'>
							 <button class="btn-Primary " name= "Register" onclick="return formValidation();">Register</button>
							 <input type="reset" value="Cancel" class="btn-Primary ">
							</div>
						</div>
						<div class="col-md-2"></div>
           				</div>
				</div>
				</div>
				<div class="row">				
				    <div class="col-md-12 ">
						<p> By Signing up you are agreeing to our  <a href="#"> User Agreement </a> and <a href="#"> Privacy Policy </a> </p>
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