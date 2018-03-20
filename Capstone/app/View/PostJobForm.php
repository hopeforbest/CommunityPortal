<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
<title>Post Job form</title>
<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../public/css/portalstyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.14.4/jquery.min.js"></script>
<script src="../../public/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "https://code.jquery.com/jquery-1.10.4.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src = "../../public/js/registration.js"></script>
</head>
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
		max-width: 600px;
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
	background-color:rgba(47, 50, 47, 0.74);
	opacity:0.9;
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
</style>
</head>

<body>


	<div class="container-fluid"> 
	<?php include '../../public/includes/header.php';?>
	</div>
	
	<div class="container ">
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
							<input type="text" class="form-control input-md" id="txt_AnnualSalary"   placeholder="annual salary(in $)" name="job_salary">
						</div>
				</div>
				
				<div class="form-group row" >
					<label for  ="txt_Job_Description" class=" control-label col-md-3" col-form-label>Job Description</label>
						<div class="col-md-6">
							<input type="text" class="form-control input-md" id="txt_Job_Description"  placeholder="Describe Job roles and responsibilities" name="job_desc">
						</div>
				</div>
				
				<div class="form-group row" >
					<label for  ="txt_WorkLocation" class="control-label col-md-3" col-form-label>Work Location</label>
						<div class="col-md-6">
							<input type="text" class="form-control input-md" id="txt_WorkLocation" placeholder="Work Location" name="job_location">
           				</div>
				</div>
				
				<div class="form-group row" >
					<label for  ="txt_Job" class="control-label col-md-3" col-form-label> Employer</label>
						<div class="col-md-6">
							<input type="text" class="form-control input-md" id="txt_Job"  placeholder="Employer's name" name="job_employer" >
           				</div>
				</div>
				
				<div class="form-group row" >
					<label for  ="txt_CompanyName"  class=" control-label col-md-3" col-form-label> Website</label>
					<div class="col-md-6">
						<input type="text" class="form-control input-sm" id="txt_CompanyName"  placeholder="Employer's Website Url" name="job_website">
           			</div>
				</div>
				
				<div class="form-group row" >
					<label for  ="txt_City" class=" control-label col-md-3" col-form-label>Qualifications</label>
						<div class="col-md-6">
								<input type="text" class="form-control input-md" id="txt_City"  placeholder="Minimum Qualification required" name="job_qual" ><br> 
           				</div>
				</div>
				</div>	
				
				
						
					<center><button class="btn btn-primary" name="submitted" value="submit">Submit</button></center> </center>
			</form>
                   
            </div>
        </div>        
 </div>  

<div class="container"> 
	<?php include '../../public/includes/footer.php'; ?>
</div>
</body>
</html>

