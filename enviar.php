<?php
header("Content-type: text/html;charset=\"utf-8\"");
''
$nombre =htmlentities($_POST['nombre']);
$correo =htmlentities($_POST['correo']);
$mensaie =htmlentities($_POST['mensaje']);
$direccion_ip =$_SERVER ['REMOTE_ADDR'];

$header = 'From: ' .$correo."\n";
$header = "X-Mailer: PHP/" phpversion(). "
	\n";
$header = "Content-type:plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . "
	\n";
$mensaje .= "Su e-mail es: " . $correo . "
	\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "
	\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$mensaje = "desde la IP" .$direccion_ip. "\n";

$para = 'carbalosamuel@hotmail.com';
$asunto = 'Mensaje de mi web cristiana';

if (correo($para,$asunto utf8_decode($mensaje), $header))
echo "tu mensaje ha sido enviado exitosamente";

else{
	echo "error en el envio";
}
?>