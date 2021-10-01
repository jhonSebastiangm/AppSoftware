<?php

include_once('../orm/ticket.php');

if(isset($_POST['idTicket'])) {
  $id = $_POST['idTicket'];
  $ticket = ticket::ObtenerPorId($id);
  $ticket->Eliminar();
}

?>
