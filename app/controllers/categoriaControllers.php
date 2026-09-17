<?php

require_once __DIR__ . "/../models/categoria.php";

class categoriaControllers
{
    public function index()
    {
        $categoria = new categoria();

        try {
            $categorias = $categoria->getAll();
        } catch (PDOException) {
            echo "No se encontraron categorias";
        }

        try {
            $categoriaConsultada = $categoria->getById(1);
        } catch (PDOException) {
             echo "Se encontraron errores";
        }
        require_once __DIR__ . "/../views/categoria/index.php";
    }
}



