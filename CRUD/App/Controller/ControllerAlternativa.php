<?php
    namespace App\Controller;

use App\Model\Conexao;

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
            $sql = "SELECT * FROM alternativas";
            $res = Conexao::getConexao()->query($sql);

            $alternativas = $res->rowCount()>0 ? $res->fetchAll(\PDO::FETCH_ASSOC) :[];

            return $alternativas;
        }
    }

