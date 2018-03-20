
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
    	<form  id="loginform" class=" cent regiForm" action="PostJobForm_Redirect.php" method="post" >
            <center><h5 style="color:white">Job Form-Fill </h5></center><br>
			
			<div class="col-md-12">
				
				<div class="form-group row" >
					<label for  ="txt_jobTitle" class="control-label col-md-3" col-form-label> Job Title</label>
					<div class="col-md-6">
						<input type="text" class="form-control input-md" id="txt_jobTitle" placeholder="Job title" name="job_title">
					</div>
				</div>
				
				<div class="form-group row" >
						<label for  ="txt_AnnualSalary"  class="control-label col-md-3" col-form-label>Salary</label>
						<div class="col-md-6 .row-bottom-margin">
							<input type="text" class="form-control " id="txt_AnnualSalary"   placeholder="annual salary(in $)" name="job_salary" >
						</div>
				</div>
				
				
				<div class="form-group row" >
					<label for  ="txt_Job_Description" class=" control-label col-md-3" col-form-label>Job Description</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="txt_Job_Description"  placeholder="Describe Job roles and responsibilities" name="job_desc">
						</div>
				</div>
				
				<div class="form-group row" >
					<label for  ="txt_WorkLocation" class="control-label col-md-3" col-form-label>Work Location</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="txt_WorkLocation" placeholder="Work Location" name="job_location">
           				</div>
				</div>
				
				<div class="form-group row" >
					<label for  ="txt_Job" class="control-label col-md-3" col-form-label> Employer</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="txt_Job"  placeholder="Employer's name" name="job_employer">
           				</div>
				</div>
				
				<div class="form-group row" >
					<label for  ="txt_CompanyName"  class=" control-label col-md-3" col-form-label> Website</label>
					<div class="col-md-6">
						<input type="text" class="form-control" id="txt_CompanyName"  placeholder="Employer's Website Url" name="job_website" >
           			</div>
				</div>
			
				
				<div class="form-group row" >
					<label for  ="txt_City" class=" control-label col-md-3" col-form-label>Qualifications</label>
						<div class="col-md-6">
								<input type="text" class="form-control" id="txt_City"  placeholder="Minimum Qualification required" name="job_qual" >
           				</div>
				</div>

					<center><button class="btn btn-primary" name="submitted" value="submit">Submit</button></center> </center>
			</form>
                   
            </div>
        </div>        
 </div>  

<!-- Scroll to Top Button-->
  <?php include 'adminpanel.php';?>
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