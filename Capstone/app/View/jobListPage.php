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
$JM = new JobManager();
$jobs = $JM->getJob();

?>
<!DOCTYPE html>
<html lang="en">
<head>
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
table{
	overflow:scroll;
}
a
{
	color:#ea71c9;
	
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
	background-color:rgba(47, 50, 47, 0.74);
	
	font-family: calibri;  
	border-radius: 5px; 
	box-shadow: 2px 5px 5px black;
	
}	
.title
{
color:#ea71c9;


}
.data
{

color:white;
}	
</style>
</head>

<body >

	<div class="container-fluid"> 
	<?php include '../../public/includes/header.php';?>
	</div>
	
	<div class="container">
	

<?php
foreach($jobs as $job) 
	{
		if($job!=null)
		{
		?>
		<section  class="joblist" >
		<table>
		<table border="0" cellpadding="10">
			<tr>
				<td width="100">
					<h5 class="title"> Job Title :</h5>
				</td>
				<td>
					<p class="data"> <?php echo "<a href=Job_Detail.php?id=" . $job->id . ">" . $job->title . "</a>"; ?> </p>
					
				</td>
			</tr>
			<tr>
				<td width="100">
					<h5 class="title"> Employer :</h5>
				</td>
				<td>
					<p  class="data"> <?php echo $job->employer; ?> </p>
				</td>
			</tr>
			<tr>
				<td width="100">
					<h5 class="title"> Location :</h5>
				</td>
				<td>
					<p  class="data"> <?php echo $job->location; ?> </h5>
				</td>
			</tr>
			
		</table>	
	</section>
			
	<?php 
		}
}
?>
<div class="container"> 
	<?php include '../../public/includes/footer.php'; ?>
</div>
</body>
</html>