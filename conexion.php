<?php

    class Conectar{
        private $servidor="localhost";
		private $user="root";
		private $bd="crudcinar2";
        private $password="";
        
        public function conexion(){
            $conexion=mysqli_connect($this->servidor,
                                     $this->user,
                                     $this->password,
                                     $this->bd);
            return $conexion;	
		}
    }

    /*$obj = new conectar();
    if($obj->conexion()){
        echo "La conexion se realizo exitosamente";
    }else{
        echo "La conexion a la base de datos FALLO!";
    }*/
?>