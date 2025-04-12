<?php
    include "conexao.php";


    $query = "
    drop table if exists usuario;
    create table usuarios(
        id int primary key auto_increment,
        login varchar(50) not null,
        senha varchar(80) not null,
        ativo bit default 1
    );";

    $conexao->query($query);

    $query = "insert into usuarios (login,senha) values('admin','123')";

    $conexao->query($query);

    if(isset($_GET['criar'])){
        $conexao->close();
        header("Location: index.php?sucesso=Banco criado com sucesso");
    }
?>