<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "issamariajose@gmail.com";
  $subject = "Nuevo mensaje de contacto";

  $body = "Nombre: " . $name . "\n";
  $body .= "Correo electrónico: " . $email . "\n";
  $body .= "Mensaje: " . $message . "\n";

  if (mail($to, $subject, $body)) {
    header("Location: enviado.html");
    exit();
  } else {
   
    header("Location: error.html");
    exit();
  }
}
?>