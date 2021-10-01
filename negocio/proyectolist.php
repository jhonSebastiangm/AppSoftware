<?php

  include_once('../orm/proyecto.php');
  $proyectos=proyecto::todos();
  $jsonstring = json_encode($proyectos);
  echo $jsonstring;
?>
