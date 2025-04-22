<?php

include "conexao.php";

$sql = "CREATE TABLE IF NOT EXISTS USUARIOS (
            ID INT PRIMARY KEY AUTO_INCREMENT,
            LOGIN VARCHAR(50) NOT NULL,
            SENHA VARCHAR(80) NOT NULL,
            ATIVO BIT DEFAULT 1
        )";


if ($conexao->query($sql)) {
    echo "Tabela criada com sucesso.<br>";
} else {
    echo "Erro ao criar a tabela: " . $conexao->error . "<br>";
}


//////////////////////////// BLOCO PARA INSERIR USUARIO////////////////////////////
// Inserindo uma linha na tabela
$sql_insert = "INSERT INTO USUARIOS (LOGIN, SENHA) VALUES ('ADMIN','123');";


// Executando a inserção
if ($conexao->query($sql_insert)) {
    header("Location: index.php?sucesso=Banco criado com sucesso");
} else {
    echo "Erro ao inserir dados: " . $conexao->error . "<br>";
}
///////////////////////////FIM DO BLOCO PARA INSERIR USUARIO///////////////////////

// Fechando a conexão
$conexao->close();





?>