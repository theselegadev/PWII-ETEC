<?php
    namespace App\Model;

    class Referencia{
        private $id;
        private $nome;

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            $this->nome;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
    }