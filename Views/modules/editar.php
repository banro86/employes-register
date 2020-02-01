<?php
	 session_start();
	 
	  if(!$_SESSION["ingreso"]){
		header("location:index.php?ruta=ingreso");		
		exit();
	  }
	 ?>
	<br>
	<h1>EDITAR UN EMPLEADO</h1>

	<form method="post">		
        <?php
        $editar = EmpleadosController::EditarEmpleadosC($_GET["id"]);
        ?>
	</form>

    <?php
     $actualizar = EmpleadosController::ActualizarEmpleadosC($_GET["id"]);
    ?>

