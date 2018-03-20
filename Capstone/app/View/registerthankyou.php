<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<title>Login page</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.14.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "https://code.jquery.com/jquery-1.10.4.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src = "js/registration.js"></script>
<style>
    .cent{
		position: fixed;
		top: 40%;
		left: 50%;
		transform: translate(-50%, -50%);
		 color: hsl(330, 68%, 20%);
	}
</style>
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
                <img src="image/logo.jpg" width="50" height="50"  /> 
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
    	<form  id="loginform" class=" cent regiForm" action="" method="post" >
		<center><h1>Thank You</h1></center>

		<center>You have successfully registered to community portal</center><br /><br />

		<center>A confirmation email has been sent to your email to activate your account. Please activate before login </a></center>
            
		</form> 
</div>        
<div class="container"> 
	<?php include 'includes/footer.php';?>
</div>
</body>
</html>