<?php
    require_once 'user.php';


    Class Perfil{
        use User;

        private $id;
        private $genero;
        private $sobre;
        private $ensino;
        private $curso;
        private $contato;
        private $periodo;
        private $interesse;

        public function __construct($id,$genero,$sobre,$ensino,$curso,$contato,$periodo,$interesse) 
        {
            $this-> id = $id;
            $this-> genero = $genero;
            $this-> sobre = $sobre;
            $this-> ensino = $ensino;
            $this-> curso = $curso;
            $this-> contato = $contato;
            $this-> periodo = $periodo;
            $this-> interesse = $interesse;
        }

        public function setId($id){
            $this->nome = $id;
        }
        public function getId(){
            return $this->id;
        }
        public function setgenero($genero){
            $this->genero = $genero;
        }
        public function getgenero(){
            return $this->genero;
        }
        public function setsobre($sobre){
            $this->sobre = $sobre;
        }
        public function getsobre(){
            return $this->sobre;
        }
        public function setensino($ensino){
            $this->ensino = $ensino;
        }
        public function getensino(){
            return $this->ensino;
        }
        public function setcurso($curso){
            $this->curso = $curso;
        }
        public function getcurso(){
            return $this->curso;
        }
        public function setcontato($contato){
            $this->contato = $contato;
        }
        public function getcontato(){
            return $this->contato;
        }
        public function setperiodo($periodo){
            $this->periodo = $periodo;
        }
        public function getperiodo(){
            return $this->periodo;
        }
        public function setinteresse($interesse){
            $this->interesse = $interesse;
        }
        public function getinteresse(){
            return $this->interesse;
        }




    }

?>