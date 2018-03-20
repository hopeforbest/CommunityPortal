<?php
require_once '../../../public/includes/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use vendor\PHPMailer\PHPMailer\Exception;
use app\Models\util\DBUtil;
use app\Controller\UserManager;
use app\Models\entity\User;

require '../../../vendor/autoload.php';
require '../../../vendor/phpmailer/phpmailer/src/Exception.php';
require '../../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../../../vendor/phpmailer/phpmailer/src/OAuth.php';
require '../../../vendor/phpmailer/phpmailer/src/POP3.php';

$UM=new UserManager();
$users = $UM->getAllUsers();
if(isset($users))
{
	foreach ($users as $user) 
	{
		$email = $user->email;
		$name  = $user->firstName;
		sendEmail($email, $name);
	}
}
if ( isset( $_POST['submit'] ) ) {
$message = $_REQUEST['message'];
$subject = $_REQUEST['subject'];
}

/* require 'class.phpmaileroauthgoogle.php';

		
		$dsn ='mysql:dbname=m6project;host=localhost';
		$user = 'root';
		$password = 'root';
    	$dbh = new PDO($dsn, $user, $password);*/
		
        /*** set the error mode to excptions ***/
       /* $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); */

        /*** prepare the select statement ***/
        /* $stmt = $dbh->prepare("SELECT id, name, email, promocode FROM email"); */

        /*** execute the prepared statement ***/
       /* $stmt->execute(); */

       /* while($row = $stmt->fetch()) {
            //$id = $row['id'];
			$name = $row['name'];
			$email = $row['email'];
			$promoCode = $row['promocode'];
			
			sendEmail($email, $name);
		
        }
*/	
	function sendEmail($email, $name){
		if ( isset( $_POST['submit'] ) ) {
			$message = $_REQUEST['message'];
			$subject = $_REQUEST['subject'];

			}
	$htmlversion="<p>".$subject."</p> <br> <p style='color:red;'>Hi ".$name.", <br><br>  ".$message.". </p>";
	$textVersion="Hi ".$name.",.\r\n This is your promo code: text Version";
	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	//$mail->SMTPDebug = 2;
	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	//Set the SMTP port number - likely to be 25, 465 or 587
	$mail->Port = 25;
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//it allows SMTP to send email
	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
	);
	$mail->Username = 'smitha12lithan@gmail.com';
	//Password to use for SMTP authentication
	$mail->Password = 'genesis123';
	//Set who the message is to be sent from
	$mail->setFrom('smitha12lithan@gmail.com', $subject);
	//Set an alternative reply-to address
	//$mail->addReplyTo('replyto@example.com', 'First Last');
	//Set who the message is to be sent to
	$mail->addAddress($email, $name);
	//Set the subject line
	$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $htmlversion;
		$mail->AltBody = $textVersion;

	if (!$mail->send()) {
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message sent!';
	}
	}
?>
