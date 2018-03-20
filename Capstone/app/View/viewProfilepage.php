<?php
session_start();
require_once 'includes/autoload.php';
use app\Controller\UserManager ;
ob_start();
$email="";
$name="";
if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
		$UM=new UserManager();
        $user=$UM->getUserByEmail($email);
		$name = $user->firstName;
		$lastname=$user->lastName;
		$job=$user->job;
		$companyname=$user->companyname;
		
	}

if (isset($_REQUEST['search'])) {
	$searchvalue =  $_REQUEST['txtSearch'];
	$_SESSION['searchvalue'] = $searchvalue ;
	header('Location:loginsucesspage.php');
}   
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<title>ABC PVT LTD</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/portalstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body>
<div class="container-fluid">
    <?php include "includes/header.php" ?>
</div> 

 <div class="container">
    	   <div class="row">
		   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		   <div class="outerbox">
				 <center><img src="image/profileimage.jpg"class="img-circle" alt="Cinque Terre" width="100" height="90" style="padding-top:5px;"> 
				 <br>
				 <br>
			     <p>Hi I am <?=$name,$lastname;?> Currently working in  <?=$companyname?> as <?=$job ?> </p></br>
			</div>
		    </div> 
			</div>
 </div>		   
 
 <div class="container"> 
	<?php include 'includes/footer.php';?>
 </div>
</body>
</html>