<?php
include_once "../lib/conexionPoo.php";
class proyecto extends conexionPoo{
    public $idProyecto;
    public $nombre;
    public $idCompany;

    public function crear(){
        $this->conectar();
        $eje =mysqli_prepare($this->con,"INSERT INTO proyecto(nombre,idCompany) VALUES (?,?)");
        $eje->bind_param("si",$this->nombre,$this->idCompany);
        $eje->execute();

    }

 
    public static function todos(){
        $conexion = new conexionPoo();
        $conexion->conectar();
        $eje = mysqli_prepare($conexion->con,"SELECT * FROM proyecto");
        $eje->execute();
        $res = $eje->get_result();
        $proyectos = [];
        while ($proyect = $res->fetch_object(proyecto::class)) 
           array_push($proyectos,$proyect);
        return $proyectos;

    }



    public static function ObtenerPorId($Id){
        $conexion = new conexionPoo();
        $conexion->conectar();
        $eje = mysqli_prepare($conexion->con,"SELECT * FROM company WHERE idCompany= ?");
        $eje->bind_param("i",$Id);
        $eje->execute();
        $res = $eje->get_result();
        return $res->fetch_object(company::class);

    }



}

?>