<?php
    require_once "../vendor/autoload.php";

    if(isset($_POST['id_disciplina']) && !empty($_POST['id_disciplina'])){
        $controllerDisc = new \App\Controller\ControllerDisciplina();
        $controllerDisc->inserir($_POST['id_disciplina'],$_POST['nome_disciplina']);
        header("Location: ./View/listaDisciplina.php");
    }