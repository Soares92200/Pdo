<?php
    class Livros{
        private $id;
        private $nome;
        private $genero;
        private $valor;
        private $desc;
        
        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = $i; 
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function getGenero(){
            return $this->usuario;
        }
        public function setGenero($g){
            $this->Genero = $g;
        }
        public function getValor(){
            return $this->valor;
        }
        public function setValor($v){
            $this->valor = $v;
        }
        public function getDesc(){
            return $this->desc;
        }
        public function setDesc($d){
            $this->valor = $d;
        }
    }
?>  