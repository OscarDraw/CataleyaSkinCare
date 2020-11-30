<?php
class Shop_model
{

    private $conexion;
    public function __construct()
    {

        $this->conexion = new mysqli('localhost', 'root', '', 'cataleya');
        $this->conexion->set_charset("utf8");
    }

    public function get_products_information()
    {
        $information = array();
        try {
            //sql           
            $sql = " SELECT 
                pc.*, b.*, p.*
                FROM products p  
                INNER JOIN category pc
                ON p.product_category = pc.id
                INNER JOIN brand b
                ON p.product_brand = b.id 
                WHERE p.product_status = 1";

            $query = $this->conexion->query($sql);

            while ($row = $query->fetch_assoc()) {
                $information[] = $row;
            }
        } catch (Exception $e) {
            echo  $e->getMessage();
        }
        return $information;
    }
    public function addToCart()
    {
        $information = array();
        try {
            //sql           
            $sql = " SELECT 
                pc.*, b.*, p.*
                FROM products p  
                INNER JOIN category pc
                ON p.product_category = pc.id
                INNER JOIN brand b
                ON p.product_brand = b.id 
                WHERE p.product_status = 1";

            $query = $this->conexion->query($sql);

            while ($row = $query->fetch_assoc()) {
                $information[] = $row;
            }
        } catch (Exception $e) {
            echo  $e->getMessage();
        }
        return $information;
    }
}
