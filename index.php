<?php
    require_once "./config/config.php";
    require_once "./core/routes.php";
    require_once "./config/database.php";
    if(isset($_GET['c'])){
        $controlador = cargarControlador($_GET['c']);
        if(isset($_GET['a'])){
            if(isset($_GET['id']))
            cargarAccion($_GET['c'],$_GET['a'],$_GET['id']);
        }else{
            cargarAccion($_GET['c'],FuncionPrincipal);
        }
    }else{
        $controlador = cargarControlador(Productos);
        cargarAccion(Productos,FuncionPrincipal);
    }
?>