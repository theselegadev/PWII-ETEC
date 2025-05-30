<?php
    namespace App\Model;

    class Conexao{
        private static $conexao;

        public static function getConexao(){
            if(!isset(self::$conexao)){
                try{
                    self::$conexao = new \PDO("mysql:host=localhost;dbname=test;charset=utf8mb4","root","");
                    self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                }catch(\PDOException $e){
                    echo "Erro de conexão: " . $e->getMessage();
                }
            }

            return self::$conexao;
        }
    }