<?php

class EmpleadosController{

    public static function RegistroEmpleadoC(){
        if(isset($_POST["nombreRegistro"])){
            $datosController = array("nombre"=>$_POST["nombreRegistro"], "apellido"=>$_POST["apellidoRegistro"], "email"=>$_POST["emailRegistro"], "puesto"=>$_POST["puestoRegistro"],"salario"=>$_POST["salarioRegistro"]  );
            $tableBD = "employe";
            $answer = EmpleadosModel::RegistroEmpleadoM($datosController,$tableBD);

            if($answer){
                header("location:index.php?ruta=empleados");
            }
            else{
                echo "ERROR AL INSERTAR DATOS EN BD";
            }
        }

    }
}