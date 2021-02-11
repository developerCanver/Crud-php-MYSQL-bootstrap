<?php

require_once "../conexion.php";
require_once "../metodosCrud.php";

$nombre = $_POST['txtnombre'];
$apellido = $_POST['txtapellido'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];

$nota1 = (float) $nota1;
$nota2 = (float) $nota2;

$datos=array($nombre,$apellido,$nota1,$nota2);

$obj = new Metodos();
if($obj->insertarDatosNombre($datos)==1){
    header("location:../index.php");
}else{
    echo "Fallo el ingreso del nuevo estudiante";
}







/*echo $nombre ."<br>"; 
echo $apellido."<br>";

$nota1 = (float) $nota1;
$nota2 = (float) $nota2;

var_dump($nota1);
echo "<br>";
var_dump($nota2);
echo "<br>";
echo "<br>";


echo $nota1 + $nota2;*/




?>