<?php

  include_once('../orm/ticket.php');
  $tickets=ticket::todos();
  $jsonstring = json_encode($tickets);
  echo $jsonstring;
?>
