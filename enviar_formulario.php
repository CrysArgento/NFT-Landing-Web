<?php
if(isset($_POST['email'])) {

$destino = "infotokenomics@gmail.com"; // Reemplaza esto con tu dirección de correo electrónico
$asunto = "Tokenomics Web";
$contenido = "Nombre: " . $_POST['name'] . "\nSimbolo: " . $_POST['symbol'] . "\nDecimales: " . $_POST['Decimals'] . "\nBalance: " . $_POST['Balance'] . "\nWallet Owner: " . $_POST['ownerwallet'] . "\nTipo de token: " . $_POST['typetoken'] ."\nEmail: " . $_POST['email'] . "\nMensaje:" . $_POST['mensaje'];

$headers = "From: $_POST['name'] <$_POST['email']>\r\n";
    $headers .= "Reply-To: $_POST['email']\r\n";

mail($destino, $asunto, $contenido, $headers);


if(mail($destino, $asunto, $contenido, $headers)){
    echo "Mensaje enviado correctamente.";
  }else{
    echo "Hubo un error al enviar el mensaje.";
  }
}
