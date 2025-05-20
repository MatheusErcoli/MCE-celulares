<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCE Celulares</title>
    <base href="http://localhost/MCE-Celulares/">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-purple fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand white" href="home"><img src="logo.png" alt="logo" width="100" height="auto"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item linha">
          <a class="nav-link" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item linha">
          <a class="nav-link" href="">Serviços</a>
        </li>
        <li class="nav-item dropdown linha">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Celulares</a></li>
            <li><a class="dropdown-item" href="#">X</a></li>
            <li><a class="dropdown-item" href="#">Y</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="contato.php"><button type="button" class="btn btn-dark button">Contato</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<main>
    <?php
    if(isset($_GET["param"])) {
        $p = explode("/", $_GET["param"]);
    }
    $page = $p[0] ?? "home";

    $pagina = "paginas/{$page}.php";

    //verificar se o arquivo existe
    if(file_exists($pagina)){
        include($pagina);
    }else{
        include("paginas/404.php");
    }
    ?>
</main>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>