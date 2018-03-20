<?php
session_start();
use app\Models\util\DBUtil;
use app\Controller\UserManager;
use app\Models\entity\User;
require_once '../../public/includes/autoload.php';
    if(isset($_POST["reset-password"])){
        $email = $_GET["name"];
	
        $password = trim($_POST["password"]);
        $confirmPassword = trim($_POST["confirmPassword"]);
        if($password == $confirmPassword) {
           //$password = password_hash($password, PASSWORD_DEFAULT); 
		   //if  i use this line its showing data is too lond for database
           if($password!='')
			{
				$UM=new UserManager();
				
			
			
				$existuser=$UM->getUserByEmail($email);
				
				if(isset($existuser)){
					echo "hai".$password;
					// Save the Data to Database
					
				    $existuser->password=$password;
					
					$UM->updateUser($existuser);
					$success_message = "Password is rest successfully.<br>Now you are redirecting";
					//header("Refresh:3; url=index.php");
				}
				 else {
					$error_message = "Failed : <br> Password not updated";
				}
			} else {
				$error_message = "Password cannot be empty";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reset Password</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div id="loginContainer">
            <form id="reserPassword" name="reserPassword" method="post">
                <h3>Reset Password</h3>
                <?php if(!empty($success_message)) { ?>
                <div class="success_message"><?php echo $success_message ?></div>
                <?php } ?>
                <?php if(!empty($error_message)) { ?>
                <div class="error_message"><?php echo $error_message ?></div>
                <?php } ?>
                <input type="password" id="password" name="password" placeholder="Enter a New Password" required>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                <input type="submit" value="Reset Password" name="reset-password" id="reset-password">
            </form>
        </div>
    </body>
</html>
