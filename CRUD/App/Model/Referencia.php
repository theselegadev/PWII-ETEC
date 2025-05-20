<?php
    namespace CRUD\App;

    class Referencia{
        private $id;
        private $nome;
        
        public function __construct($id,$nome)
        {   
            $this->id = $id;
            $this->nome = $nome;
        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            $this->nome;
        }
    }