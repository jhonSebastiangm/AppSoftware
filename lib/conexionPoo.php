<?php 

class conexionPoo{
    public $con;
    public function conectar(){
      $this->con=mysqli_connect("localhost","u693577563_appsoftware","K9n6pgm2","u693577563_appsoftware");
    }
}

?>