<?php

require_once __DIR__ ."/../../config/Database.php";

class cliente{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM clientes";
        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);

    }

        public function getByid($id)
    {
        $sql = "SELECT * FROM clientes WHERE id = :id";
        $consulta = $this->connection->prepare($sql);
        $consulta->bindParam(":id", $id);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
