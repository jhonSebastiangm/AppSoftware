<?php

    include_once('../orm/company.php');

if(isset($_POST['id'])) {
  $company=new company();
  $company->nombre=$_POST['nombre'];
  $company->nit=$_POST['nit'];
  $company->telefono=$_POST['telefono'];
  $company->direccion=$_POST['direccion'];
  $company->correo=$_POST['correo'];
  $company->idCompany=$_POST['id'];
  $company->Modificar();

}

?>
