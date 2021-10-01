<?php
include_once "../lib/conexionPoo.php";
class ticket extends conexionPoo{
    public $idTicket;
    public $comentario;
    public $estado;
    public $idHu;

    public function crear(){
        $this->conectar();
        $eje =mysqli_prepare($this->con,"INSERT INTO ticket (comentario,estado,idHu) VALUES (?,?,?)");
        $eje->bind_param("sii",$this->comentario,$this->estado,$this->idHu);
        $eje->execute();

    }
    
    public static function todos(){
        $conexion = new conexionPoo();
        $conexion->conectar();
        $eje = mysqli_prepare($conexion->con,"SELECT * FROM ticket");
        $eje->execute();
        $res = $eje->get_result();
        $tickets = [];
        while ($ticket = $res->fetch_object(ticket::class)) 
           array_push($tickets,$ticket);
        return $tickets;

    }

    public static function ObtenerIdHu(){
        $conexion = new conexionPoo();
        $conexion->conectar();
        $eje = mysqli_prepare($conexion->con,"SELECT idHu from historiasusuario order by idHu desc limit 1");
        $eje->execute();
        $res = $eje->get_result();
        return $res->fetch_object(ticket::class);
    }

    public static function ObtenerPorId($Id){
        $conexion = new conexionPoo();
        $conexion->conectar();
        $eje = mysqli_prepare($conexion->con,"SELECT * FROM ticket WHERE idTicket= ?");
        $eje->bind_param("i",$Id);
        $eje->execute();
        $res = $eje->get_result();
        return $res->fetch_object(ticket::class);

    }

    public function Modificar(){
        $this->conectar();
        $eje = mysqli_prepare($this->con,"UPDATE ticket SET comentario=?, estado=? WHERE idTicket=?");
        $eje->bind_param("sii",$this->comentario,$this->estado,$this->idTicket);
        $eje->execute();
    }

    public function Eliminar(){
        $this->conectar();
        $eje=mysqli_prepare($this->con,"DELETE FROM ticket WHERE idTicket=?");
        $eje->bind_param("i",$this->idTicket);
        $eje->execute();
    }






}

?>