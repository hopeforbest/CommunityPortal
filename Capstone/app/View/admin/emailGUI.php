
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
  <style>
  .cen
	  { 
	    margin-left:30px;
	  }
  </style>
  
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
   	  </ol>
	  <div class="row">
	  <form class="cen" method="post" action="bulkemailDB.php">
		<div class="row">
					<div class="col-md-12">
					
						<div class="form-group">
							<input class="form-control form-control-lg" name="subject" type="text" placeholder="Subject">
						</div>
						
						
						<div class="form-group">
							<textarea id="form_message" name="message" class="form-control" placeholder="Message*" rows="15" cols="100" required="required" data-error="Please,leave us a message."></textarea>
							<div class="help-block with-errors"></div>
						</div>
										
						<div class="form-group">
							<input type="submit" class="btn btn-success btn-send" name="submit" value="send to all">
						</div>
						
					</div>
		</div>
	   </form>
	   </div>
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
	<script src="../../../public/js/registration.js"></script>
  </div>
</body>
</html>	 