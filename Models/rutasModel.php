
<?php

class Modelo{

 //Static porque el metodo recibira parametros
	static public function RutasModel($rutas){

		if($rutas == "ingreso" || $rutas == "registrar" || $rutas == "empleados" || $rutas == "salir")
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