<?php
    namespace App\Model;

    class Pergunta{
        private $id = 0;
        private $pergunta;
        private $id_disciplina;

        public function setId(){
            $this->id = $this->id++;
        }

        public function setPergunta($pergunta){
            $this->pergunta = $pergunta;
        }

        public function setIdDisciplina($id){
            $this->id_disciplina = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function getPergunta(){
            return $this->pergunta;
        }

        public function getIdDisciplina(){
            return $this->id_disciplina;
        }
    }