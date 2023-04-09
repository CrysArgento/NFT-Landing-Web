<?php

$destino = "infotokenomics@gmail.com"; // Reemplaza esto con tu dirección de correo electrónico

$nombre = $_POST['name'];
$simbolo = $_POST['symbol'];
$decimales = $_POST['Decimals'];
$balance = $_POST['Balance'];
$walletowner = $_POST['ownerwallet'];
$typetoken = $_POST['typetoken'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$contenido = "Nombre: " . $nombre . "\nSimbolo: " . $simbolo . "\nBalance: " . $balance . "\nWallet Owner: " . $walletowner . "\nTipo de token: " . $typetoken ."\nEmail: " . $email . "\nMensaje:\n" . $mensaje;

mail($destino, "Mensaje enviado desde formulario de contacto", $contenido);

echo ("Mensaje enviado correctamente.");

?>