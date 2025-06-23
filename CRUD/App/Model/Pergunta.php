<?php
    namespace App\Model;

    class Pergunta{
        private $id = 0;
        private $pergunta;

        public function setId(){
            $this->id = $this->id++;
        }

        public function setPergunta($pergunta){
            $this->pergunta = $pergunta;
        }

        public function getId(){
            return $this->id;
        }

        public function getPergunta(){
            return $this->pergunta;
        }
    }