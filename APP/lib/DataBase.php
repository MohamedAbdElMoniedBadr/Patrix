<?php

namespace PHPMVC\LIB;

USE PDO;
class DataBase
{

    private $dsn;
    private $user;
    private $pass;
    private $options;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;port=3306;dbname=mvc';
        $this->user = 'root';
        $this->pass = '';
        $this->options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    }
    public function getUser()
    {
        return $this->user;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function getDsn()
    {
        return $this->dsn;
    }

    public function getOptions()
    {
        return $this->options;
    }
}
