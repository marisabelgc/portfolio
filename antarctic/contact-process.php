<?php

if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	if (empty($name) || empty($email) || empty($message)){
		if($GLOBALS['wp_lang']== "es"){
			printf('Llena todos los campos del formulario');
		}else{
			printf('You must fill in all the fields');
		}	
	}elseif(!preg_match('/^([a-zA-z.])+$/', $name)){
		if($GLOBALS['wp_lang'] == "es"){
			printf('Introduzca un email válido');
		}else{
			printf('You must enter a valid name');
		}
	}else{
		$to = 'marisabelgc18@gmail.com';
		$subject = 'New message from your website';
		$message = "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\nMessage: ".$_POST['message'];
		mail( $destino, $titulo, $contenido );
		$headers = "Name: ".$_POST['name']."\r\n" .
		"Email: ".$_POST['email']. "\r\n" .
		"X-Mailer: PHP/" . phpversion();

		mail($to, $subject, $message, $headers);

		printf('success');
	}
}

?>