<?php

include_once('../orm/ticket.php');

if(isset($_POST['idHu'])) {

  $ticket=new ticket();
  $ticket->idHu=$_POST['idHu'];
  $ticket->comentario=$_POST['comentario'];
  $ticket->estado=1;
  $ticket->crear();
 
}

?>
