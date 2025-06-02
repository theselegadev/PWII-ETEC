<?php require_once __DIR__ . '/../../vendor/autoload.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Referências</title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>
<body style="overflow-x: hidden;">
    <?php 
        include("./assets/nav.php");

        $controllerRef = new \App\Controller\ControllerReferencia();

        if(isset($_GET['pesquisa'])){
            $resultado = $controllerRef->pesquisar($_GET['pesquisa']);
        }else{
            $resultado = $controllerRef->getReferencias();
        }

        if(isset($_GET['alerta'])){
            echo "<div class='container'>";
                echo "<div class='alert alert-success alert-dismissible fade show mt-2' role='alert'>";
                    echo $_GET['alerta'];
                    echo "<a href='./listaReferencia.php'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></a>";
                echo "</div>";
            echo "</div>";
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <ul class="list-group mt-3">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-3">
                                <a href="./inserirReferencia.php" class="btn btn-success">Nova Referência</a>
                            </div>
                            <div class="col-6">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
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
        <div class="card mt-5">
            <div class="card-header">
                <div class="row">
                    <div class="col offset-4">
                        <h2>Lista de referências</h2>
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
                            foreach($resultado as $item){
                                echo "<tr>";
                                    echo "<td>$item[ID]</td>";
                                    echo "<td>$item[NOME]</td>";
                                    echo "<td>
                                        <a href='./editarReferencia.php?id_referencia=$item[ID]' class='btn btn-primary'>Editar</a>
                                        <a href='../index.php?id_referencia_delete=$item[ID]' class='btn btn-danger'>Deletar</a>
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