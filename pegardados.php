<?php
    if(isset($_GET['n1'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $res = $n1 + $n2;

        echo "$res<br>";
    }

    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
    
        echo "Olá, $nome<br>";
    }

    if(isset($_POST['login'])){
        $nome = "admin";
        $senha = "123";

        if($_POST['login'] == $nome and $_POST['senha'] == $senha){
            echo "Dados válidos<br>";
        }else{
            echo "Dados inválidos<br>";
        }
    }

    if(isset($_POST['n1'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $res = $num1 * $num2;

        echo "$res<br>";
    }

    if(isset($_POST['msg'])){
        $msg = $_POST['msg'];

        echo "$msg<br>";
    }
?>