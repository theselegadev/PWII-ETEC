<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo usuário</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body style="overflow-x:hidden;">
    <?php
        include "nav.php";
    ?>
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="offset-2 col-8 offset-2">
            <ul class="list-group">
            <li class="list-group-item">
                <form action="salvar_usuario.php" method="post">
                    <h1 class="mb-3">Cadastrar Usuário:</h1>
                    <div class="row" style="width: 80px; height: 6px; background-color:green; border-radius: 5px; margin-left: 6px; margin-bottom: 20px;">

                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nome:</span>
                        <input type="text" class="form-control" placeholder="Nome:" aria-label="Username" aria-describedby="basic-addon1" name="login" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Senha:</span>
                        <input type="password" class="form-control" placeholder="Senha:" aria-label="Username" aria-describedby="basic-addon1" name="senha" required>
                    </div>
                    <div class="mb-3">
                        <label>Usuário ativo?</label>
                        <br>
                        <input type="checkbox" name="ativo" value="Usuário ativo">
                    </div>
                    <button class="btn btn-success">Cadastrar</button>
                </form>
            </li>
        </ul>
            </div>
        </div>
    </div>
    <script src="./bootstrap.bundle.min.js"></script>
</body>
</html>