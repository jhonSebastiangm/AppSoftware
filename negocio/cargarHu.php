<?php

  include_once('../orm/hu.php');
  $id = $_POST['idHu'];
  $company = hu::ObtenerPorId($id);
  $jsonstring = json_encode($company);
  echo $jsonstring;
?>
