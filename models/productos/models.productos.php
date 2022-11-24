<?php
    class ProductosModelo{
        private $db;
        private $productos;

        public function __construct()
        {

            $this-> db = Conectar::conexion();
            $this-> productos = array();
        }

        public function getProductos(){
            $sql = "SELECT * FROM `Productos`";
            $result = $this->db->query($sql);            
            $this-> productos = mysqli_fetch_all($result,MYSQLI_ASSOC);

            return $this -> productos;
        }

        public function insertarProducto(
            $Id,
            $Nombre,
            $Referencia,
            $Precio,
            $Peso,
            $Categoria,
            $Stock,
            $FechaCreacion
        ){

            
           
            try {                
                $sql = "INSERT INTO Productos (Nombre, Referencia, Precio, Peso, Categoria, Stock, FechaCreacion) 
                VALUES ('$Nombre', '$Referencia', '$Precio', '$Peso', '$Categoria', '$Stock', '$FechaCreacion')";
                $this->db->query($sql); 
            } catch (\Throwable $th) {
                echo("controlador insertarProducto no funciona");
            }
           
            
        }

        public function modificar(
            $Id,
            $Nombre,
            $Referencia,
            $Precio,
            $Peso,
            $Categoria,
            $Stock,
            $FechaCreacion
        ){
           
            try {                
                $sql = "UPDATE Productos SET Nombre='$Nombre', Referencia='$Referencia', Precio='$Precio', Peso='$Peso', Categoria='$Categoria', Stock='$Stock', FechaCreacion='$FechaCreacion'
                WHERE Id= '$Id'";
                $this->db->query($sql); 
            } catch (\Throwable $th) {
                echo("controlador insertarProducto no funciona");
            }
           
            
        }

        public function eliminar($Id){            
           
            try {                
                $sql = "DELETE Productos WHERE Id= '$Id'";
                $this->db->query($sql); 
            } catch (\Throwable $th) {
                echo("controlador insertarProducto no funciona");
            }
           
            
        }

        public function getProducto($Id){
            $sql = "SELECT * FROM `Productos` WHERE Id = '$Id'";
            $result = $this->db->query($sql);            
            $this-> productos = mysqli_fetch_all($result,MYSQLI_ASSOC);

            return $this -> productos;
        }
    
    
    }
