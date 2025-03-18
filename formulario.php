<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="overflow-x: hidden">
    <?php
        include "./nav.php";
    ?>
    <form action="./formulario.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome"><br>
        <label for="idade">Idade:</label><br>
        <input type="number" name="idade"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha"><br>
        <input type="submit">
    </form>
    <?php
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $senha = $_POST['senha'];

        echo "<h1>Seu nome é $nome e você tem $idade, sua senha: é $senha</h1>";
        
    ?>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>