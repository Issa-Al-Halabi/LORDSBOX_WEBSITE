<?php 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use  PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\SMTP;
use  PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$myEmail = 'lordsbox@hendawi.info';   
$mySendAbleEmail = "rlc2.info@gmail.com";  

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer();
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = "rlc2.info@gmail.com";                     //SMTP username
$mail->Password   = 'hxpedlvpuwgahozl';                               //SMTP password
$mail->SMTPSecure = "ssl";         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 465;   


$mail->isHTML(true);
$mail->CharSet="UTF-8";    

?>