<br>
<div class="center-align z-depth-4 card-panel">

	<h4 class="deep-purple-text darken-2">INGRESAR</h4>
<form method="post" action="">
	<div class="row">
	<div class="col s4"></div>
	 <div class="col s4">
		<div class="input-field">
		   <i class="material-icons prefix">account_circle</i>
			<input type="text" id="usuarioIngreso" name="usuarioIngreso" class="validate">
			<label for="usuarioIngreso">Nombre</label>
			<!-- <span class="helper-text left-align" data-error="Ingrese nombre de usuario" data-success="Ok">Ingrese nombre de usuario</span> -->
		</div>
		<div class="input-field">
			<i class="material-icons prefix">lock</i>
			<input type="password" id="claveIngreso" name="claveIngreso" class="validate">
			<label for="claveIngreso">Contraseña</label>
			<!-- <span class="helper-text left-align" data-error="Ingrese su contraseña" data-success="Ok">Ingrese su contraseña</span> -->
		</div>
			<button class="btn-small waves-effect waves-light orange darken-4" type="submit" name="action">Ingresar</button>
	</div>
	<div class="col s4"></div>
	</form>
</div>
	<?php
	 $ingreso = AdminController::IngresoC();
	?>