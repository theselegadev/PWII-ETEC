<?php
    namespace App\Controller;

    class ControllerAlternativa{
        private $alternativaDao;
        private $alternativa;

        public function __construct(){
            $this->alternativaDao = new \App\Model\AlternativaDao();
            $this->alternativa = new \App\Model\Alternativa();
        }

        public function inserir($alternativa,$id_pergunta,$correta){
            $this->alternativa->setId();
            $this->alternativa->setConteudo($alternativa);
            $this->alternativa->setIdPergunta($id_pergunta);
            $this->alternativa->setCorreta($correta);

            $this->alternativaDao->Inserir($this->alternativa);
        }

        public function ler(){
            return $this->alternativaDao->Ler();
        }
    }

