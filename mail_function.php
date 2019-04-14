<?php
	function sendOTP($email,$otp){
		require 'phpmailer/PHPMailerAutoload.php';

		$message_body = "One Time Password for PHP login authentication is:<br/><br/>" . $otp;
		$mail = new PHPMailer();		
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Port = 465;
		$mail->Username = 'gvikram18@gmail.com';
		$mail->Password = 'Mysticeye@123';
		$mail->Host = "smtp.gmail.com";
		$mail->setFrom('gvikram18@gmail.com', 'IVTREE');
		$mail->addAddress($email);
		$mail->Subject = "OTP to Login";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		return $result;
	}
?>
