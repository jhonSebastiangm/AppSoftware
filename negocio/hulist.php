<?php

  include_once('../orm/hu.php');
  $idProyecto=$_POST['idProyecto'];
  $hus=hu::todos($idProyecto);
  $jsonstring = json_encode($hus);
  echo $jsonstring;
?>
