<?php

require_once "Usuario.php";

$usuario1 = new Usuario("imelda sanchez", "imelda@sanchez.com");

echo "<h2>Datos del Usuario</h2>";
echo "Nombre: " . $usuario1->getNombre() . "<br>";
echo "Correo: " . $usuario1->getCorreo() . "<br>";