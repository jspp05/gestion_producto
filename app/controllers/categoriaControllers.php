<?php

require_once __DIR__ ."/../models/categoria.php";

class categoriaControllers
{
    public function index (){
        $categoria = new categoria();
        $categorias = $categoria->getAll();

        require_once __DIR__ . "/../views/categoria/index.php";
    }
}