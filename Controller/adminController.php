<?php   

class AdminController{

    public static function IngresoC(){
        if(isset($_POST["usuarioIngreso"])){
            $datosController = array("usuario"=>$_POST["usuarioIngreso"], "clave"=>$_POST["claveIngreso"]);
            $tableBD = "administrator";
            $answer = AdminModel::IngresoM($datosController,$tableBD);

            if($answer["user_name"] == $_POST["usuarioIngreso"] && $answer["user_password"] == $_POST["claveIngreso"]){
                //nos permite hacer que nuestra secciones o paginas sean privadas y tengan que loguearse para pode entrar
                session_start();
                $_SESSION["ingreso"] = true;
                header("location:index.php?ruta=empleados");
              // EmpleadosController::ListarEmpleadosC();
            }
            else{
                echo "ERROR AL INGRESAR";
            }
        }

   }    
}
?>
