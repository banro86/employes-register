<?php

require_once "conexionBD.php";

class EmpleadosModel extends ConexionBD{

    public static function RegistroEmpleadoM($datosController,$tableBD){
        $pdo = ConexionBD::ConectarBD()->prepare("INSERT INTO $tableBD (name,last_name,email,job,salary) VALUES(:nombre,:apellido,:email,:puesto,:salario)");
        $pdo -> bindParam(":nombre",$datosController["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido",$datosController["apellido"], PDO::PARAM_STR);
        $pdo -> bindParam(":email",$datosController["email"], PDO::PARAM_STR);
        $pdo -> bindParam(":puesto",$datosController["puesto"], PDO::PARAM_STR);
        $pdo -> bindParam(":salario",$datosController["salario"], PDO::PARAM_INT);
    
        if($pdo -> execute()){
            return true;
        }
          else{
            return false;
        }
        $pdo -> close();

    }
}