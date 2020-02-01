	<?php
	 session_start();
	 //$status = session_status();
	 /*if(!isset($_SESSION)) 
	 { 
		header("location:index.php?ruta=ingreso");		
		exit();
	 }
	 else
	 {
		 session_destroy();
		 session_start(); 
	 }*/
	 
	  //if(!$_SESSION["ingreso"]){
	//	  echo $status;
	/*if(!isset($_SESSION)){
		header("location:index.php?ruta=ingreso");		
		exit();
	  } 
	  else */
	    if(!$_SESSION["ingreso"]){
		header("location:index.php?ruta=ingreso");		
		exit();
	  }

	 ?>

	<br>
	<h1>Empleados</h1>
	<table id="t1" border="1">		
		<thead>			
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Puesto</th>
				<th>Salario</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>			
			<?php	 
			$listar = EmpleadosController::ListarEmpleadosC();
			?>
		</tbody>
	</table>
<br>


