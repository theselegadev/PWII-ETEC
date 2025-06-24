<?php
    require_once "../vendor/autoload.php";
    
    $controllerDisc = new \App\Controller\ControllerDisciplina();
    $controllerRef = new \App\Controller\ControllerReferencia();
    $controllerPer = new \App\Controller\ControllerPergunta(); 

    if(isset($_POST['id_disciplina']) && !empty($_POST['id_disciplina'])){
        $controllerDisc->inserir($_POST['id_disciplina'],$_POST['nome_disciplina']);
        header("Location: ./View/listaDisciplina.php?alerta=Inserido com sucesso");
        exit;
    }
    if(isset($_POST['id_referencia']) && !empty($_POST['id_referencia'])){
        $controllerRef->Inserir($_POST['id_referencia'],$_POST['nome_referencia']);
        header("Location: ./View/listaReferencia.php?alerta=Inserido com sucesso");
        exit;
    }
    if(isset($_POST['id_disciplina_editar']) && !empty($_POST['id_disciplina_editar'])){
        $controllerDisc->Editar($_POST['id_disciplina_editar'],$_POST['nome_disciplina_editar']);
        header("Location: ./View/listaDisciplina.php?alerta=Editado com sucesso");
        exit;
    }
    if(isset($_POST['id_referencia_editar']) && !empty($_POST['nome_referencia_editar'])){
        $controllerRef->Editar($_POST['id_referencia_editar'],$_POST['nome_referencia_editar']);
        header("Location: ./View/listaReferencia.php?alerta=Editado com sucesso");
        exit;
    }
    if(isset($_GET['id_disciplina_delete']) && !empty($_GET['id_disciplina_delete'])){
        $controllerDisc->deletar($_GET['id_disciplina_delete']);
        header("Location: ./View/listaDisciplina.php?alerta=Deletado com sucesso");
        exit;
    }
    if(isset($_GET['id_referencia_delete']) && !empty($_GET['id_referencia_delete'])){
        $controllerRef->deletar($_GET['id_referencia_delete']);
        header("Location: ./View/listaReferencia.php?alerta=Deletado com sucesso");
        exit;
    }
    if(isset($_POST['pergunta_inserir'])){
        $controllerPer->inserir($_POST['pergunta_inserir'],$_POST['disciplina']);
        header("Location: ./View/listaPerguntas.php?alerta=Inserido com sucesso");
        exit;
    }
    if(isset($_POST['alternativa']) && !empty($_POST['alternativa'])){
        
    }