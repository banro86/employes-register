<?php 

class RutasController{

	public function Plantilla(){
		include "Views/plantillas.php";
	}

    public function Rutas(){
     
       if (isset($_GET["ruta"])){
       	    $rutas = $_GET["ruta"];
       }
       else
       {
       	$rutas = "index";
       }

       $respuesta = Modelo::RutasModel($rutas);

       include $respuesta;
    }
}
?>