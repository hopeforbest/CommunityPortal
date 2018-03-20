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
$searchitem ="";
$category="";

if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
		$UM=new UserManager();
        $user=$UM->getUserByEmail($email);
		$name = $user->firstName;
		
	}	


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
	.searchtable{
		background-color:rgba(47, 50, 47, 0.74);
		opacity:0.9;
	}
	.searchbox
	{
	margin-top:100px;
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
	.joblist
	{
		float: left; 
		margin-top: 5%; 
		margin-left: 5%; 
		width: 500px; 
		height: 300px; 
		border: solid #ff9a00 0; 
		background-color:rgba(47, 50, 47, 0.74);
		opacity:0.9;
		font-family: calibri;  
		border-radius: 5px; 
		box-shadow: 2px 5px 5px black;">
	}	
	.title
	{
		color:white;
		padding-left:20px;

	}
	.data
	{
		padding-left:20px;
		color:white;
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
                <img class="pull-left" src="./../../public/image/logo.jpg" width="50" height="50"  /> 
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
							<li><a href="jobsearch.html">Search Job By Title</a></li>
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

 


<div class="container">
    <div class="col-sm-12 pull-center well searchbox" id="searchbox">
        <form class="form-inline" action="" method="POST">
            <center>  
                        <select class="form-control" name="searchlist">
                            <option value="title">Title</option>
                            <option value="location">Location</option>
							<option value="employer">Employer</option>
                        </select>
                    
                    
                       <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..." name="searchvalue">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" name="search" type="submit">
                                      <i>search</i>
                                    </button>
                                </span>
                        </div>
			</center>
        </form>
    </div>
</div>

<?php
if(isset($_REQUEST["search"])){
	$searchitem = $_REQUEST['searchvalue'];
	$category = $_REQUEST['searchlist'];
	
	$JM   = new JobManager();
	switch ($category) {
    case "title":
        $jobs = $JM->getJobByTitle($searchitem);
        break;
    case "location":
        $jobs = $JM->getJobByLocation($searchitem);
        break;
    case "employer":
         $jobs = $JM->getJobByEmployer($searchitem);
        break;
    default:
        echo "wrong list item";
	}
  
}
?>
		
			<?php
			if(isset($jobs))
			{	
			?>
				<table border="0" cellpadding="5px" width="800px" class="cent">
				<tr class="searchfetchrow">
					<td width="200">
						<h4 class="title"> Job Title </h4>
					</td>
					<td width="100">
						<h4 class="title"> Employer </h4>
					</td>
					<td width="100">
						<h4 class="title"> Location </h4>
					</td>
				</tr>
				<?php
				foreach($jobs as $job) 
				{
						if($jobs!=null)
						{
						?>
											
						<tr class="searchfetchrow">			
							<td>
								<p class="data"> <?php echo "<a href=Job_Detail.php?id=" . $job->id . ">" . $job->title . "</a>"; ?> </p>
								
							</td>
									
							<td>
								<p  class="data"> <?php echo $job->employer; ?> </p>
							</td>
									
							<td>
								<p  class="data"> <?php echo $job->location; ?> </p>
							</td>
						</tr>
				
					
						<?php 
						}
				}?>
	
				</table>
			<?php }
		?>
	
		

  
<div class="container"> 
	<?php include '../../public/includes/footer.php'; ?>
</div>
</body>
</html>