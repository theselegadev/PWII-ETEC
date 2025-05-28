<?php
    namespace App\Controller;

    class ControllerDisciplina{
        private $disciplinaDao;
        private $disciplina;

        public function __construct()
        {
            $this->disciplinaDao = new \App\Model\DisciplinaDao();
            $this->disciplina = new \App\Model\Disciplina();
        }

        public function getDisciplinas(){
            return $this->disciplinaDao->Ler();
        }

        public function inserir($id,$nome){
            $this->disciplina->setId($id);
            $this->disciplina->setNome($nome);
            $this->disciplinaDao->Inserir($this->disciplina);
        }

        public function buscarPorId($id){
            return $this->disciplinaDao->buscarPorId($id);
        }

        public function Editar($id,$nome){
            $this->disciplina->setId($id);
            $this->disciplina->setNome($nome);
            $this->disciplinaDao->Editar($this->disciplina);
        }

        public function deletar($id){
            $this->disciplinaDao->deletar($id);
        }
    }