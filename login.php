<?php
    include "nav.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body style="overflow-x: hidden">
    <script src="./script.js" defer></script>
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6">
                <form action="" method="post">
                    <div class="img">

                    </div>
                    <input type="text" class="form-control mb-2" placeholder="Digite seu login" aria-label="First name" required>
                    <input type="password" class="form-control mb-2" placeholder="Digite a sua senha" aria-label="First name" required>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./bootstrap.bundle.min.js"></script>
</body>
</html>