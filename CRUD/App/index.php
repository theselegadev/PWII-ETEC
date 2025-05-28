<?php
    require_once "../vendor/autoload.php";

    if(isset($_POST['id_disciplina']) && !empty($_POST['id_disciplina'])){
        $controllerDisc = new \App\Controller\ControllerDisciplina();
        $controllerDisc->inserir($_POST['id_disciplina'],$_POST['nome_disciplina']);
        header("Location: ./View/listaDisciplina.php");
        exit;
    }
    if(isset($_POST['id_referencia']) && !empty($_POST['id_referencia'])){
        $controllerRef = new \App\Controller\ControllerReferencia();
        $controllerRef->Inserir($_POST['id_referencia'],$_POST['nome_referencia']);
        header("Location: ./View/listaReferencia.php");
        exit;
    }