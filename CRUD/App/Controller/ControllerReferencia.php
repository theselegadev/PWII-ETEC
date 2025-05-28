<?php
    namespace App\Controller;  

    class ControllerReferencia{
        private $referenciaDao;
        private $referencia;

        public function __construct()
        {
            $this->referenciaDao = new \App\Model\ReferenciaDao();
            $this->referencia = new \App\Model\Referencia();
        }

        public function getReferencias(){
            return $this->referenciaDao->Ler();
        }

        public function buscarPorId($id){
            return $this->referenciaDao->buscarPorId($id);
        }

        public function Inserir($id,$nome){
            $this->referencia->setId($id);
            $this->referencia->setNome($nome);
            $this->referenciaDao->Inserir($this->referencia);
        }

        public function Editar($id,$nome){
            $this->referencia->setId($id);
            $this->referencia->setNome($nome);
            $this->referenciaDao->Editar($this->referencia);
        }
    }