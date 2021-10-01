<?php
include_once "../lib/conexionPoo.php";
class company extends conexionPoo{
    public $idCompany;
    public $nombre;
    public $nit;
    public $telefono;
    public $direccion;
    public $correo;

    public function crear(){
        $this->conectar();
        $eje =mysqli_prepare($this->con,"INSERT INTO company(nombre,nit,telefono,direccion,correo) VALUES (?,?,?,?,?)");
        $eje->bind_param("sisss",$this->nombre,$this->nit,$this->telefono,$this->direccion,$this->correo);
        $eje->execute();

    }

    public function Modificar(){
        $this->conectar();
        $eje = mysqli_prepare($this->con,"UPDATE company SET nombre=?, nit=?, telefono=?, direccion=?, correo=? WHERE idCompany=?");
        $eje->bind_param("sisssi",$this->nombre,$this->nit,$this->telefono,$this->direccion,$this->correo,$this->idCompany);
        $eje->execute();
    }

    public static function todos(){
        $conexion = new conexionPoo();
        $conexion->conectar();
        $eje = mysqli_prepare($conexion->con,"SELECT * FROM company");
        $eje->execute();
        $res = $eje->get_result();
        $companies = [];
        while ($company = $res->fetch_object(company::class)) 
           array_push($companies,$company);
        return $companies;

    }

    public function Eliminar(){
        $this->conectar();
        $eje=mysqli_prepare($this->con,"DELETE FROM company WHERE idCompany=?");
        $eje->bind_param("i",$this->idCompany);
        $eje->execute();
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