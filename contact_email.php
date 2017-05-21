<?php
require('assets/plugins/PHPMailer/PHPMailerAutoload.php');
require('assets/plugins/GoogleRecaptcha/googleAPI.php');
require('config.php');
date_default_timezone_set('Etc/UTC');
$mail = new PHPMailer;
$flag = false;
$email = "";
$name = "";
$message = "";
// $captcha = $_POST['g-recaptcha-response'];
// $response=googleRecaptcha(array('secret'=>G_KEY,'response'=>$captcha,'remoteip'=>REMOTE_IP));
// $data = json_decode($response);
// if($data->success) {
	$email = $_POST['email'];
	$name = $_POST['company'];
	$message = 'Company: '.$name." \n"
			.'Email: '.$email." \n"
			.'Website: '.$_POST['website']." \n"
			.'Message: '.$_POST['message'];
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->SMTPDebug = true;                               // Enable verbose debug output
	$mail->Host = SMTP_SERVER;  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = ACC_USERNAME;            // SMTP username
	$mail->Password = ACC_PASS;				// SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to
	$mail->WordWrap = 50;
	$mail->setFrom($email, $name);
	$mail->addAddress('jojimikay15@gmail.com', 'John Mark');  // Add a recipient
	$mail->Subject = 'You receive a new message'.$name;
	$mail->Body    = $message;

	if(!$mail->send()) {
		$msg = "Something went wrong! Error: ". $mail->ErrorInfo;
		redirect($flag, $msg);
	}
	else{
		$flag = true;
		$msg = "Message sent successfully!";
		redirect($flag, $msg);
	}
// } else {
// 	$flag = true;
// 	$msg = "Please answer the captcha. Thanks!";
//     redirect($flag, $msg);
// }
function redirect($flag, $msg){
	if(!$flag){
		header('location:error_page.php?msg='.$msg);
	}
	header('location:index.php?msg='.$msg);
}
//End isset
//READ ME
// MAKE SURE YOU TURN-OFF 	Access for less secure apps IN YOUR GoogleAccount BEFORE YOU USE
 ?>
