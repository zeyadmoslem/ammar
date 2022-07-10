<?php
session_start();

require 'includes/libraries/PHPMailer/src/Exception.php';
require 'includes/libraries/PHPMailer/src/PHPMailer.php';
require 'includes/libraries/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$to = "zmdev96@gmail.com";
	$from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];

	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'mein-bester-friseur.de';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'info@mein-bester-friseur.de';                     //SMTP username
		$mail->Password   = 'Mein.Bester.Friseur';                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom('info@mein-bester-friseur.de', 'Website');
		$mail->addAddress('info@mein-bester-friseur.de', 'Website');     //Add a recipient
		$mail->addReplyTo($from, 'Information');


		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = $subject .' Von ' . $name;
		$mail->Body    = $message;

		$mail->send();
		$_SESSION['mail_message'] = 'wir haben ihre mail erhalten und werden diese schnellstmöglich bearbeiten';
		if (!empty($_SERVER['HTTP_REFERER'])){
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}
    	
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}

