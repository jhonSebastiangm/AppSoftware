<?php

  include_once('../orm/company.php');
  $companies=company::todos();
  $jsonstring = json_encode($companies);
  echo $jsonstring;
?>
