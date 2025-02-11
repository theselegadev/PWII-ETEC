<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
</head>
<body>
    <a href="index.php">Home</a>
    <a href="contato.php">Página de contato</a>
    <a href="produtos.php">Lista de produtos</a>
    <h1>Lista de produtos</h1>
    <ol>
        <?php
            for($i=0; $i<3; $i++){
                echo "<li>item $i</li>";
            }
        ?>
    </ol>
    
</body>
</html>