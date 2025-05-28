<?php

    namespace App\Model;

    class DisciplinaDao{
        public function Inserir(Disciplina $d){
            $sql = "INSERT INTO disciplinas (id,disciplina) VALUES (?,?)";
            $res = Conexao::getConexao()->prepare($sql);

            $res->bindValue(1,$d->getId());
            $res->bindValue(2,$d->getNome());

            $res->execute();
        }

        public function Ler(){
            $sql = "SELECT * FROM disciplinas";
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