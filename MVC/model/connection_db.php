<?php
require_once("./model/config.php");


class Database
{
    public static function connect()
    {
        try {
            $conn = new PDO('mysql:host=127.0.0.1:3406,dbname=testingPhp', DB_USER, DB_PASS);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $conn;
        } catch (PDOException $e) {
            die('Connection failed:  ' . $e->getMessage() . "The line with the error is : " . $e->getLine());
        }
    }
}
