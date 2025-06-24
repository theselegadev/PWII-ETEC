<?php
    namespace App\Model;

    class AlternativaDao{
        public function Inserir(Alternativa $a){
            $sql = "INSERT INTO alternativas (alternativa, id_pergunta, correta) VALUES(?,?,?)";
            $res = Conexao::getConexao()->prepare($sql);

            $correta = !empty($a->getCorreta()) ? 1 : 0;

            $res->bindValue(1,$a->getConteudo());
            $res->bindValue(2,$a->getIdPergunta());
            $res->bindValue(3,$correta);

            $res->execute();
        }

        public function Ler(){
            $sql = "SELECT * FROM alternativas";

            $res = Conexao::getConexao()->query($sql);

            $alternativas = $res->rowCount()>0 ? $res->fetchAll(\PDO::FETCH_ASSOC) : [];

            return $alternativas;
        }
    }