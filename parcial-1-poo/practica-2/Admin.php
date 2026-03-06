<?php

//mandamos a llamar el archivo usuario.php para utilizar la clase usuario
require_once "Usuario.php";

// creamos la clase admin que hereda de la clase usuario
class Admin extends Usuario {
    
    //creamos el metodo que devuelve el rol del usuario
    public function getRol(){
        return "Administrador";
    }

}