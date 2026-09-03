<?php

require_once __DIR__ ."/../app/controllers/productoControllers.php";

$productoControllers= new productoControllers();
$productoControllers->index();


require_once __DIR__ ."/../app/controllers/clienteControllers.php";
$clienteControllers= new clienteControllers();
$clienteControllers->index();  