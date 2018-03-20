<?php
session_start();
require_once '../../public/includes/autoload.php';
use app\Models\util\DBUtil;
use app\Controller\JobManager;
use app\Controller\UserManager;
use app\Models\entity\job;

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

$id=$_GET['id'];
$JM = new JobManager();
$jobs = $JM->getJobById($id);

?>

<!DOCTYPE html>
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

    .navbar
    {  min-height:30px !important;
        margin-bottom: 0!important;
    }
    .navbar-right {
        margin-right: 20px;
     }
    .navbar-right a{
        margin-right: 20px;
    }
    .navbar-toggle
    {
        background-color: #E492F5;
    }
    .navbar-toggler-icon
    {
       
    }
    #box-wrapper {
   
   }
     	
   #box-wrapper
    
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
		max-width: 400px;
		padding: 10px 40px;
		color: #FFF;
	} 

	#disu,#disup{
		color:red;
	}
	#error{
		color:Red;
	}
    
	.quote
	{   text-align: center;
        color:purple;
        width:100%;
		margin-top: 50px;
	} 
	.quote h4{
		font-weight:bold;
		font-size:28px;
	}
	box{
		width:200px;
		height:200px;
		
	}
	.searchleft{
		padding-left:10px;
		padding-top:4px;
	}


.jumbotron{
	background-color:transparent !important;
	border:1px solid gray;
	-moz-box-shadow:    inset 0 0 2px #000000;
   -webkit-box-shadow: inset 0 0 2px #000000;
   box-shadow:         inset 0 0 3px #000000;
}
.cell1
{
	height:100%;
}
.cell2.
{
	height:100%
}
.cel3 
{
	height:100%
}
.joblist
{
	float: left; 
	margin-top: 5%; 
	margin-left: 5%; 
	width: 500px; 
	height: 150px; 
	border: solid #ff9a00 0; 
	background-color:grey; 
	font-family: calibri;  
	border-radius: 5px; 
	box-shadow: 2px 5px 5px black;">
}	
.title
{
color:rgba(54, 2, 54, 1);
padding-left:20px;

}
.data
{
padding-left:20px;
color:white;
}	

h4,h1 {
	font-family: cursive;
	font-size: 15px;
	font-weight: 5px;
	color:#fff;
}
p{
 color:#fff;
}
.content
{
	margin:10% 10%;
	font-family: calibri;
	box-shadow: 2px 5px 5px black;
	text-align:center;
	background-color: rgba(47, 50, 47, 0.74);
    border: 5px solid #5E5E5E;
    border-radius: 10px;
    opacity: 0.9;
    max-width:80%;
    color: #FFF;
	
	
}
	
}
</style>
<!--

-->
</head>

<body>

	<div class="container-fluid"> 
	<?php include '../../public/includes/header.php';?>
	</div>
	<section class="content">
		<table cellpadding="5" >
			<tr>
				<th colspan=2>
					<h1 style="text-align: center;"> <?php echo $jobs->title; ?></h1>
				</th>
			</tr>
			<tr>
				<td>
					<h4> Employer</h4>
				</td>
				<td>
					<p><?php echo $jobs->employer; ?></p>
				</td>
			</tr>
			<tr>
				<td >
					<h4> Job description</h4>
				</td>
				<td height="auto">
					<p><?php echo $jobs->jobDescription;  ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<h4> Salary</h4>
				</td>
				<td>
					<p><?php echo $jobs->salary; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<h4> Location</h4>
				</td>
				<td>
					<p><?php echo $jobs->location; ?></p>
				</td>
			</tr>
			<tr>
				<td>
					<h4> Minimum Qualification</h4>
				</td>
				<td>
					<p><?php echo $jobs->qualification;?></p>
				</td>
			</tr>
			<tr>
				<td>
					<h4> Website</h4>
				</td>
				<td >
					<p><?php echo $jobs->website; ?></p>
				</td>
			</tr>
		</table>
	</section>	
</body>
