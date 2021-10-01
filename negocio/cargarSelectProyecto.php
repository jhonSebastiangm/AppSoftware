<?php

include('../lib/database.php');

    session_start();
    $idCompany=$_SESSION['idCompany'];
  $query = "SELECT idProyecto,nombre FROM proyecto WHERE idCompany='$idCompany'";
  $result = mysqli_query($connection, $query);
  
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
  }
  
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'idProyecto' => $row['idProyecto'],
      'nombre' => $row['nombre']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;


?>
