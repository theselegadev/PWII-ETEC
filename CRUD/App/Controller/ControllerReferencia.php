<?php
    namespace CRUD\Controller;  

    class ControllerReferencia{
        private $referenciaDao;
        private $referencia;

        public function __construct()
        {
            $this->referenciaDao = new \CRUD\App\ReferenciaDao();
            $this->referencia = new \CRUD\App\Referencia();
        }

        public function getReferencias(){
            return $this->referenciaDao->Ler();
        }
    }