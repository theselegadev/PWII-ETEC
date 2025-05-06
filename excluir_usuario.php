<?php
    require_once("UsuarioRepository.php");
    include("conexao.php");
    $repo = new UsuarioRepository($conexao);


    if(isset($_GET['id']) && !empty($_GET['id'])){
        $usuario = $repo->buscarPorId($_GET['id']);
        

        if($usuario != null){

            $repo->deletar($_GET['id']);
            header("Location: usuarios.php?deletar=Deletado com sucesso");
        }
    }
?>