<?php 
	$nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$msj = "Nombre: ".$nombre."<br> Apellidos:".$apellidos."Email:" .$email. "<br> Mensaje:".$_POST['mensaje'];


	if(mail('gcamilo_98@live.com', $asunto, $msj)){
		echo "Correo enviado";
	}
 ?>