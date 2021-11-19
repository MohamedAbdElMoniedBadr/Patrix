<?php
namespace PHPMVC\model;
USE PHPMVC\LIB\DataBase;
class ProductModel{
    
public $db;

    public function __construct(){
        $this->db = new DataBase();
    }
    public function findAllProduct(){
        $query= 'SELECT * FROM Product';
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchall();
        return $result;
    }


}