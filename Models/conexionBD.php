<?php

class ConexionBD{

     public static function conectarBD(){

        $bd = new PDO("mysql:host=localhost;dbname=employes","root","");
        return $bd;
    }
}

?>