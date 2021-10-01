<?php

include_once('../orm/proyecto.php');

if(isset($_POST['nombre'])) {

  $proyecto = new proyecto();
  $proyecto->nombre=$_POST['nombre'];
  $proyecto->idCompany=$_POST['Select'];
  $proyecto->crear();
 
}

?>
