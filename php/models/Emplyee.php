<?php
    class Employee{
        private int $id;
        private String $name;
        private String $surname;
        private String $email;
        private String $phone;
        private int $user_id;

        public function getId():int{
            return $this->id;
        }

        public function setName($name):void{
            $this->name=$name;
        }

        public function getName():string{
            return $this->name;
        }

        public function setSurename($surname):void{
            $this->surname=$surname;
        }

        public function getSurename():string{
            return $this->surname;
        }

        public function setEmail($email):void{
            $this->email=$email;
        }

        public function getEmail():string{
            return $this->email;
        }

        public function setPhone($phone):void{
            $this->phone=$phone;
        }

        public function getPhone():string{
            return $this->phone;
        }

    }
