<?php
session_start();
use app\Controller\UserManager ;
require_once '../../public/includes/autoload.php';
ob_start();
$email="";
$name="";
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
		background:none ;
	}
	
	input[type="text"]{
		margin-top:5px ! important;
		height:32px; !important;
		}
	.btn{
		margin-top:1px;
	}
	.input-group .form-control {
		margin: 0px !important;
		
	}
	.btn-primary{
		margin-right:20px;
		
	}
	
	
	</style>
</head>
</body>
 <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
    <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#rightmenu" >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <img src="./../../public/image/logo.jpg" " width="50" height="50" class="pull-left"  /> 
				<nav class="navbar navbar-light navbar-left searchleft">
				 <form class="form-inline" name="searchform" method="POST" action="">
				  <div class="col-lg-12">
					<div class="input-group">
					  <input type="text" class="form-control"  name="txtSearch"placeholder="Search for...">
					  <span class="input-group-btn ">
					    <button type="submit" class="btn btn-primary " name="search">Go!</button>
						<button type="submit" class="btn btn-primary active" style="background-color:grey;"name="list">List All Users</button>
       			      </span>
					</div>
				  </div>
				</form>
				</nav>
			</div>
			<div class="collapse navbar-collapse navbar-right" id="rightmenu">
            <ul class="nav navbar-nav" >
			   
                <li><a  href="index.php">Home </a></li>
                <li><a  href="#"> Jobs </a></li>
				<li><a  href="#"> Post</a></li>
				<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">Messaging<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">compose</a></li>
							<li><a href="#">Inbox</a></li>
						</ul>
				</li>
				<li><a href="logout.php">Logout</a></li>
				</ul>
            </div>
            
    </nav>
    </div>
    </div>
</div> 

<div class="container">
        <div class="row">
		 <div class="col-md-12">
			<?php
			if(isset($_REQUEST['list']))
			{
			$UM=new UserManager();
			$users=$UM->getAllUsers();
			include 'userList.php';
			}
			if(isset($_POST['Delete'])){
            $idArr = $_POST['checkbox'];
				foreach($idArr as $value){
				$UM=new UserManager();
				$existuser=$UM->deleteUser($value);
				}
			}

			?>
		 
         </div>
		</div>
</div> 


<div class="container"> 
	<?php include '../../public/includes/footer.php';?>
</div> 
</body>
</html>