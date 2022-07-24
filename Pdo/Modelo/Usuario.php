<?php
    class Usuario{
        private $id;
        private $usuario;
        private $nome;
        private $email;
        private $telefone;
        private $senha;
        
        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function getUsuario(){
            return $this->usuario;
        }
        public function setUsuario($u){
            $this->usuario = $u;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($e){
            $this->email = $e;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($s){
            $this->senha = $s;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function setTelefone($t){
            $this->telefone = $t;
        }
    }
?>  