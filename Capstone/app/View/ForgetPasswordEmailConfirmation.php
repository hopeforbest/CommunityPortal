<?php

session_start();
use app\Controller\UserManager ;
require_once '../../public/includes/autoload.php';
$formerror="";
$email="";
if(isset($_REQUEST["submitted"])){
    header('Location: forgetpasswordemail.php');
    }else{
        $formerror="Invalid User Name or Password";
    }
	
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

<style>
    body{   
		background-image:url("image/bg_m3project.jpg"); // for your body background
		 min-height:100%;
		 background-repeat: no-repeat;
         background-attachment: fixed;
         background-position: center; 
		 background-size: cover;
		    // for your body  background repeat 
	}
    .navbar
    {
        min-height:30px !important;
        margin-bottom: 0!important;
    }
    .navbar-right {
        margin-right: 20px;
        padding-right:10px;
    }
    .navbar-right a{
        margin-right: 20px;
    }
    .navbar-toggle
    {
        background-color: plum;
    }
    .navbar-toggler-icon
    {
       
    }
    #box-wrapper {
    background-image: url("image/bg_m3project.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    min-height:980px;
   }
   .loginform .btn-primary ,
   {
    color: #fff;
    background-color: #0495c9;
    border-color: #357ebd; /*set the color you want here*/
	}
   .cent{
		position: fixed;
		top: 40%;
		left: 50%;
		transform: translate(-50%, -50%);
   }
.loginform
{
    
    background-color:#393635;
    border: 5px solid #393635;
    border-radius: 10px;
    margin-top: 110px;
    opacity:0.9;
	max-width: 500px;
    padding: 10px 40px;
    color: #FFF;
} 
h3{
    color:hsl(288, 81%, 65%);
    font-family: Arial;
    font-size: 20px;
	font-weight:bold;
	margin:0;
}
#disu,#disup{
    color:red;
}
#error{
	color:Red;
}

</style>
</head>

<body>
<div >
 <div class="container-fluid">
     
    <div class="row">
    <div class="col-md-12">
    <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#rightmenu" >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <img src="../../public/image/logo.jpg" width="50" height="50"  /> 
            </div>
            <div class="collapse navbar-collapse navbar-right" id="rightmenu">
            <ul class="nav navbar-nav" >
                 <li><a  href="#"> Home </a></li>
            </ul>
            </div>
            
    </nav>
    </div>
    </div>
 </div>


 <div class="container">
        <div class="row cent">
		     <div class="loginform">
                    <form  id="loginform"  action="" method="post" onSubmit="return ValidationForm();" >
                        <center><h3>Email Confirmation</h3></center><br>
						<center><h4>A link to set your password has been send to your email address</h4></center><br>
						<center><p style="font-weight:bold;color:hsl(288, 100%, 50%);">If you dont see our email please check spam,<br>
						if not we can send an another email for you</p></center>
					
                        <center><p><button class="btn btn-primary" name="submitted" value="Login">Resend Link</button></p><center>
                    
                   </form> 
            </div>
		</div>
        </div>        
 </div>   
    
    
                   <!-- </div>
                    <img src="logo.jpg" width="50" height="50" />
                    pull-left class bring the logo to top left corner inside nav-->
</body>
</html>