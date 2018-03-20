<?php
session_start();
require_once '../../public/includes/autoload.php';
//login.php is in app/view directory strcture so 
use app\Controller\UserManager ;

$formerror="";
$name='';
$email="";
$password="";
if(isset($_REQUEST["submitted"])){
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $UM=new UserManager();
    $existuser=$UM->getUserByEmailPassword($email,$password);
		if(isset($existuser)){
        $_SESSION['email']=$email;
		header('Location: loginsucesspage.php');
    }else{
        $formerror="Invalid User Name or Password";
    }
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
	
</head>

<body>
 <div class="container-fluid">
    <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<nav class="navbar navbar-fixed-top navbar-inverse">
					<div class="navbar-header">
						<button class="navbar-toggle" data-toggle="collapse" data-target="#rightmenu" >
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<img src="./../../public/image/logo.jpg" " width="50" height="50"  /> 
					</div>
					<div class="collapse navbar-collapse navbar-right" id="rightmenu">
					<ul class="nav navbar-nav" >
						<li><a  href="#"> Login </a></li>
						<li><a  href="Registration.php"> Sign Up </a></li>
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
						<center><h3>Already a Member? Login here</h3></center><br>
						<div class="form-group">
							<input type="text" class="form-control" id="txt_username" placeholder="Email:" name="email" value="" ><br>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="txt_password" placeholder="Password:" name="password" value="<?=$password?>" ><br> 
						</div>
						
						<div id="error">
							<?=$formerror?>
						</div>
						<div class="form-group">
							<center><button class="btn btn-primary btn-block" name="submitted" value="Login">Login</button></center>
						</div>
						<div class="form-group">
							<p align="center"><a href="forgetpasword.php">Forget Password ?</a></p>
						</div>
                   </form> 
            </div>
        </div>        
 </div>  
 
<div class="container"> 
	<?php include './../../public/includes/footer.php';?>
	<!-- here logi form is under ./app/view  it needs to access file from public/includes/footer.php -->
</div>
</body>
</html>