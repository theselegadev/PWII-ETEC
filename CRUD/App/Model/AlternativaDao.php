<?php
    namespace App\Model;

    class AlternativaDao{
        public function Inserir(Alternativa $a){
            $sql = "INSERT INTO alternativas (alternativa, id_pergunta, correta) VALUES(?,?,?)";
            $res = Conexao::getConexao()->prepare($sql);

            $res->bindValue(1,$a->getConteudo());
            $res->bindValue(2,$a->getIdPergunta());
            $res->bindValue(3,$a->getCorreta());

            $res->execute();
        }

        public function Ler($id){
            $sql = "SELECT * FROM alternativas WHERE id_pergunta = $id";

            $res = Conexao::getConexao()->query($sql);

            $alternativas = $res->rowCount()>0 ? $res->fetchAll(\PDO::FETCH_ASSOC) : [];

            return $alternativas;
        }
    }