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
               <td><a href=index.php?ruta=editar&id=".$value['id']."><button>Editar</button></a></td>
               <td><a href=index.php?ruta=empleados&id=".$value['id']."><button>Borrar</button></a></td>
             </tr>";
    }
     // header("location:index.php?ruta=empleados");
    }

    public static function EditarEmpleadosC($id){
        $tableBD = "employe";
        $datos = EmpleadosModel::EditarEmpleadosM($tableBD,$id);

        echo '
        <input type="text" placeholder="Nombre" name="nombreEditar" value="'.$datos["name"].'" required>
		<input type="text" placeholder="Apellido" name="apellidoEditar" value="'.$datos["last_name"].'" required>
		<input type="email" placeholder="Email" name="emailEditar" value="'.$datos["email"].'" required>
		<input type="text" placeholder="Puesto" name="puestoEditar" value="'.$datos["job"].'"required>
		<input type="text" placeholder="Salario" name="salarioEditar" value="'.$datos["salary"].'" required>
        <input type="submit" value="Guardar">';
      }


      public static function ActualizarEmpleadosC($id){
        if(isset($_POST["nombreEditar"])){
            $datosUpdateController = array("nombre"=>$_POST["nombreEditar"], "apellido"=>$_POST["apellidoEditar"], "email"=>$_POST["emailEditar"], "puesto"=>$_POST["puestoEditar"],"salario"=>$_POST["salarioEditar"]  );
            $tableBD = "employe";
            $answer = EmpleadosModel::ActualizarEmpleadoM($datosUpdateController,$tableBD,$id);

            if($answer){
                header("location:index.php?ruta=empleados");
            }
            else{
                echo "ERROR AL ACTUALIZAR DATOS EN BD";
            }
        }
    }

        public static function EliminarEmpleadosC(){
            if(isset($_GET["id"])){
            $tableBD = "employe";
            $id = $_GET["id"];
            $answer = EmpleadosModel::EliminarEmpleadosM($tableBD,$id);

            if($answer){
                header("location:index.php?ruta=empleados");
            }
            else{
                echo "ERROR AL ELIMINAR DATOS EN BD";
            }
          }
        }
     
}