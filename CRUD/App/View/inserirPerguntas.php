<?php require_once __DIR__ .  "/../../vendor/autoload.php"  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Pergunta</title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>
<body style="overflow-x: hidden;">
    <?php 
        include("./assets/nav.php");

        $controllerDisc = new \App\Controller\ControllerDisciplina();

        $disciplinas = $controllerDisc->getDisciplinas();
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8 offset-3">
                                <h2>Inserir Pergunta:</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="../index.php" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Pergunta</span>
                                <input type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1" name="pergunta_inserir" required>
                            </div>

                            <select name="disciplina" class="form-select mb-3">
                                <option>Selecione uma disciplina</option>
                                <?php
                                    foreach($disciplinas as $item){
                                        echo "<option value='$item[ID]'>$item[DISCIPLINA]</option>";
                                    }
                                ?>
                            </select>
                            <div class="row">
                                <button class="btn btn-success mt-1" type="submit">Cadastrar Pergunta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/bootstrap.bundle.min.js"></script>
</body>
</html>