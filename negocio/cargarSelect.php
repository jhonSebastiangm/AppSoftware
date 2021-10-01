<?php

include('../lib/database.php');


  $query = "SELECT idCompany,nombre FROM company";
  $result = mysqli_query($connection, $query);
  
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
  }
  
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'idCompany' => $row['idCompany'],
      'nombre' => $row['nombre']
      
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;


?>
