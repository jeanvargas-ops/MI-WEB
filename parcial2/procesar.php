<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mascota = $_POST["mascota"];

echo "Turno reservado en Veterinaria Patitas<br>";

echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $correo . "<br>";
echo "Mascota: " . $mascota . "<br>";

$servicios = ["Consulta general - Bs 60", "Vacuna antirrábica - Bs 40", "Baño y corte - Bs 50"];

foreach ($servicios as $servicio) {
    echo $servicio . "<br>";
}

echo "Te atiende Jean Brandon Vargas Mercado";
?>