<?php
    include "conexao.php";

    require_once "UsuarioRepository.php";
    $repo = new UsuarioRepository($conexao);

    if(isset($_POST['login'])){
        $ativo = isset($_POST['ativo']) ? 1 : 0;
        $repo->Inserir($_POST['login'],$_POST['senha'],$ativo);
        header("Location: ./Usuarios.php?inserido=Usuário inserido com sucesso");
    }else{
        echo "você entrou por outro lugar";
    }
?>