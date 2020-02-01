<?php

require_once "conexionBD.php";

class AdminModel extends conexionBD{

     public static function IngresoM($datosConexion,$tableBD){
      
       $pdo = ConexionBD::ConectarBD()->prepare("SELECT user_name,user_password FROM $tableBD WHERE user_name = :usuario");
       $pdo -> bindParam(":usuario",$datosConexion["usuario"], PDO::PARAM_STR);
       $pdo -> execute();
       $resultado = $pdo -> fetch();
       return $resultado;
       $pdo -> close();
 
    }
}
