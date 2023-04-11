<?php

include_once dirname(__FILE__) . '/../Classes/vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require_once dirname(__FILE__) . '/../Classes/vendor/phpmailer/phpmailer/src/SMTP.php';
include_once("../config.php");
include_once("../model/db.php");
include_once("../model/users.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require_once '/var/www/html/risksafe/vendor/autoload.php';
// require 'vendor/autoload.php';

$user = new users;

if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "signup") {
	///////
	if (!$user->checkUser($_REQUEST["email"])) {
		if ($user->addUser($_REQUEST["email"], $_REQUEST["password"], $_REQUEST["name"], '', '', $_REQUEST["company"], '', '', '', '', '', '')) {
			$user->loginUser($_REQUEST["email"], $_REQUEST["password"]);
			header("Location: ../view/userprofile.php?action=edit");
		} else {
			header("Location: ../../index.php?response=err#sg");
		}
	} else {
		header("Location: ../../index.php?response=err_mail#sg");
	}
}

//UPDATE USER
if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "profile") {

	if ($_REQUEST["email_old"] == $_REQUEST["email"] or !$user->checkUser($_REQUEST["email"])) {
		if ($user->updateUser($_REQUEST["id"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["name"], $_REQUEST["phone"], $_REQUEST["location"], $_REQUEST["company"], $_REQUEST["companyaddress"], $_REQUEST["city"], $_REQUEST["state"], $_REQUEST["postcode"], $_REQUEST["country"])) {
			header("Location: ../view/userprofile.php?action=edit&response=true&id=" . $_REQUEST["id"]);
		} else {
			header("Location: ../view/userprofile.php?response=err");
		}
	} else {
		header("Location: ../view/userprofile.php?response=err_mail");
	}
}

//LOGOUT
if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "logout") {

	$user->logoutUser();
	header("Location: ../view/login.php");
}

//LOGIN
if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "login") {

	if ($user->loginUser($_REQUEST["email"], $_REQUEST["password"])) {
		header("Location: ../view/main.php");
		exit;
	} else {
		header("Location: ../view/login.php?login=false");
		exit;
	}
}

//UPDATE CONTEXT
if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "context") {

	if ($user->updateContext($_REQUEST["id"], $_REQUEST["objectives"], $_REQUEST["processes"], $_REQUEST["products"], $_REQUEST["projects"], $_REQUEST["systems"], $_REQUEST["relationships"], $_REQUEST["internallosses"], $_REQUEST["externallosses"], $_REQUEST["competitors"], $_REQUEST["environment"], $_REQUEST["regulatory"])) {
		header("Location: ../view/businesscontext.php?response=true");
	} else {
		header("Location: ../view/businesscontext.php?response=err");
	}
}

// Send Email for Get OTP
if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "reset") {
	$email = 'binarydata.jagroop@gmail.com';
	// validate email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// email is not valid, show error message
		echo "Invalid email address.";
	} else {
		// email is valid, generate OTP
		$otp = rand(1000, 9999);

		$to = $email;
		$subject = "One-Time Password (OTP)";
		$message = "Your one-time password is: $otp";
		$headers = "From:binarydata.sale@gmail.com";
		echo $otp;
		// mail($to, $subject, $message, $headers);
		// echo 'success';

		$mail = new PHPMailer();
		//Enable SMTP debugging
		$mail->SMTPDebug = 0;
		
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'dev3.bdpl@gmail.com';
		$mail->Password = 'binarydata000';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->setFrom('dev3.bdpl@gmail.com');
		$mail->addAddress('binarydata.jagroop@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = 'RiskSafe- Reset Password One-Time Password (OTP)';
		$mail->Body = 'Your one-time password is:' . $otp;


		if ($mail->send()) {
			echo "OTP sent to your email.";
			header("Location: ../view/forgetpassword.php?email=$email?action=passwordupdate");
		} else {
			echo "Failed to send OTP via email.". $mail->ErrorInfo;
		};
			// header("Location: ../../index.php?response=err_mail#sg");	
		}
	}


// Send Email for Get OTP
if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "passwordupdate") {
	$req_email = $_REQUEST['email'];
	$email = rtrim($req_email, "?action=passwordupdate");
	$otp = $_POST['otp'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	if ($user->checkUser($email)) {
		if ($user->updateOtp($email, $otp)) {
			if ($user->updateEmailUser($email, $password)) {
				$user->loginUser($email, $password);
				header("Location: ../view/userprofile.php?action=edit");
			}
		} else {
			header("Location: ../../index.php?response=err#sg");
		}
	} else {
		header("Location: ../../index.php?response=err_mail#sg");
	}
}
