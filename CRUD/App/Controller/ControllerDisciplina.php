<?php
    namespace CRUD\Controller;

    class ControllerDisciplina{
        private $disciplinaDao;
        private $disciplina;

        public function __construct()
        {
            $this->disciplinaDao = new \CRUD\App\DisciplinaDao();
            $this->disciplina = new \CRUD\App\Disciplina();
        }

        public function getDisciplinas(){
            return $this->disciplinaDao->Ler();
        }
    }