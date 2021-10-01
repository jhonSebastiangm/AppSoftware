<?php
  include_once('../orm/usuario.php');
if(isset($_POST['usuario'])) {
    $usuario= new usuario();
    $usuario->usuario=$_POST['usuario'];
    $usuario->idCompany=$_POST['company'];
    $usuario->contrasena=md5($_POST['password']);
    $usuario->password_confirmation=md5($_POST['password_confirmation']);
    $usuario->tipoUsuario=1;
    $user = usuario::ObtenerPorUsuario($usuario->usuario);
    if ($user) {
        echo 1;
    }else {
        if ($usuario->contrasena != $usuario->password_confirmation) {
            echo 2;
        }else {
            $usuario->crear();   
            echo 3;  
            
        }
    }
    

}
?>