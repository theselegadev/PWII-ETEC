<?php
    include "./nav.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-x:hidden">
    <div class="container">
        <h1>While</h1>

        <p>While é uma estrutura de repetição. Existem 3 configurações para a estrutura de repetição funcionar:</p>
        <ol>
            <li>Variável de controle</li>
            <li>Condição de finalização</li>
            <li>Incremento da variável de controle</li>
        </ol>

        <pre>
            $i = 0;

            while($i < 10){
                echo "indice $i";
                $i++;
            }
        </pre>

        <?php
           $i = 0;

           while($i < 10){
               echo "indice $i <br/>";
               $i++;
           } 
        ?>

        
        <h2>Do While</h2>

        <p>A diferença entre o do while e o while é que no DO WHILE sempre vai haver pelo menos uma execução do bloco de código.</p>
        <p>Voce avalia a necessidade de qual utilizar.</p>
        <pre>
            $i = 0;

            do{
                echo "DO WHILE com indice $i";
                $i++;
            }while($i < 10);
        </pre>

        <?php
            $i = 0;

            do{
                echo "DO WHILE com indice $i <br/>";
                $i++;
            }while($i < 10);
        ?>
    </div>
    <script src="bootstrap.bundle.min.js" ></script>
</body>
</html>