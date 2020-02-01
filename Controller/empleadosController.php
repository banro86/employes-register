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

    public static function ListarEmpleadosC(){
      $tableBD = "employe";
      $datos = EmpleadosModel::ListarEmpleadosM($tableBD);
      foreach ($datos as $key => $value) {
        echo "<tr>
               <td>".$value['name']."</td>
               <td>".$value['last_name']."</td>
               <td>".$value['email']."</td>
               <td>".$value['job']."</td>
               <td>".$value['salary']."</td>
               <td><button>Editar</button></td>
               <td><button>Borrar</button></td>
             </tr>";
    }
     // header("location:index.php?ruta=empleados");
    }
}