<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body style="overflow-x: hidden;">
    <?php
        require_once("UsuarioRepository.php");
        include("nav.php");
        include("conexao.php");

        $repo = new UsuarioRepository($conexao);

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $dado_usuario = $repo->buscarPorId($_GET['id']);
        }

        if(isset($_POST['nome'])){
            $repo->editar($_POST['nome'],$_POST['ativo'],$_POST['id']);
            header("Location: Usuarios.php?editar=Editado com sucesso");
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="offset-4 col-4">
                <ul class="list-group mt-5">
                    <li class="list-group-item">
                        <h1 class="mb-4">Atualizar:</h1>
                        <form action="./atualizar_usuario.php" method="post">
                            <input type="number" class="form-control mb-2" aria-label="First name" readonly value="<?php echo $_GET['id']?>" name="id">
                            <input type="text" class="form-control mb-2" aria-label="First name" required value="<?php echo $dado_usuario['LOGIN']?>" name="nome">
                            <label>Ativo?</label>
                            <br>
                            <input type="checkbox" class="mb-2" aria-label="First name" name="ativo" value="1">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="./bootstrap.bundle.min.js"></script>
</body>
</html>