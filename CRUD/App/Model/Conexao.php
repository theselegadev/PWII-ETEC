<?php
    namespace CRUD\App;

    class Conexao{
        private static $conn;

        public function getConn(){
            if(!isset(self::$conn)){
                try{
                    self::$conn = new \PDO("mysl:host=localhost;dbname=test;charset=utf8mb4","root","");
                }catch(\PDOException $e){
                    echo "Erro de conexão: " . $e->getMessage();
                }

                return self::$conn;
            }
        }
    }