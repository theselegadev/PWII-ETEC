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

    if($conexao->query($query)){
        
    }else{
        echo "Não funcionou!";
    }

    $query = "insert into usuarios (login,senha) values('admin','123')";

    if($conexao->query($query)){

    }else{
        echo "não funcionou";
    }

    if(isset($_GET['criar'])){
        $conexao->close();
        header("Location: index.php?sucesso=Banco criado com sucesso");
    }
?>