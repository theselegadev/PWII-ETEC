<?php
    namespace App\Model;

    class PerguntaDao{
        public function Inserir(Pergunta $p){
            $sql = "INSERT INTO perguntas (pergunta) VALUES (?)";

            $res = Conexao::getConexao()->prepare($sql);

            $res->bindValue(1,$p->getPergunta());

            $res->execute();
        }

        public function Ler(){
            $sql = "SELECT * FROM perguntas";

            $res = Conexao::getConexao()->query($sql);

            $perguntas = $res->rowCount()>0 ? $res->fetchAll(\PDO::FETCH_ASSOC) : [];

            return $perguntas;
        }

        public function LerPorId($id){
            $sql = "SELECT * FROM perguntas WHERE id = $id";

            $res = Conexao::getConexao()->query($sql);

            $pergunta = $res->rowCount()>0 ? $res->fetch() : [];

            return $pergunta;
        }
    }