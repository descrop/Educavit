<?php




echo "<h2>Informacion recivida desde Educavit</h2>";
echo "El nombre recibido es " .$nombre ."<br/>";
echo "El nombre recibido es " .$email ."<br/>";
echo "El nombre recibido es " .$mensaje ."<br/>";

if(!isset( $_POST['nombre']) || !isset($_POST['email']) || !isset($_POST['mensaje']) ) {
	echo 'Algo salió mal. Por favor intenta de nuevo';
    die();
}
	$email_from = "francisco.calymayorg@avitsol.com";
	$email_subject = "Nuevo Lead: educavit - ".($_POST['nombre'])." - ".($_POST['nombre']);
	$email_message ="Enviado el ".date("d/m/Y")." a las ".date("H:i")."\n\n";
	$email_message .= "Nombre: ".stripslashes($_POST['nombre'])."\nSistema: ".stripslashes($_POST['mensaje'])."\nEmail: ".stripslashes($_POST['mensaje'])."\nWhatsapp: ";
	

	$headers = 'From: '.$email_from."\r\n" .
   'Reply-To: '.$email_from."\r\n" ;

	mail('francisco.calymayorg@avitsol.com', $email_subject, $email_message, $headers);
	echo "<div style='background-color:#38d430; font-size:1.5em; color: white; font-weight:bold; padding:5px;'>Gracias por tu tiempo. Nos pondremos en contacto contigo a la brevedad.</div><p>&nbsp;</p>";
	die();
?>
