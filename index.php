<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MCE Celulares</title>
  <base href="http://localhost/MCE-Celulares/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Boldonse&family=Dosis:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-purple fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand white" href="home"><img src="imagens/logo.png" alt="logo" width="150" height="auto" class="margin"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link hover" aria-current="page" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover" href="servicos">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover" href="produtos">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover" href="contato">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <?php
    if (isset($_GET["param"])) {
      $p = explode("/", $_GET["param"]);
    }
    $page = $p[0] ?? "home";

    $pagina = "paginas/{$page}.php";

    //verificar se o arquivo existe
    if (file_exists($pagina)) {
      include($pagina);
    } else {
      include("paginas/404.php");
    }
    ?>
  </main>
  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-md-4 col-mb-4">
         <p class="div-footer"> RUA MINAS GERAIS - Centro, Corbélia - PR, 85420-000 <br> (45) 99945-7149  </p>
        </div>
        <div class="col-12 col-md-4 col-mb-4">
          <img src="imagens/logo.png" alt="logo" class="logo" width="150" height="auto">
          <p class="text">desenvolvido por Matheus Ercoli - Todos os direitos reservados</p>
        </div>
        <div class="col-12 col-md-4 col-mb-4">
          <p class="none">RUA MINAS GERAIS - Centro, Corbélia - PR, 85420-000 <br> (45) 99945-7149</p>
          <a href="https://www.instagram.com/mcecelulares/" class="icons" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.facebook.com/search/top?q=mce%20celulares" class="icons" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        </div>
      </div>
    </div>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
</body>

</html>