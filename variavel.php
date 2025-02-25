<?php
    include "./nav.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Váriavel</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-x:hidden">
    <div class="container">
        <h1>Váriavel</h1>
        
        <h3>Declaração de variáveis</h3>

        <p>A declaração de variáveis em PHP é feita utilizando o símbolo de cifrão ($) antes do nome da variável. O nome da variável deve começar com uma letra ou um underscore (_), seguido por letras, números ou underscores. As variáveis em PHP são dinâmicas, ou seja, não é necessário declarar o tipo da variável antes de usá-la. O valor da variável pode ser alterado ao longo da execução do código.</p>
        
        <pre>
            $nome = "João";  // variável do tipo string
            $idade = 25;     // variável do tipo inteiro
            $altura = 1.75;   // variável do tipo float
        </pre>

        <?php
            $nome = "Matheus";
            $idade = 17;
            $peso = 60.0;
            $altura = 1.70;
            $isProgrammer = true;

            $namorada = true;
            $salario = 3000;

            echo "<h1>$salario</h1>";
        ?>

        <h1>Constantes</h1>
        <p>
            Em PHP, constantes são valores fixos que não podem ser alterados durante a execução do programa. Elas são declaradas com a palavra-chave define() ou usando a palavra-chave const (para constantes definidas em classes ou escopos específicos).
            A principal diferença entre constantes e variáveis é que, enquanto as variáveis podem ter seu valor alterado, as constantes mantêm o mesmo valor durante todo o script. Constantes podem ser usadas em qualquer lugar do código e não precisam do símbolo de cifrão ($).
        </p>

        <h3>Exemplo de declaração de constantes</h3>

        <pre>
 
            define("PI", 3.14);  // Usando define()
            echo PI;  // Imprime 3.14

            const URL = "https://www.exemplo.com";  // Usando const
            echo URL;  // Imprime https://www.exemplo.com

        </pre>

        <?php
            define("PI",3.14);

            echo "<br>".PI;

            const coordenador = "Faberson";

            echo "<br>".coordenador;
        
        ?>
    </div>

    <script src="bootstrap.bundle.min.js" ></script>
</body>
</html>