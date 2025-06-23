<?php
    namespace App\Controller;

    class ControllerPergunta{
        private $perguntaDao;
        private $pergunta;

        public function __construct()
        {
            $this->perguntaDao = new \App\Model\PerguntaDao();
            $this->pergunta = new \App\Model\Pergunta();
        }

        public function inserir($pergunta){
            $this->pergunta->setPergunta($pergunta);
            $this->pergunta->setId();

            $this->perguntaDao->Inserir($this->pergunta);
        }

        public function ler(){
            return $this->perguntaDao->Ler();
        }
    }