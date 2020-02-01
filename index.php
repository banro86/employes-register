<?php 

   //sirve para incluir archivos desde otras rutas hola y chao y re chao y chao again hhuhu sd sss
   require_once "Controller/rutasController.php";
   require_once "Controller/adminController.php";
   require_once "Models/rutasModel.php";
   require_once "Models/adminModel.php";

   $rutas = new RutasController();
   $rutas -> Plantilla();
   
 ?>
