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
$email= $_REQUEST["deleteUseremail"];
$password="";
$job="";
$companyname="";
$city="";
$country="";


if(isset($_REQUEST["deleteUseremail"])){
		
	$UM=new UserManager();
	$existuser=$UM->getUserByEmail($_REQUEST["deleteUseremail"]);
	$id=$existuser->id;
    $firstname=$existuser->firstName;
	$lastname=$existuser->lastName;
	$email=$existuser->email;
	$password=$existuser->password;
	$job=$existuser->job;
	$companyname=$existuser->companyname;
	$city=$existuser->city;
	$country=$existuser->country;
}
 
if(isset($_REQUEST['delete']))
{
		if($firstname!='' && $lastname!='' && $email!='' && $job!='' && $companyname!='' && $city!='' && $country!='')
		{ 
			$UM=new UserManager();
			$existuser=$UM->getUserByEmail($_REQUEST["deleteUseremail"]);
			$UM->deleteUser($existuser->email);
			
			header('Location: ManageUserPage.php');	   
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
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
	  <div class="row">
    	<form  id="loginform" class="cent deleteForm" action="" method="post" >
            <center><h5 style="color:white">Hi, You are Deleting<span style="color:blue"> <?=$firstname;?> </span> details </h5></center><br>
			
			<div id="err"></div>
			<div id="error"><?=$formerror?></div>
			
			<div class="col-md-12">
				 
				
				<table class="table"  width="600px">
				<tr style='padding:200px'>
					<td>Id</td> 
					<td>First Name</td> 
					<td>Last Name</td> 
					<td>Email</td> 
					<td>password</td> 
					<td>job</td>
					<td>Company Name</td>
					<td>City</td>
					<td>Country</td> 
				</tr>
				<tr>
					<td><?=$id?></td> 
					<td><?=$firstname?></td> 
					<td><?=$lastname?></td> 
					<td><?=$email?></td> 
					<td><?=$password?></td> 
					<td><?=$job?></td>
					<td><?=$companyname?></td>
					<td><?=$city?></td>
					<td><?=$country?></td>
				</tr>
				</table>
				
				
				
				<div class="form-group row " >
						<div class="col-md-2"></div>
						<div class="col-md-10">
							<h5>Please Check again before delete<h5> <button class="btn btn-primary btn-lg " name= "delete" onclick="return formValidation();">Delete</button>
						</div>
				</div>
				
			</div>
			</div>
			</div>
		</form> 
	</div>
	
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <!-- Bootstrap core JavaScript-->
	 <?php include 'adminfooter.php';?>
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
    <!-- Custom scripts for tdis page-->
    <script src="../../../public/js/sb-admin-datatables.min.js"></script>
    <script src="../../../public/js/sb-admin-charts.min.js"></script>
  	<script src="../../../public/js/registration.js"></script>
  </div>
</body>
</html>