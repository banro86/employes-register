<?php
	 session_start();
	 
	  if(!$_SESSION["ingreso"]){
		header("location:index.php?ruta=ingreso");
		
		exit();
	  }
	 ?>
	<br>
	<h1>REGISTRAR UN EMPLEADO</h1>

	<form method="post">		
		<input type="text" placeholder="Nombre" name="nombreRegistro" required>
		<input type="text" placeholder="Apellido" name="apellidoRegistro" required>
		<input type="email" placeholder="Email" name="emailRegistro" required>
		<input type="text" placeholder="Puesto" name="puestoRegistro" required>
		<input type="text" placeholder="Salario" name="salarioRegistro" required>
		<input type="submit" value="Registrar">
	</form>

	<?php

     $registrar = EmpleadosController::RegistroEmpleadoC();
    ?>
