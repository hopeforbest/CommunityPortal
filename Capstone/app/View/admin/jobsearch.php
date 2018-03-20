<?php
session_start();
require_once '../../../public/includes/autoload.php';
use app\Models\util\DBUtil;
use app\Controller\JobManager;
use app\Controller\UserManager;
use app\Models\entity\job;
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
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
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
        <form class="form-inline" action="" method="POST" style ="margin-left:30%;">
            <center>  
                        <div class="input-group custom-search-form">
							<select class="form-control" name="searchlist">
								<option value="title">Title</option>
								<option value="location">Location</option>
								<option value="employer">Employer</option>
							</select>
						               
                       
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
if(isset($jobs))
{
foreach($jobs as $job) 
	{
		if($jobs!=null)
		{
		?>
		
	
		<table border="0" cellpadding="5px" width="600px">
			<tr>
				<td width="200">
					<h6 class="title"> Job Title </h6>
				</td>
				<td width="100">
					<h6 class="title"> Employer </h6>
				</td>
				<td width="100">
					<h6 class="title"> Location </h6>
				</td>
			</tr>
			<tr>			
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
			<tr>
				<td colspan=2>
			</tr>
		</table>

			
	<?php 
		}
}

}
?>
</div>
</div>

  
<div class="container"> 
	<?php include 'includes/footer.php';?>
</div> 
</body>
</html>