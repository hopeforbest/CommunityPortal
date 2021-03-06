<?php
session_start();
use app\Controller\UserManager ;
require_once '../../public/includes/autoload.php';
ob_start();
$email="";
$name="";
if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
		$UM=new UserManager();
        $user=$UM->getUserByEmail($email);
		$name = $user->firstName;
		
	}	
if (isset($_REQUEST['search'])) {
	$searchvalue =  $_REQUEST['txtSearch'];
	$_SESSION['searchvalue'] = $searchvalue ;
	
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
	
	</style
</head>
<body>
 <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
    <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#rightmenu" >
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <img class="pull-left" src="image/logo.jpg" width="50" height="50"  /> 
				<nav class="navbar navbar-light navbar-left searchleft">
				 <form class="form-inline" name="searchform" method="POST" action="">
				  <div class="col-lg-12">
					<div class="input-group">
					  <input type="text" class="form-control"  name="txtSearch"placeholder="Search for...">
					  <span class="input-group-btn">
						<button class="btn btn-secondary" type="submit" value="" name="search" id="search">Go!</button>
					  </span>
					</div>
				  </div>
				</form>
				</nav>
			</div>
			<div class="collapse navbar-collapse navbar-right" id="rightmenu">
            <ul class="nav navbar-nav" >
               
                <li class="dropdown">
						<a href="" data-toggle="dropdown" class="dropdown-toggle">job<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="jobListPage.php">JobList</a></li>
							<li><a href="jobsearch.php">Search Job By Title</a></li>
							<li><a href="PostJobForm.php">Post a job</a></li>
							
						</ul>
				</li>
				<li class="dropdown">
						<a href="" data-toggle="dropdown" class="dropdown-toggle">Threads<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="chatindex.php">Topic</a></li>
							<li><a href="#">Topic List</a></li>
						</ul>
				</li>
				<li class="dropdown">
						<a href="" data-toggle="dropdown" class="dropdown-toggle">Messaging<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">compose</a></li>
							<li><a href="#">Inbox</a></li>
						</ul>
				</li>
				<li class="dropdown">
						<a href="" data-toggle="dropdown" class="dropdown-toggle"> <?php echo $name; ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="viewProfilepage.php">My Profile</a></li>
							<li><a href="updateProfilepage.php">Edit Profile</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
				</li>
            </ul>
            </div>
            
    </nav>
    </div>
    </div>
</div> 

 <!-- <div class="container-fluid">
	<?php include "includes/header.php" ?>
 </div> 
 -->
 
<div class="container">
        <div class="row">
		 <div class="col-md-12">    
             <center><h4>Welcome   <?php echo $name?></h4></center>
         </div>
		</div>
		<?php 
				if(isset($_SESSION['searchvalue']))
				{
				$searchvalue = $_SESSION['searchvalue'];
				$UM=new UserManager();
				$users=$UM->getUserBySearch($searchvalue);
				if(isset($users))
				{?>
					<?php
					foreach ($users as $user) 
					{
						if($user!=null)
						{?>
							<div class="row">
							<div class="col-md-1 col-sm-1 col-xs-1 "></div>
							<div class="col-md-10 col-sm-10 col-xs-10 searchfetchrow ">
							
								<div class="col-md-2 col-sm-2 col-sx-2 ">
									<img src="image/profileimage.jpg"class="img-circle" width="100" height="90" style="padding-top:5px;">
								</div>
								<div class="col-md-6 col-sm-6 col-sx-6 ">
									
									<h6><?php echo $user->firstName;?></h6>
									<h6><?php echo $user->companyname; ?></h6>
									<h6><?php echo $user->city; ?></h6>
								</div>
								<div class="col-md-2 col-sm-2 col-sx-2 ">
									<br>
									<button class="btn-Primary" name="Connect">Connect</button>
									</br>
								</div>
							
							</div>
							<div class="col-md-2 col-sm-2 col-xs-2 "></div>
							</div>
						<?php
						}
					} 
				}
			}
			?>
	</div> 
	
	<div class="container">
        <div class="row">
		     <div >
               <h1><?php echo $name ?>, You posted Job Successfully </h1>     
            </div>
        </div>        
 </div>  
   
<div class="container"> 
	<?php include 'includes/footer.php';?>
</div> 
</body>
</html>
