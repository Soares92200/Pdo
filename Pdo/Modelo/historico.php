<?php
    class Historico{
        private $id;
        private $idUsuario;
        private $idlivro;
        private $idPag;
        
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i;
        }
        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setIdUsuario($iu){
            $this->idUsuario = $iu;
        }
        public function getIdlivro(){
            return $this->idlivro;
        }
        public function setIdlivro($il){
            $this->idlivro = $il;
        }
        public function getIdPag(){
            return $this->idPag;
        }
        public function setIdPag($ip){
            $this->idPag = $ip;
        }
    }
?>  