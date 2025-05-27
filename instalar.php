<?php

include "conexao.php";

$sql = "CREATE TABLE IF NOT EXISTS USUARIOS (
            ID INT PRIMARY KEY AUTO_INCREMENT,
            LOGIN VARCHAR(50) NOT NULL,
            SENHA VARCHAR(80) NOT NULL,
            ATIVO BIT DEFAULT 1
        );";
$conexao->query($sql); $sql=
        "CREATE TABLE REFERENCIAS (
            ID INT PRIMARY KEY,
            NOME VARCHAR(100) NOT NULL
        );"
;$conexao->query($sql); $sql=
        "CREATE TABLE DISCIPLINAS(
            ID INT PRIMARY KEY,
            DISCIPLINA VARCHAR(100)        
        );"
;$conexao->query($sql); $sql=
        "CREATE TABLE PERGUNTAS(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            PERGUNTA TEXT NOT NULL,
            ID_DISCIPLINA INT,
            CONSTRAINT FK_DISCIPLINA FOREIGN KEY (ID_DISCIPLINA) 
                REFERENCES DISCIPLINAS(ID)
        );"
;$conexao->query($sql); $sql=
        "CREATE TABLE ALTERNATIVAS(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            ID_PERGUNTA INT,
            CORRETA BIT,
            ALTERNATIVA TEXT NOT NULL,
            CONSTRAINT FK_PERGUNTAS FOREIGN KEY(ID_PERGUNTA)
                REFERENCES PERGUNTAS(ID)
        );"
;$conexao->query($sql); $sql=
        "CREATE TABLE REF_PERGUNTAS(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            ID_PERGUNTA INT,
            ID_REF INT,
            CONSTRAINT FK_PERGUNTA FOREIGN KEY (ID_PERGUNTA) REFERENCES PERGUNTAS(ID),
            CONSTRAINT FK_REF FOREIGN KEY (ID_REF) REFERENCES REFERENCIAS(ID)
        );";


if ($conexao->query($sql)) {
    echo "Tabela criada com sucesso.<br>";
} else {
    echo "Erro ao criar a tabela: " . $conexao->error . "<br>";
}


//////////////////////////// BLOCO PARA INSERIR USUARIO////////////////////////////
// Inserindo uma linha na tabela
$sql_insert = "INSERT INTO USUARIOS (LOGIN, SENHA) VALUES 
    ('ADMIN','123'),
    ('FELIPE MATHEUS YOSHIDA LAZARI', '123senha'),		
    ('LEONEL FRANCISCO DAMIAO', '123senha'),
    ('LUCAS MATHEUS DE SOUZA DOS SANTOS', '123senha'),
    ('LUÍS FELIPE GAZIRO GOMES', '123senha'),
    ('MARLI EVANGELISTA', '123senha'),
    ('MATHEUS DA CRUZ SAITU HIGA', '123senha'),
    ('MATHEUS LUNA CAMARGO', '123senha'),
    ('MATHEUS SELEGHIN ALEXANDRE', '123senha'),
    ('MURILLO DE PAULA PEREIRA', '123senha'),
    ('RYAN ROBIN VELOSO DE MATOS', '123senha'),
    ('VITORIA FERNANDA FERRARI DA SILVA', '123senha'),
    ('YURI RAFAEL DA SILVA SANTO', '123senha')
    ;";


// Executando a inserção
if ($conexao->query($sql_insert)) {
    echo "Nova linha inserida com sucesso.<br>";
} else {
    echo "Erro ao inserir dados: " . $conexao->error . "<br>";
}
///////////////////////////FIM DO BLOCO PARA INSERIR USUARIO///////////////////////

// Fechando a conexão
$conexao->close();





?>