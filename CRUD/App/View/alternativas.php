<?php require_once __DIR__ . '/../../vendor/autoload.php'?>
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
    <?php 
        include("./assets/nav.php");
        $controllerPer = new \App\Controller\ControllerPergunta();
        $controllerAlt = new \App\Controller\ControllerAlternativa();

        

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $pergunta = $controllerPer->lerPorId($_GET['id']);
            $alternativas = $controllerAlt->ler($_GET['id']);
        }
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2>Cadastrar Alternativas</h2>
                    </div>
                    <div class="card-body">
                        <form action="../index.php" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Pergunta</span>
                                <input type="text" class="form-control" name="pergunta" readonly value="<?php echo $pergunta['PERGUNTA']?>">
                            </div>
                            <input type="hidden" name="id_pergunta" value="<?php echo $pergunta['ID']?>">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Alternativa</span>
                                <input type="text" class="form-control" name="alternativa" placeholder="Conteúdo">
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="1" name="correta" id="checkDefault">
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

        <?php
            if(isset($_GET['alerta'])){
                echo "<div class='container mt-3'>";
                    echo "<div class='row'>";
                        echo "<div class='col-6 offset-3'>";
                            echo "<div class='alert alert-success alert-dismissible fade show mt-2' role='alert'>";
                                echo $_GET['alerta'];
                                echo "<a href='./alternativas.php?id=".$_GET['id']."'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></a>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            }
        ?>

        <div class="row">
            <div class="col-10 offset-1">
                <div class="card mt-2">
                    <div class="card-header">
                        <h2>Lista de Alternativas</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <th>Id</th>
                                <th>Alternativa</th>
                                <th>Resposta</th>
                                <th></th>
                            </thead>
                            <tbody>

                                <?php
                                    foreach($alternativas as $item){
                                        $correta = $item['CORRETA']>0 ? "Correta" : "Incorreta";
                                        echo "<tr>";
                                            echo "<td>$item[ID]</td>";
                                            echo "<td>$item[ALTERNATIVA]</td>";
                                            echo "<td>$correta</td>";
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
        </div>
    </div>

    <script src="./assets/bootstrap.bundle.min.js"></script>
</body>
</html>