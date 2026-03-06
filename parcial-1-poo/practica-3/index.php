<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";

try {

    // Crear un administrador
    $admin = new Admin("Juan Perez", "juan@correo.com");

    echo "<h3>Administrador</h3>";
    echo "Nombre: " . $admin->getNombre() . "<br>";
    echo "Correo: " . $admin->getCorreo() . "<br>";
    echo "Rol: " . $admin->getRol() . "<br><br>";


    // Crear un alumno
    $alumno = new Alumno("Maria Lopez", "maria@correo.com", "A12345");

    echo "<h3>Alumno</h3>";
    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Correo: " . $alumno->getCorreo() . "<br>";
    echo "Matricula: " . $alumno->getMatricula() . "<br>";
    echo "Rol: " . $alumno->getRol() . "<br>";



    // Usuario con correo inválido (para probar excepción)
    $usuarioError = new Usuario("Pedro", "correo_invalido");

} catch(Exception $e){

    echo "<br><b>Error:</b> " . $e->getMessage();

}

?>