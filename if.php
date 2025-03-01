<?php
    include "./nav.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-x:hidden">
    <div class="container">
        <h1>If</h1>
        <h2>Estrutura de decisão</h2>
        <p>A estrutura de decisão é composta por um teste booleano. Esse teste verifica uma condição se verdadeiro faça alguma coisa ou se falso faça outra.</p>
        <pre>
            if($numero == 1){
                echo "Aqui significa $numero igual a 1";
            }else{
                echo "Aqui significa $numero diferente a 1";
            }
        </pre>
        <?php
            $numero = 1;

            if($numero == 1){
                echo "Aqui significa $numero igual a 1";
            }else{
                echo "Aqui significa $numero diferente a 1";
            }
        ?>
        <h2>Estrutura de decisação encadeada</h2>

        <p>São vários testes, um seguido do outro, até algum teste verdadeiro ser encontrado. Caso não encontre nenhum verdadeiro o else será executado. Ao encontrar um teste verdadeiro todos os subsequentes não serão executados.</p>

        <pre>
            $nome = "Matheus";

            if($nome == "Maria"){
                echo "$nome é igual a Maria";
            }else if($nome == "Pedro"){
                echo "$nome é igual a Pedro";
            }else if($nome == "Matheus"){
                echo "$nome é igual a Matheus";
            }else{
                echo "Nenhum nome é igual ao conteúdo da variável";
            }
        </pre>

        <?php        
            $nome = "Matheus";

            if($nome == "Maria"){
                echo "$nome é igual a Maria";
            }else if($nome == "Pedro"){
                echo "$nome é igual a Pedro";
            }else if($nome == "Matheus"){
                echo "$nome é igual a Matheus";
            }else{
                echo "Nenhum nome é igual ao conteúdo da variável";
            }
        ?>

        <h2>Vários teste em um if</h2>
        <p>Em uma estrutura de decisão unica eu consigo realizar dois ou mais testes. Nesse caso eu preciso utilizar os conectivos AND ou OR (E ou OU).</p>
        <h3>Conectivo AND</h3>
        <p>No exemplo abaixo eu necessito que todas as condições resultem em TRUE</p>
        <pre>
            $numero2 = 32;

            if($numero2 > 10 && $numero2 < 50){
                echo "$numero2 está entre 10 e 50";
            }

            if($numero2 > 33 && $numero2 < 50){
                <!-- Esse código não será executado se uma das duas condições forem falsas -->
                echo "$numero2 está entre 33 e 50";
            }
        </pre>
        <h3>Conectivo OR</h3>
        <p>O conectivo ou testa todas as condições e executa o código se apenas uma das condições for TRUE. Caso nenhuma condição for TRUE o else será executado</p>
        <pre>
            $numero2 = 32;

            <!-- Só a necessidade que uma condição seja verdadeira -->
            if($numero2 > 33 || $numero2 > 50){
                echo "Não executará, todas as condições retornam FALSE";
            }

            if($numero2 > 33 || $numero2 < 50){
                echo "Esse código executará, pois uma das duas condições retorna TRUE";
            }
        </pre>
        <?php
            $numero2 = 32;
            // AND
            if($numero2 > 10 && $numero2 < 50){
                echo "$numero2 está entre 10 e 50 <br>";
            }

            if($numero2 > 33 && $numero2 < 50){
                echo "$numero2 está entre 33 e 50 <br>";
            }
            // OR
            if($numero2 > 33 || $numero2 > 50){
                echo "Não executará, todas as condições retornam FALSE <br>";
            }

            if($numero2 > 33 || $numero2 < 50){
                echo "Esse código executará, pois uma das duas condições retorna TRUE <br>";
            }
        ?>
        <h2>Exercicio</h2>
        <p>Crie uma variável idade preencha com um valor e escreva na tela se ela pode ou não entrar em um evento considerado as  seguintes regras:</p>
        <ul>
            <li>Menor do que 18 anos: Não entra.</li>
            <li>Maior ou igual a 18 e menor que 60: Pode entrar</li>
            <li>Maior ou igaul a 60: entrada grautita</li>
        </ul>
        <?php
            $idade = 68;

            if($idade < 18){
                echo "Não pode entrar";
            }else if($idade >= 18 && $idade < 60){
                echo "Pode entrar";
            }else{
                echo "Entrada gratuita";
            }
        ?>
    </div>

    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>