<?php
    include "./nav.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-x: hidden">
    <div class="container">
        <h1>For</h1>
        <p>For é uma estrutura de repetição. Existem 3 configurações para a estrutura de repetição funcionar:</p>
        <ol>
            <li>Variável de controle</li>
            <li>Condição de finalização</li>
            <li>Incremento da variável de controle</li>
        </ol>
        <pre>
            for($i = 0; $i < 10; $i++){
                echo "indice $i";
            }
        </pre>
        <?php
            for($i = 0; $i < 10; $i++){
                echo "indice $i <br/>";
            }
        ?>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>