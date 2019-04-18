<?php
	//ACA EMPIEZO A PROGRAMAR EN PHP

	//Ver online os errores de PHP
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	//1. Introduction: Recibir los valores desde el formulario	
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$asunto = $_POST["asunto"];
	$mensaje = $_POST["mensaje"];

	//2. Nudo: Armar el mail dinamico
	$destinatario = "bbedechian@gmail.com";

	$cuerpo = "<h1>Cotacto desde mi web</h1>";
	$cuerpo.= "<p>Nombre: " . $nombre . "</p>";
	$cuerpo.= "<p>E-mail: " . $correo . "</p>";
	$cuerpo.= "<p>Mensaje:<br> " . $mensaje . "</p>";
	

	//print $cuerpo;
	
	//Armar las cabeceras de envio
	$cabecera = "From: " . $correo . "\r\n";
	$cabecera. = "Reply-To: " . $correo . "\r\n";
	//$cabecera = "CCO: ###\r\n";
	$cabecera = "MIME-Version: 1.0\r\n";
	$cabecera = "Content-Type: text/html; charset=utf-8\r\n";

	//3. Desenlace: intentar enviar el mail
	$envio = mail($destinatario, $asunto, $cuerpo, $cabecera);

	if( $envio == true){

		print "Recibido gracias por su consulta!";

	} else {

		print "Upps... ocurrio un error";

	}







?>