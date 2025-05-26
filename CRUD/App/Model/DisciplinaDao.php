<?php

    namespace CRUD\App;
    
    use CRUD\App\Disciplina;

    class DisciplinaDao{
        public function Inserir(Disciplina $d){

        }

        public function Ler(){
            $sql = "SELECT * FROM disciplina";
            $res = Conexao::getConexao()->query($sql);

            $disciplinas = $res->rowCount()>0 ? $res->fetchAll(\PDO::FETCH_ASSOC) : [];

            return $disciplinas;
        }
        
        public function Editar(Disciplina $d){

        }

        public function Deletar($id){

        }

        public function BuscarPorId($id){

        }
    }