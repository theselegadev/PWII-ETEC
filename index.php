<?php
    include "./nav.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-x:hidden">
    <div class="container">
        <?php
            if(isset($_GET['sucesso'])){
                ?>
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                        <?php echo $_GET['sucesso']?>
                        <a href="./index.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                    </div>
                <?php
            }
        ?>
        <a href="./instalar.php?criar=criou o banco" class="btn btn-success mt-4">Gerar banco</a>
    </div>
    <script src="bootstrap.bundle.min.js" ></script>
</body>
</html>