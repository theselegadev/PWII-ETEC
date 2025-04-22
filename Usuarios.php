<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body style="overflow-x: hidden;">
<?php
    include "./nav.php";
    include "conexao.php";

    require_once 'UsuarioRepository.php';

    $repo = new UsuarioRepository($conexao);

    $usuarios = $repo->buscarTodos();
    ?>
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6 offset-3">
                <ul class="list-group mt-4">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-4">
                                <button class="btn btn-success">Novo Usuário</button>
                            </div>
                            <div class="col-8">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="offset-2 col-8 ">
                <table class="table table-striped table-hover mt-5">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Login</th>
                            <th>Ativo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($usuarios as $item) {
                                ?>
                                    <tr>
                                        <td><?php echo $item['ID']?></td>
                                        <td><?php echo $item['LOGIN']?></td>
                                        <td>
                                            <?php 
                                                if($item['ATIVO'] == 1){
                                                    echo "Ativo";
                                                }else{
                                                    echo "Desativo";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary">Editar</button>
                                            <button class="btn btn-danger">Deletar</button>
                                        </td>
                                    </tr>
                                <?php  
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
?>
<script src="./bootstrap.bundle.min.js"></script>
</body>
</html>
