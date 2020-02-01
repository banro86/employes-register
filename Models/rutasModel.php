
<?php

class Modelo{

 //Static porque el metodo recibira parametros
	 public static function RutasModel($rutas){

		if($rutas == "ingreso" || $rutas == "registrar" || $rutas == "empleados" || $rutas == "salir" || $rutas == "editar")
		{
			$pagina = "Views/modules/".$rutas.".php";
		}else 
		   if($rutas == "index" ){
		   	$pagina = "Views/modules/ingreso.php";
		   }
		   else{
		   	$pagina = "Views/modules/ingreso.php";
		   }

        return $pagina;
	}
}
?>