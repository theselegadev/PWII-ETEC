<?php
    namespace CRUD\App; 

    use CRUD\App\Referencia;

    class ReferenciaDao{
        public function Inserir(Referencia $r){

        }

        public function Ler(){
            $sql = "SELECT * FROM referencia";
            $res = Conexao::getConexao()->query($sql);

            $referencias = $res->rowCount()>0 ? $res->fetchAll(\PDO::FETCH_ASSOC) : [];

            return $referencias;
        }
        
        public function Editar(Referencia $r){

        }

        public function Deletar($id){

        }

        public function BuscarPorId($id){

        }
    }