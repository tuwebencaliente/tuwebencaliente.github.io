<?php 
	$nombre = $_POST['nombre'];
    // $apellidos = $_POST['apellidos'];
	$correo = $_POST['correo'];
    $message = $_POST['msj'];
	// $msj = "Nombre: ".$nombre."<br> Apellidos:".$apellidos."Email:" .$email. "<br> Mensaje:".$_POST['mensaje'];


	// if(mail('gcamilo_98@live.com', $asunto, $msj)){
	// 	echo "Correo enviado";
	// }

    $header = 'From: '.$correo. "\r\n";
    $header .= "X-Mailer: PHP/" .phpversion(). "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " .$nombre. "\r\n";
    $message .= "Su email es: " .$correo. "\r\n";
    $message .= "Mensaje: " .$_POST['message'] . "\r\n";
    $message .= "Enviado el día: " .date('d/m/Y', time());

    $para = 'gcamilo_98@live.com'; 
    $asunto = 'Tu web en caliente';

    if (mail($para, $asunto, utf8_decode($message), $header)){
        echo "Correo enviado!";
    }

    header ("Location: index.html");

 ?>