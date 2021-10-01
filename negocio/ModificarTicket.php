<?php

    include_once('../orm/ticket.php');

if(isset($_POST['idTicket'])) {
  $ticket=new ticket();
  $ticket->comentario=$_POST['comentario'];
  $ticket->estado=$_POST['estado'];
  $ticket->idTicket=$_POST['idTicket'];
  $ticket->Modificar();
}

?>
