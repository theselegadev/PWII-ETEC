<?php
    namespace App\Model; 

    use App\Model\Referencia;

    class ReferenciaDao{
        public function Inserir(Referencia $r){
            $sql = "INSERT INTO referencias (id, nome) VALUES (?,?)";
            $res = Conexao::getConexao()->prepare($sql);

            $res->bindValue(1,$r->getId());
            $res->bindValue(2,$r->getNome());

            $res->execute();
        }

        public function Ler(){
            $sql = "SELECT * FROM referencias";
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