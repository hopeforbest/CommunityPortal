<?php
session_start();
require_once '../../../public/includes/autoload.php';
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

$success = "...... you posted job successfully ";
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
	  <h3>
    	<?php echo $success; ?>
		</h3>
      </div>        
 </div>  

<!-- Scroll to Top Button-->
  <?php include 'adminfooter.php';?>
    <!-- Bootstrap core JavaScript-->
    <!-- Bootstrap core JavaScript-->
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
