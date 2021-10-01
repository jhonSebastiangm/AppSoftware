<?php

  include_once('../orm/ticket.php');
  $id = $_POST['idTicket'];
  $ticket = ticket::ObtenerPorId($id);
  $jsonstring = json_encode($ticket);
  echo $jsonstring;
?>
