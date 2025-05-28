<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Disciplina</title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>
<body style="overflow-x: hidden;">
    <?php include("./assets/nav.php")?>

    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8 offset-3">
                                <h2>Inserir Referência:</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="../index.php" method="post">
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text" id="basic-addon1">ID</span>
                                <input type="number" class="form-control" placeholder="ID" aria-label="Username" aria-describedby="basic-addon1" name="id_referencia" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nome</span>
                                <input type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1" name="nome_referencia" required>
                            </div>
                            <div class="row">
                                <button class="btn btn-success mt-1">Inserir</button>
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