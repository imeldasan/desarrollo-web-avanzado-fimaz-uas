<?php

// Clase base Usuario
// Esta clase representa un usuario del sistema

class Usuario {

    // Atributos privados para aplicar encapsulamiento
    private $nombre;
    private $correo;

    // Constructor que recibe nombre y correo
    public function __construct($nombre, $correo){

        // Validamos que el correo tenga formato correcto
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            throw new Exception("El correo no tiene un formato válido");
        }

        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    // Método para obtener el nombre
    public function getNombre(){
        return $this->nombre;
    }

    // Método para obtener el correo
    public function getCorreo(){
        return $this->correo;
    }

    // Método para modificar el nombre
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    // Método para modificar el correo con validación
    public function setCorreo($correo){

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            throw new Exception("El correo ingresado no es válido");
        }

        $this->correo = $correo;
    }

}

?>