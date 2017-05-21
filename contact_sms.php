<?php
require('assets/plugins/iTextMo/itextmoAPI.php');
require('assets/plugins/GoogleRecaptcha/googleAPI.php');
require('config.php');
$flag = false;
$msg = "";
$result = "";
$captcha = $_POST['g-recaptcha-response'];
$message = "This message is to maintain the website rocojohnmark.tk SMS API";
$message = 'Company: '.$_POST['company']." \n"
		.'Email: '.$_POST['email']." \n"
		.'Message: '.$_POST['message'];
$response=googleRecaptcha(array('secret'=>G_KEY,'response'=>$captcha,'remoteip'=>REMOTE_IP));
$data = json_decode($response);
if($data->success) {
	$bal = itexmo_bal(API_CODE);
	$result = itexmo(MY_NUMBER, $message, API_CODE);
	switch ($result) {
		case '1':
			$flag = true;
        	$msg='Invalid Number';
        	redirect($flag, $msg);
			break;
		case '2':
			$flag = true;
        	$msg='Number not Supported';
        	redirect($flag, $msg);
			break;
		case '3':
			$flag = true;
        	$msg=' Invalid ApiCode';
        	redirect($flag, $msg);
			break;
		case '4':
			$flag = true;
        	$msg='Maximum Message per day reached. This will be reset every 12MN. You current balance is'.$bal;
        	redirect($flag, $msg);
			break;
		case '5':
			$flag = true;
        	$msg='Maximum allowed characters for message reached';
        	redirect($flag, $msg);
			break;
		case '6':
			$flag = true;
        	$msg='System OFFLINE';
        	redirect($flag, $msg);
			break;
		case '7':
			$flag = true;
        	$msg='Expired ApiCode';
        	redirect($flag, $msg);
			break;
		case '8':
			$flag = true;
        	$msg='iTexMo Error. Please try again later';
        	redirect($flag, $msg);
			break;
		case '9':
			$flag = true;
        	$msg='Invalid Function Parameters';
        	redirect($flag, $msg);
			break;
		case '10':
			$flag = true;
        	$msg="Recipient's number is blocked due to FLOODING, message was ignored";
        	redirect($flag, $msg);
			break;
		case '11':
			$flag = true;
        	$msg="Recipient's number is blocked temporarily due to HARD sending (after 3 retries of sending and message still failed to send) and the message was ignored. Try again after an hour.";
        	redirect($flag, $msg);
			break;
		case '12':
			$flag = true;
        	$msg="Invalid request. You can't set message priorities on non corporate apicodes.";
        	redirect($flag, $msg);
			break;
		case '0':
			$flag = true;
			$msg = "Message Sent!";
			redirect($flag, $msg);
			break;
		default:
			$msg = "Something went wrong!";
			redirect($flag, $msg);
			break;
	}
} else {
	$flag = true;
	$msg = "Please answer the captcha. Thanks!";
    redirect($flag, $msg);
}

function redirect($flag, $msg){
	if(!$flag){
		header('location:error_page.php?msg='.$msg);
	}
	header('location:index.php?msg='.$msg);
}
?>