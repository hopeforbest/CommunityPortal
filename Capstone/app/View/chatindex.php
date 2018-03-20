<?php

    include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
	<title>Login page</title>
	<title>Community Portal-ABC</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/portalstyle.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/chatstyle.css">
	<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
	
	<script src = "../../public/js/loginform.js"></script>
	<script src = "../../public/js/chatscript.js"></script>
	<script src="../../public/js/jquery-3.3.1.min.js"></script>
	<!--  abovejquery should be first -->
	<script src="../../public/js/bootstrap.min.js"></script>
	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>


<body onload= "ajax(); " style="background-image:none;">
	<div class="container-fluid"> 
		<?php include '../../public/includes/header.php';?>
	</div>
	<div class="container" style="" >
    
	<div id="chat_box">
                       
        <form method = "post" action="chatindex.php" class="form-horizontal" style="margin-top:150px;">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="" placeholder="Name" name ="username">
            </div>
          </div>
          <div class="form-group">
              <label for="comment" class="col-sm-2 control-label">Comment:</label>
              <div class = "col-sm-10">
                <textarea name = "message" class="form-control" rows="2" id="comment"></textarea>
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name = "submit" class="btn btn-primary">Send it !</button>
            </div>
          </div>
        </form>
                <?php
                    if(isset($_POST['username']) && isset($_POST['message']))
                    {
                        $name = $_POST['username'];
//                        echo $name;
                        $message = $_POST['message'];
//                        echo $message;
                        $query_1 = "INSERT INTO chat_info (name,msg) VALUES ('$name','$message')";
                        $query_run = mysqli_query($con,$query_1);
                
                        if($query_run)
                        {
                            echo "<audio src = 'sound/134332-facebook-chat-sound.mp3' hidden = 'true' autoplay = 'true' /></audio>";
                        }

                   }
                
              
                
                    $query = "SELECT * FROM chat_info ORDER BY id DESC";
                    $query_run   = mysqli_query($con,$query);
//                    $query_run =$con -> query($query);
                
//                    $query_array = mysql_fetch_assoc($query_run)
                    
                    while($query_row = mysqli_fetch_assoc($query_run)):?>
                
                <div id ="chat_data">
                </div>
                <span style="color:red;"><?php echo $query_row['name'].' : '; ?></span>
                <span style="font-family:cursive;"><?php echo $query_row['msg']; ?></span>
                <span style = "font-family:cursive;float:right;"><?php echo formatDate($query_row['date']); ?></span>
<!--
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
-->
                
                <?php endwhile; ?>
                
            </div>
        </div>
    </body>
    <script src="script.js"></script>

</html>