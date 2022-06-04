<?php
	session_start();
	$nome	 		= $_POST["nome"];
	$phone = $_POST["phone"];
	$email	 		= $_POST["email"];
	$mensagem = $_POST["mensagem"];

	$msg = "This email was sent through the website contact form.<br><br>";
	$msg .= "Nome: ".$nome."<br>";
	$msg .= "phone: ".$phone."<br>";
	$msg .= "email: ".$email."<br>";
	$msg .= "Mensagem: ".$mensagem."<br>";
	
	//$msg = utf8_decode($msg);
	
	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: text/html; \r\n";
	$header .= "From: ".$email."\r\n";
	
	if(mail("ferrerrobert@outlook.com", "Contact sent by website", $msg, $header)){
		echo("Email successfully sent");
	}else{
		echo("Error sending email");
	} 
	
	header("Location: http://ferrerrobert.com/ok.php");
?>