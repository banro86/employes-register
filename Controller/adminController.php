<?php   

class AdminController{

   public function IngresoC(){
      if(isset($_POST["usuarioIngreso"])){
        $datosController = array("usuario"=>$_POST["usuarioIngreso"], "clave"=>$_POST["claveIngreso"]);
        $tableBD = "administrator";
        $answer = AdminModel::IngresoM($datosController,$tableBD);

        if($answer["user_name"] == $_POST["usuarioIngreso"] && $answer["user_password"] == $_POST["claveIngreso"]){
            //nos permite hacer qu enuestra secciones o paginas sean privadas y tengan que loguearse para pode entrar
            session_start();
            $_SESSION["ingreso"] = true;
            header("location:index.php?ruta=empleados");
        }
        else{
            echo "ERROR AL INGRESAR";
        }
    }

   }    
}
?>
