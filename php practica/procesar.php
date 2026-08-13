<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$turno = $_POST["turno"];
$mensaje = $_POST["mensaje"];

echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $email . "<br>";
echo "Turno: " . $turno . "<br>";
echo "Mensaje: " . $mensaje . "<br>";
?>