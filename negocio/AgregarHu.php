<?php

include_once('../orm/hu.php');
include_once('../orm/ticket.php');

if(isset($_POST['nombre'])) {

  $hu = new hu();
  $hu->nombre=$_POST['nombre'];
  $hu->idProyecto=$_POST['idProyecto'];
  $hu->crear();

  $ticket= new ticket();
  $ticket = ticket::ObtenerIdHu();
  var_dump($ticket);
  $ticket->comentario=$_POST['comentario'];
  $ticket->estado=1;
  $ticket->crear();
 
}

?>
