
<?php
session_start();
use app\Controller\UserManager ;
require_once '../../../public/includes/autoload.php';
ob_start();
$email="";
$name="";

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
          <a href="../admincontrolpanel.php">Back</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <div class="row">
	  <form class="form-inline" name="searchform" method="POST" action="">
				  <div class="col-lg-12">
					<div class="input-group">
					    <span class="input-group-btn "> 
					    	<button type="submit" class="btn btn-primary active" style="background-color:grey;"name="list">List All Users</button>
       			        </span>
					</div>
				  </div>
				</form>
        <?php
			if(isset($_REQUEST['list']))
			{
			$UM=new UserManager();
			$users=$UM->getAllUsers();
					
			if(isset($users)){
			?>
				Below is the list of Developers registered in community portal 
				<table class="table"  width="600px">
				<tr style='padding:200px'>
					<th> </th>
					<th>Id</th>
					<th>First Name</th>
					<!--<th>Last Name</th> -->
					<th>Email</th>
					<!--<th>password</th>
					<th>job</th>
					<th>Company Name</th>
					<th>City</th>
					<th>Country</th> -->
				<?php 
				foreach ($users as $user) {
					if($user!=null){
				?>
					<tr>
					<td><input type="checkbox" name="checkbox[]" id="checkbox_id[]" value="<?php echo $user->email ; ?>"></td>
					<td> <?php echo $user->id; ?></td>
					<td><?php echo $user->firstName;?></td>
				<!--	<td><?php echo $user->lastName; ?></td> -->
					<td><?php echo $user->email; ?></td>
					<!--<td><?php echo $user->password; ?></td>
					<td><?php echo $user->job; ?></td>
					<td><?php echo $user->companyname; ?></td>
					<td><?php echo $user->city; ?></td>
					<td><?php echo $user->country; ?></td> -->
					<td></td>
					<td > <a href="editProfilepage.php?updateUseremail=<?php echo $user->email;?>">Edit</a></td> 
					<td> <a href="deleteProfilePage.php?deleteUseremail=<?php echo $user->email;?>">Delete</a></td> 
					</tr>
			<?php 
				}
			}
		}
		?>
			</table>
		<?php
			}
			if(isset($_POST['Delete'])){
            $idArr = $_POST['checkbox'];
				foreach($idArr as $value){
				$UM=new UserManager();
				$existuser=$UM->deleteUser($value);
				}
			}
		?>
	</div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
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
    <!-- Custom scripts for this page-->
    <script src="../../../public/js/sb-admin-datatables.min.js"></script>
    <script src="../../../public/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
