<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body style="overflow-x: hidden;">
<?php
    include "./nav.php";
    include "conexao.php";

    require_once 'UsuarioRepository.php';

    $repo = new UsuarioRepository($conexao);

    $usuarios = $repo->buscarTodos();

    foreach ($usuarios as $item ) {
        echo "<h1>Login: " .$item['login'].
            "   Senha: " .$item['senha'].
            "   Ativo: " . $item['ativo'],
            "</h1><br>";
        
    }
?>
<script src="./bootstrap.bundle.min.js"></script>
</body>
</html>
