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
        <?php
            if(isset($_GET['inserido'])){
                ?>
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                        <?php echo $_GET['inserido']?>
                        <a href="./Usuarios.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                    </div>
                <?php
            }
            if(isset($_GET['deletar'])){
                ?>
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                        <?php echo $_GET['deletar']?>
                        <a href="./Usuarios.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                    </div>
                <?php
            }
            if(isset($_GET['editar'])){
                ?>
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                        <?php echo $_GET['editar']?>
                        <a href="./Usuarios.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                    </div>
                <?php
            }
        ?>
        <div class="row">
            <div class="offset-3 col-6 offset-3">
                <ul class="list-group mt-4">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-4">
                                <a href="novo_usuario.php" class="btn btn-success">Novo Usuário</a>
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
                                            <a href="./atualizar_usuario.php?id=<?php echo $item['ID']?>" class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                                </svg>
                                            </a>
                                            <a class="btn btn-danger" href="excluir_usuario.php?id=<?php echo $item['ID']?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                            </a>
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
