<?php
    namespace App\Model;

    class PerguntaDao{
        public function Inserir(Pergunta $p){
            $sql = "INSERT INTO perguntas (pergunta,id_disciplina) VALUES (?,?)";

            $res = Conexao::getConexao()->prepare($sql);

            $res->bindValue(1,$p->getPergunta());
            $res->bindValue(2,$p->getIdDisciplina());

            $res->execute();
        }

        public function Ler(){
            $sql = "SELECT p.id AS ID, p.pergunta as PERGUNTA, d.disciplina as DISCIPLINA FROM perguntas AS p INNER JOIN disciplinas AS d on p.id_disciplina = d.id";

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