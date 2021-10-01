<?php
include_once "../lib/conexionPoo.php";
class hu extends conexionPoo{
    public $idHu;
    public $nombre;
    public $estado;
    public $idProyecto;

    public function crear(){
        $this->conectar();
        $eje =mysqli_prepare($this->con,"INSERT INTO historiasusuario (nombre,idProyecto) VALUES (?,?)");
        $eje->bind_param("si",$this->nombre,$this->idProyecto);
        $eje->execute();

    }



    public static function todos($Id){
        $conexion = new conexionPoo();
        $conexion->conectar();
        $eje = mysqli_prepare($conexion->con,"SELECT * FROM historiasusuario WHERE idProyecto= ?");
        $eje->bind_param("i",$Id);
        $eje->execute();
        $res = $eje->get_result();
        $hus = [];
        while ($hu = $res->fetch_object(hu::class)) 
           array_push($hus,$hu);
        return $hus;

    }



    public static function ObtenerPorId($Id){
        $conexion = new conexionPoo();
        $conexion->conectar();
        $eje = mysqli_prepare($conexion->con,"SELECT * FROM historiasusuario WHERE idHu= ?");
        $eje->bind_param("i",$Id);
        $eje->execute();
        $res = $eje->get_result();
        return $res->fetch_object(hu::class);

    }


 
  

    



}

?>