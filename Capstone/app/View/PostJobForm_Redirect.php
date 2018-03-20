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
	
$title="";
$salary="";
$jobdesc="";
$location="";
$qualification="";
$employer="";
$website="";


if(isset($_REQUEST["submitted"])){
	
	    
		$title=$_REQUEST['job_title'];
		$salary=$_REQUEST['job_salary'];
		$jobdesc=$_REQUEST['job_desc'];
		$location=$_REQUEST['job_location'];
		$qualification=$_REQUEST['job_qual'];
		$employer=$_REQUEST['job_employer'];
		$website=$_REQUEST['job_website'];
	
		if($title!='' && $salary!='' && $jobdesc!='' && $location!='' &&  $qualification!='' && $employer!='' && $website!='')
		{
			$JM = new JobManager();
			$job=new Job();
			$job->title=$title;
			$job->salary=$salary;
			$job->jobDescription=$jobdesc;
			$job->location=$location;
			$job->qualification=$qualification;
			$job->employer=$employer;
			$job->website=$website;
			
			
			$JM->saveJob($job);
			
		}
		
}
echo "<h1>" .$name." Successfully Posted Job</h1>";
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
</head>	


<body>

	<div class="container-fluid"> 
	<?php include '../../public/includes/header.php';?>
	</div>
	
	<div class="container">
	<h1><?=$name?>  ,  you are posted the job successfully </h1>
	<div class="container"> 
		<?php include '../../public/includes/footer.php'; ?>
	</div>
</body>
</html>