<?php

class Database {
    private $hostname = "localhost";
    private $database = "id20079891_sportstore";
    private $username = "id20079891_admin";
    private $password = "f=c9]1sF3l2J^}5V";
    private $charset ="utf8";
    
    function conectar()
    {
        try{
            $conexion ="mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            
            $pdo = new PDO($conexion, $this->username, $this->password, $options);            
            return $pdo;
        } catch (PDOException $e) {
            echo 'Error conexion: ' . $e->getMessage();
            exit;
        }
    }
}

?>