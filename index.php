<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
              <li><a class="dropdown-item" href="#">Variável</a></li>
              <li><a class="dropdown-item" href="#">If</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">While</a></li>
              <li><a class="dropdown-item" href="#">Switch</a></li>
              <li><a class="dropdown-item" href="#">Array/Vetor</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    </div>
  </div>
    <script src="bootstrap.bundle.min.js" ></script>
</body>
</html>