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
            $sql = "UPDATE referencias SET nome = ? WHERE id = ?";
            $res = Conexao::getConexao()->prepare($sql);
            
            $res->bindValue(1,$r->getNome());
            $res->bindValue(2,$r->getId());

            $res->execute();
        }

        public function Deletar($id){
            $sql = "DELETE FROM referencias WHERE id = $id";

            Conexao::getConexao()->query($sql);
        }

        public function BuscarPorId($id){
            $sql = "SELECT * FROM referencias WHERE id = $id";

            $res = Conexao::getConexao()->query($sql);
            
            $referencia = $res->rowCount()>0 ? $res->fetch() : [];

            return $referencia;
        }

        public function pesquisar($string){
            $string = '%'.$string.'%';

            $sql = "SELECT * FROM referencias WHERE nome LIKE ?";
            $res = Conexao::getConexao()->prepare($sql);

            $res->bindValue(1,$string);
            
            $res->execute();

            $resultado = $res->rowCount()>0 ? $res->fetchAll(\PDO::FETCH_ASSOC) : [];

            return $resultado;
        }
    }