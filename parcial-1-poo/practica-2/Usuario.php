<?php

//creamos la una clase llamada usuario
class Usuario{
    //ledamos dos atributos privados a estaclase
    private $nombre;
    private $correo;

    //creamos el contructor que se encargara de inicialisar el nombre y correo del usuario
    public function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    //creamos el metodo getnombre para obtener el nombre del usuario
    public function getNombre(){
        return $this->nombre;
    }

    //creamos el metodo getcorreo para obtener el correo del usuario
    public function getCorreo(){
        return $this->correo;
    }

    //creamos el metodo setnombre para modificar el valor del atributo $nombre
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    //creamos el metodo setnombre para modificar el valor del atributo $correo
    public function setCorreo($correo) {
        $this->correo = $correo;
    }
}

?>