<?php

require_once __DIR__ ."/../app/controllers/productoControllers.php";

$productoControllers= new productoControllers();
$productoControllers->index();


require_once __DIR__ ."/../app/controllers/clienteControllers.php";
$clienteControllers= new clienteControllers();
$clienteControllers->index();  

require_once __DIR__ ."/../app/controllers/proveedorControllers.php";
$proveedorControllers= new proveedorControllers();
$proveedorControllers->index();

 $ProductoController = new productoControllers();
    if (isset($_GET['id'])) {
        $ProductoController->show ($_GET['id']);
    } else {
        $ProductoController->index();
    }