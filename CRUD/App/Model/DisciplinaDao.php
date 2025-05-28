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
            $sql = "UPDATE disciplinas SET disciplina = ? WHERE id = ?";
            $res = Conexao::getConexao()->prepare($sql);
            
            $res->bindValue(1,$d->getNome());
            $res->bindValue(2,$d->getId());

            $res->execute();
        }

        public function Deletar($id){
            $sql = "DELETE FROM disciplinas WHERE id = $id";

            Conexao::getConexao()->query($sql);
        }

        public function BuscarPorId($id){
            $sql = "SELECT * FROM disciplinas WHERE id = $id";

            $res = Conexao::getConexao()->query($sql);
            
            $disciplina = $res->rowCount()>0 ? $res->fetch() : [];

            return $disciplina;
        }

        public function pesquisar($string){
            $string = '%'.$string.'%';

            $sql = "SELECT * FROM disciplinas WHERE disciplina LIKE ?";
            $res = Conexao::getConexao()->prepare($sql);

            $res->bindValue(1,$string);
            
            $res->execute();

            $resultado = $res->rowCount()>0 ? $res->fetchAll(\PDO::FETCH_ASSOC) : [];

            return $resultado;
        }
    }