<?php
    class Database {
        private $host = "localhost";
        private $database_name = "bibloteka";
        private $username = "root";
        private $password = "";
        public $conn;

        //methods
        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host .
                ";dbname=" . $this->$database_name, $this->username, $this->password);

                $this-conn->exec("set names utf8");

            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->GetMessage();                
            }return $this->conn;

        }
    }





?>