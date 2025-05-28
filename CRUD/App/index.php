<?php
    require_once "../vendor/autoload.php";
    
    $controllerDisc = new \App\Controller\ControllerDisciplina();
    $controllerRef = new \App\Controller\ControllerReferencia();

    if(isset($_POST['id_disciplina']) && !empty($_POST['id_disciplina'])){
        $controllerDisc->inserir($_POST['id_disciplina'],$_POST['nome_disciplina']);
        header("Location: ./View/listaDisciplina.php");
        exit;
    }
    if(isset($_POST['id_referencia']) && !empty($_POST['id_referencia'])){
        $controllerRef->Inserir($_POST['id_referencia'],$_POST['nome_referencia']);
        header("Location: ./View/listaReferencia.php");
        exit;
    }
    if(isset($_POST['id_disciplina_editar']) && !empty($_POST['id_disciplina_editar'])){
        $controllerDisc->Editar($_POST['id_disciplina_editar'],$_POST['nome_disciplina_editar']);
        header("Location: ./View/listaDisciplina.php");
        exit;
    }
    if(isset($_POST['id_referencia_editar']) && !empty($_POST['nome_referencia_editar'])){
        $controllerRef->Editar($_POST['id_referencia_editar'],$_POST['nome_referencia_editar']);
        header("Location: ./View/listaReferencia.php");
        exit;
    }