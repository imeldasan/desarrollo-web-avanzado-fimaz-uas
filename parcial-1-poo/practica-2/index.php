<?php

// Incluimos la clase Admin
require_once "Admin.php";

// Creamos un objeto de tipo Admin
$admin = new Admin("Juan Perez", "juan@example.com");

// Mostramos los datos del administrador
echo "<h2>Datos del Administrador</h2>";

echo "Nombre: " . $admin->getNombre() . "<br>";
echo "Correo: " . $admin->getCorreo() . "<br>";
echo "Rol: " . $admin->getRol();

?>