<?php
    class Conexion implements IConexion{
        const HOST= "localhost";
        const DBNAME= "roomService";
        const USER= "root";
        const PASSWORD="";
        private $pdo;
        
        
        public function connect():object{
            $this->pdo= new PDO("mysql:".self::HOST."dbname=".self::DBNAME,self::USER,self::PASSWORD);
            return this->pdo;
        }

        public function closeConnexion():void{
            $pdo=null;
        }

    }
