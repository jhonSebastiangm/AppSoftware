<?php

include_once('../orm/company.php');

if(isset($_POST['idCompany'])) {
  $id = $_POST['idCompany'];
  $company = company::ObtenerPorId($id);
  $company->Eliminar();
}

?>
