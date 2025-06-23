<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternativas</title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>
<body style="overflow-x: hidden;">
    <?php include("./assets/nav.php");?>
    
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Cadastrar Alternativas</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Pergunta</span>
                                <input type="text" class="form-control" name="pergunta" readonly>
                            </div>
                            <input type="hidden" name="id_pergunta">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Alternativa</span>
                                <input type="text" class="form-control" name="alternativa" placeholder="Conteúdo">
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="1" id="checkDefault">
                                <label class="form-check-label" for="checkDefault">
                                    Correta
                                </label>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-success">Cadastrar alternativa</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-10 offset-1">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Lista de Alternativas</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <th>Alternativa</th>
                                <th>Correta</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <td>Exemplo</td>
                                <td>Exemplo</td>
                                <td>
                                    <button class="btn btn-primary">Editar</button>
                                    <button class="btn btn-danger">Deletar</button>
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/bootstrap.bundle.min.js"></script>
</body>
</html>