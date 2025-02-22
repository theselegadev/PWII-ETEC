<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-x:hidden">
  <div class="row">
    <div class="col">
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/PWII-ETEC/imagens/bootstrap-logo.svg" alt="icone" heigth="24" width="30">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Php
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="variavel.php">Variável</a></li>
              <li><a class="dropdown-item" href="if.php">If</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="while.php">While</a></li>
              <li><a class="dropdown-item" href="switch.php">Switch</a></li>
              <li><a class="dropdown-item" href="array.php">Array/Vetor</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    </div>
  </div>
    <script src="bootstrap.bundle.min.js" ></script>
</body>
</html>