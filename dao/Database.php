<?php

class Database
{
    private static $instance = null;
    private $conn;
    private $host = 'localhost';
    private $dbname = 'web_contacts';
    private $user = 'root';
    private $pass = '';

    private function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        } catch(PDOException $e){
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance = new Database();    
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->conn;
    }
}

?>