<?php

// Importamos la clase Usuario
require_once "Usuario.php";

// Clase Alumno que hereda de Usuario
class Alumno extends Usuario{

    // Atributo adicional
    private $matricula;

    // Constructor
    public function __construct($nombre, $correo, $matricula){

        // Llamamos al constructor del padre
        parent::__construct($nombre, $correo);

        $this->matricula = $matricula;
    }

    // Obtener matrícula
    public function getMatricula(){
        return $this->matricula;
    }

    // Método para el rol
    public function getRol(){
        return "Alumno";
    }

}

?>