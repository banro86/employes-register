<?php

class ConexionBD{

    static public function conectarBD(){

        $bd = new PDO("mysql:host=localhost;dbname:employes","root","");
        return $bd;
    }
}

?>