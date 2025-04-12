<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "test";

    $conexao = new mysqli($server,$user,$pass,$db_name) or die("Falha na conexão"); 
?>