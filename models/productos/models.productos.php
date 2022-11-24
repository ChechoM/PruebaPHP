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
    
    
    }
?>