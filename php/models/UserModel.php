<?php

    class UserEmployee{
        private int $id;
        private string $username;
        private string $pass;
        private date $entryDate;


        public function setId($id):void{
            $this->id=$id;
        }

        public function getId():int{
            return $this->id;
        }

        public function setUsername($username):void{
            $this->username= $username;
        }

        public function getUsername():string{
            return $this->username;
        }

        public function setPass($pass):void{
            $this->pass=$pass;
        }

        public function getPass():string{
            return $this->pass;
        }

        public function getDate():date{
            return $this->entryDate;
        }




    }