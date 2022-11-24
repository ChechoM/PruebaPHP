<?php   
    class ProductosControler{
        public function __construct()
        {
            require_once "./models/productos/models.productos.php";
        }

        public function index(){
            $productos = new ProductosModelo();
            $data = $productos->getProductos();

            require_once "./views/productos/view.productos.php";

        }

        public function insertarProducto(){

            $Id = null;
            $Nombre = $_POST['Nombre'];
            $Referencia = $_POST['Referencia'];
            $Precio = $_POST['Precio'];
            $Peso = $_POST['Peso'];
            $Categoria = $_POST['Categoria'];
            $Stock = $_POST['Stock'];
            $FechaCreacion = $_POST['FechaCreacion'];

            $productos = new ProductosModelo();
            $productos->insertarProducto(
                $Id,
                $Nombre,
                $Referencia,
                $Precio,
                $Peso,
                $Categoria,
                $Stock,
                $FechaCreacion
            );
            header("Refresh:0; url=index.php");
        }

        public function modificar(){
            $Id = $_POST['Id'];
            $Nombre = $_POST['Nombre'];
            $Referencia = $_POST['Referencia'];
            $Precio = $_POST['Precio'];
            $Peso = $_POST['Peso'];
            $Categoria = $_POST['Categoria'];
            $Stock = $_POST['Stock'];
            $FechaCreacion = $_POST['FechaCreacion'];

            $productos = new ProductosModelo();
            $productos->modificar(
                $Id,
                $Nombre,
                $Referencia,
                $Precio,
                $Peso,
                $Categoria,
                $Stock,
                $FechaCreacion
            );
        }

        public function getProducto($Id){
            $productos = new ProductosModelo();
            $data = $productos->getProducto($Id);
            echo(json_encode($data));

            require_once "./views/productos/view.productos.php";

        }
    }
?>