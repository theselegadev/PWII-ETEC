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
    ?>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <ul class="list-group mt-3">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-3">
                                <a href="./inserirPergunta.php" class="btn btn-success">Nova Pergunta</a>
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
                            <td>1</td>
                            <td>Exemplo de pergunta</td>
                            <td>
                                <button class="btn btn-primary">Alternativas</button>
                                <button class="btn btn-warning">Editar</button>
                                <button class="btn btn-danger">Deletar</button>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>  
    <script src="./assets/bootstrap.bundle.min.js"></script>
</body>
</html>