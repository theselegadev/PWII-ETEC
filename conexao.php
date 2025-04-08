<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "PW_DB";

    $conexao = new mysqli($server,$user,$pass,$db_name) or die("Falha na conexão"); 
?>