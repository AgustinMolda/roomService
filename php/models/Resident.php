<?php

    class Resident{
        private int $id_resident;
        private string $name;
        private string $surename;
        private string $email;

        public function getId():int{
            return $id_resident;
        }

        public function setName($name):void{
            $this->name=$name;
        }

        public function getName():string{
            return $this->name;
        }

        public function setSurename($surename):void{
            $this->surename=$surename;
        }

        public function getSurename():string{
            return $this->surename;
        }

        public function setEmail($email):void{
            $this->email=$email;
        }

        public function getEmail():string{
            return $this->email;
        }
    }