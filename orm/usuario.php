<?php
include_once "../lib/conexionPoo.php";
class usuario extends conexionPoo{
    public $idUsuario ;
    public $usuario;
    public $contrasena;
    public $password_confirmation;
    public $idCompany;
    public $tipoUsuario;

    public function crear(){
        $this->conectar();
        $eje =mysqli_prepare($this->con,"INSERT INTO usuario(usuario,contrasena,idCompany,tipoUsuario) VALUES (?,?,?,?)");
        $eje->bind_param("ssii",$this->usuario,$this->contrasena,$this->idCompany,$this->tipoUsuario);
        $eje->execute();

    }

    public static function ObtenerPorUsuario($usuario){
        $conexion = new conexionPoo();
        $conexion->conectar();
        $eje = mysqli_prepare($conexion->con,"SELECT * FROM usuario WHERE usuario= ?");
        $eje->bind_param("s",$usuario);
        $eje->execute();
        $res = $eje->get_result();
        return $res->fetch_object(usuario::class);
    }



}

?>