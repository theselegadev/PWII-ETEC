<?php
    namespace App\Model;

    class Alternativa{
        private $id = 0;
        private $idPergunta;
        private $conteudo;
        private $correta;

        public function setId(){
            $this->id = $this->id++;
        }

        public function setIdPergunta($id){
            $this->idPergunta = $id;
        }

        public function setConteudo($conteudo){
            $this->conteudo = $conteudo;
        }

        public function setCorreta($status){
            $this->correta = $status;
        }

        public function getIdPergunta(){
            return $this->idPergunta;
        }

        public function getId(){
            return $this->id;
        }
        
        public function getConteudo() {
            return $this->conteudo;
        }

        public function getCorreta(){
            return $this->correta;
        }
    }