<?php
    class Conexion implements IConexion{
        public function  __construct(
            private string $host,
            private string $db_name,
            private string $user,
            private string $password
        ){
            conenect($host,$db_name,$user,$password);
        }

        public function  connect($host,$db_name,$user,$password){
            $pdo= new PDO("mysql:host=$host,dbname=$db_name,user=$user,password=$password");
        }

        public function closeConnexion(){
            $pdo = null;
        }
    }
