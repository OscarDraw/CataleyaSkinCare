<?php
class Conexion
{

    private $conexion;
    public function __construct()
    {

        $this->conexion = new mysqli('localhost', 'root', '', 'cataleya');
        $this->conexion->set_charset("utf8");
    }
}
