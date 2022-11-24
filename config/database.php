<?php  

    class Conectar{

        public static function conexion(){
            try {
                $conexion = new mysqli("localhost","root","","PruebaPhp"); 
            } catch (\Throwable $th) {
                echo($th + "error en la conexion");
            }
            return $conexion;
        }
    }
?>