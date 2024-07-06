<?php
    class User{
        private $id;
        private $User;
        private $Email;
        private $date;
        private $nome;
        private $senha;

        public function __construct($User, $nome, $Email, $datans, $senha,) 
        {
            $this-> user = $User;
            $this-> nome = $nome;
            $this-> email = $Email;
            $this-> datans = $date;
            $this-> senha = $senha;

        }

        public function setId($id){
            $this->user = $id;
        }
        public function getId(){
            return $this->id;
        }
        public function setUser($User){
            $this->user = $User;
        }
        public function getUser(){
            return $this-> user;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setEmail($Email){
            $this->email = $Email;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setNasc($date){
            $this->datans = $date;
        }
        public function getNasc(){
            return $this->datans;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        
        public function getSenha(){
            return $this->senha;
        }
    }

?>