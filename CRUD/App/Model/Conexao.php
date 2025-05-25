<?php
    namespace CRUD\App;

    class Conexao{
        private static $conexao;

        public function getConexao(){
            if(!isset(self::$conexao)){
                try{
                    self::$conexao = new \PDO("mysl:host=localhost;dbname=test;charset=utf8mb4","root","");
                }catch(\PDOException $e){
                    echo "Erro de conexão: " . $e->getMessage();
                }

                return self::$conexao;
            }
        }
    }