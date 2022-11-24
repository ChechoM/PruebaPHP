<?php   
    class ProductosControler{

        public function index(){
            require_once "./models/productos/models.productos.php";
            $productos = new ProductosModelo();
            $data = $productos->getProductos();

            require_once "./views/productos/view.productos.php";

        }
    }
?>