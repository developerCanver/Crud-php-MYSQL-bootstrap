<?php

require_once "../conexion.php";
require_once "../metodosCrud.php";

$id = $_POST['id'];

echo "<br>";
echo ($id);

$datos=$id;

$obj = new Metodos();
if($obj->eliminarDatos($datos)==1){
    header("location:../index.php");
}else{
    echo "No se puede Eliminar estudiante";
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