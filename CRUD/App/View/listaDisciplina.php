<?php require_once __DIR__ . '/../../vendor/autoload.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Disciplinas</title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>
<body style="overflow-x: hidden;">
    <?php include("./assets/nav.php")?>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <ul class="list-group mt-3">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-3">
                                <button class="btn btn-success">Nova Disciplina</button>
                            </div>
                            <div class="col-6">
                                <form action="">
                                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search"/>
                            </div>
                            <div class="col-3">
                                    <button type="submit" class="btn btn-outline-success">Pesquisar</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-header">
                <div class="row">
                    <div class="col offset-4">
                        <h2>Lista de Disciplinas</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $controllerDisc = new \App\Controller\ControllerDisciplina();

                            foreach($controllerDisc->getDisciplinas() as $item){
                                echo "<tr>";
                                    echo "<td>$item[ID]</td>";
                                    echo "<td>$item[DISCIPLINA]</td>";
                                    echo "<td>
                                        <button class='btn btn-primary'>Editar</button>
                                        <button class='btn btn-danger'>Deletar</button>
                                    </td>";
                                echo "</tr>";
                            }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="./assets/bootstrap.bundle.min.js"></script>
</body>
</html>