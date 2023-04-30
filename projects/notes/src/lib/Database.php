<?php

//We need "namespaces" because we are using "auto_load" from "composer" also Deandev\Notes came from composer.json psr-4
namespace Deandev\Notes\lib;

use PDO;
use PDOException;

class Database
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host     = '127.0.0.1:3306';
        $this->db       = 'notes';
        $this->user     = 'root';
        $this->password = '';
        $this->charset  = 'utf8mb4';
    }


    public function connect()
    {
        try {

            // $connection = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            //OPTIONS: Are to handle our exceptions
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);



            return $pdo;
        } catch (PDOException $e) {
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}
