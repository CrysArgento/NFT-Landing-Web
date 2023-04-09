<?php

$destino = "infotokenomics@gmail.com"; // Reemplaza esto con tu dirección de correo electrónico
$asunto = "Tokenomics Web";
$contenido = "Nombre: " . $_POST['name'] . "\nSimbolo: " . $_POST['symbol'] . "\nDecimales: " . $_POST['Decimals'] . "\nBalance: " . $_POST['Balance'] . "\nWallet Owner: " . $_POST['ownerwallet'] . "\nTipo de token: " . $_POST['typetoken'] ."\nEmail: " . $_POST['email'] . "\nMensaje:" . $_POST['mensaje'];

if(mail($destino, $asunto, $contenido)){
    echo "Mensaje enviado correctamente.";
  }else{
    echo "Hubo un error al enviar el mensaje.";
  }

?>