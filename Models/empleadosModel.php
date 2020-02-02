<?php

require_once "conexionBD.php";

class EmpleadosModel extends ConexionBD{
    private $personas;

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

    public static function ListarEmpleadosM($tableBD){
        $pdo = ConexionBD::ConectarBD()->prepare("SELECT id,name,last_name,email,job,salary FROM $tableBD ORDER BY name ASC");
        $pdo -> execute();
        return $pdo -> fetchAll();
        $pdo -> close();
    }

    public static function EditarEmpleadosM($tableBD,$id)
    {
        $pdo = ConexionBD::ConectarBD()->prepare("SELECT id,name,last_name,email,job,salary FROM $tableBD WHERE id = :id");
        $pdo -> bindParam(":id",$id, PDO::PARAM_INT);
        $pdo -> execute();
        return $pdo -> fetch();
        $pdo -> close();
    }

    public static function ActualizarEmpleadoM($datosUpdateController,$tableBD,$id)
    {
        $pdo = ConexionBD::ConectarBD()->prepare("UPDATE $tableBD SET name=:nombre,last_name=:apellido,email=:email,job=:puesto,salary=:salario WHERE id = :id");
        $pdo -> bindParam(":nombre",$datosUpdateController["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido",$datosUpdateController["apellido"], PDO::PARAM_STR);
        $pdo -> bindParam(":email",$datosUpdateController["email"], PDO::PARAM_STR);
        $pdo -> bindParam(":puesto",$datosUpdateController["puesto"], PDO::PARAM_STR);
        $pdo -> bindParam(":salario",$datosUpdateController["salario"], PDO::PARAM_INT);
        $pdo -> bindParam(":id",$id, PDO::PARAM_INT);
        
        if($pdo -> execute()){
            return true;
        }
          else{
            return false;
        }
        $pdo -> close();
    }

    public static function EliminarEmpleadosM($tableBD,$id){
        $pdo = ConexionBD::ConectarBD()->prepare("DELETE FROM $tableBD WHERE id = :id");
        $pdo -> bindParam(":id",$id, PDO::PARAM_INT);
        
        if($pdo -> execute()){
            return true;
        }
          else{
            return false;
        }
        $pdo -> close();

    }

    
}