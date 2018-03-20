<?php 

require_once '../../public/includes/autoload.php';
use app\Controller\UserManager ;
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
?>

<div class="container-fluid">
    <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#rightmenu" >
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
                </button>
                <img class="pull-left" src="../../public/image/logo.jpg" width="50" height="50"  /> 
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
			<div class="collapse navbar-collapse navbar-right" id="rightmenu" >
			<ul class="nav navbar-nav" >
			   <li class="dropdown">
						<a href="" data-toggle="dropdown" class="dropdown-toggle">Job<b class="caret"></b></a>
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
							<li><a href="../../index.php">Logout</a></li>
						</ul>
				</li>
            </ul>
            </div>
            
    </nav>
    </div>
    </div>
</div>