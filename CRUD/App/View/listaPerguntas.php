<?php require_once __DIR__ . '/../../vendor/autoload.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Perguntas</title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>
<body style="overflow-x: hidden;">
    <?php 
        include("./assets/nav.php");
        $controllerPer = new \App\Controller\ControllerPergunta();
        $perguntas = $controllerPer->ler();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <ul class="list-group mt-3">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-3">
                                <a href="./inserirPerguntas.php" class="btn btn-success">Nova Pergunta</a>
                            </div>
                            <div class="col-6">
                                <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
                                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name="pesquisa" required/>
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

        <div class="row">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Lista de Perguntas</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Pergunta</th>
                            <th></th>
                        </thead>
                        <tbody>
                        <?php
                            foreach($perguntas as $item){
                                echo "<tr>";
                                    echo "<td>$item[ID]</td>";
                                    echo "<td>$item[PERGUNTA]</td>";
                                    echo "<td>
                                        <a href='./alternativas.php?id=$item[ID]' class='btn btn-primary'>Alternativas</a>
                                        <button class='btn btn-warning'>Editar</button>
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

    </div>  
    <script src="./assets/bootstrap.bundle.min.js"></script>
</body>
</html>