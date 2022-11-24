<?php
require_once "./config/database.php";
require_once "./controllers/productos/controller.productos.php";
$producto = new ProductosControler();
$producto->index();
?>