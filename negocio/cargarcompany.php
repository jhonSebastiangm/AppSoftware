<?php

  include_once('../orm/company.php');
  $id = $_POST['idCompany'];
  $company = company::ObtenerPorId($id);
  $jsonstring = json_encode($company);
  echo $jsonstring;
?>
