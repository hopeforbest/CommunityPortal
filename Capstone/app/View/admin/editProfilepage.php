<?php

require_once '../../../public/includes/autoload.php';
ob_start();

use app\Models\util\DBUtil;
use app\Controller\UserManager;
use app\Models\entity\User;
ob_start();
include '../../../public/includes/security.php';

$formerror="";
$firstname="";
$lastname="";
$email= $_REQUEST["updateUseremail"];
$password="";
$job="";
$companyname="";
$city="";
$country="";


if(isset($_REQUEST["updateUseremail"])){
		
	$UM=new UserManager();
	$existuser=$UM->getUserByEmail($_REQUEST["updateUseremail"]);
    $firstname=$existuser->firstName;
	$lastname=$existuser->lastName;
	$email=$existuser->email;
	$password=$existuser->password;
	$job=$existuser->job;
	$companyname=$existuser->companyname;
	$city=$existuser->city;
	$country=$existuser->country;
}
 
if(isset($_REQUEST['update']))
{
		if($firstname!='' && $lastname!='' && $email!='' && $job!='' && $companyname!='' && $city!='' && $country!='')
		{ 
			$UM=new UserManager();
			$existuser=$UM->getUserByEmail($_REQUEST["updateUseremail"]);
			$existuser->firstName=$_REQUEST['FirstName'];
			$existuser->lastName=$_REQUEST['LastName'];
			$existuser->email=$_REQUEST['Email'];
			$existuser->job=$_REQUEST['Job'];
			$existuser->companyname=$_REQUEST['CompanyName'];
			$existuser->city=$_REQUEST['City'];
			$existuser->country=$_REQUEST['Country'];
			$UM->saveUser($existuser);
			header('Location:../admincontrolpanel.php');
		} 
}

if (isset($_REQUEST['cancel'])) {
	
}   
?>   

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="../../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../../public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../../../public/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../../public/css/sb-admin.css" rel="stylesheet">
  <link href="../../../public/css/cp-admin.css" rel="stylesheet">
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include 'adminpanel.php';?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="ManageUserPage.php">Back</a>
        </li>
       
      </ol>
	  <div class="row">
    	<form  id="loginform" class="cent regiForm" action="" method="post" >
            <center><h5 style="color:white">Hi, You are updating<span style="color:blue"> <?=$firstname;?> </span> details </h5></center><br>
			
			<div id="err"></div>
			<div id="error"><?=$formerror?></div>
			
			<div class="col-md-12">
				 
				
				<div class="form-group row" >
					<label for  ="txt_FirstName" class="col-md-2 col-form-label">FirstName</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="txt_FirstName"  name="FirstName" value="<?=$firstname?>" >
					</div>
				</div>
				
				
				
				<div class="form-group row" >
					<label for  ="txt_LastName" class="col-md-2 col-form-label" >LastName</label>
						<div class="col-md-6">
							<input type="text" class="form-control " id="txt_LastName"  name="LastName" value="<?=$lastname?>" >
						</div>
				</div>
				
				
				<div class="form-group row" >
					<label for  ="txt_LastName" class="col-md-2 col-form-label">Email</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="txt_LastName"  name="Email" value="<?=$email?>" >
						</div>
				</div>
				
				
												
			
				<div class="form-group row " >
					<label for  ="txt_Job" class="col-md-2 col-form-label">Job</label>
						<div class="col-md-6">
							<input type="text" class="form-control " id="txt_Job"  name="Job" value="<?=$job?>" >
           				</div>
						<div class="col-md-4">
							<button class="btn btn-primary btn-lg " name= "update" onclick="return formValidation();">update</button>
						</div>
				</div>
			
				
			
				<div class="form-group row " >
					<label for  ="txt_CompanyName"  class="col-md-2 col-form-label">Company Name</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="txt_CompanyName"  name="CompanyName" value="<?=$companyname?>" >
           			</div>
				</div>
				
				
				
				<div class="form-group row ">
					<label for  ="txt_City" class="col-md-2 col-form-label">City</label>
						<div class="col-md-6">
								<input type="text" class="form-control " id="txt_City"  name="City" value="<?=$city?>" >
           				</div>
				</div>
				
				
			
				<div class="form-group row" >
					<label for  ="txt_Country" class="col-md-2 col-form-label">Country</label>
						<div class="col-md-6">
							<input type="text" class="form-control " id="txt_Country"  name="Country" value="<?=$country?>" ><br> 
           				</div>
				</div>
				
						
			</div>
			</div>
			</div>
		</form> 
	</div>
	</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
     <?php include 'adminfooter.php';?>
    
    <!-- Bootstrap core JavaScript-->
    <!-- Bootstrap core JavaScript-->
    <script src="../../../public/vendor/jquery/jquery.min.js"></script>
    <script src="../../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../../public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../../../public/vendor/chart.js/Chart.min.js"></script>
    <script src="../../../public/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../../public/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../../../public/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../../../public/js/sb-admin-datatables.min.js"></script>
    <script src="../../../public/js/sb-admin-charts.min.js"></script>
	<script src="../../../public/js/registration.js"></script>
  </div>
</body>
</html>