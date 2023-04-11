<?php
require 'vendor/autoload.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

		$mail->isSMTP();
		$mail->Host = 'email-smtp.ap-southeast-2.amazonaws.com';
		$mail->SMTPAuth = true;
		$mail->Port = 587;
		$mail->Username = 'AKIA2RIQZ2RONEB7FLAC';
		$mail->Password = 'BOtBsNqHoRIaYpNKwLsxhT8h2rHGp6W/WsBVFz1uuBe9';


       $mail->setFrom('dev3.bdpl@gmail.com');
       $mail->addAddress('binarydata.jagroop@gmail.com');
       $mail->addReplyTo('binarydata.jagroop@gmail.com');

	   $mail->isHTML(true);
	   $mail->Subject = 'Test Email';
	   $mail->Body = 'This is a test email sent using PHPMailer.';

if ($mail->send()) {
    echo 'Email sent successfully';
} else {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>
