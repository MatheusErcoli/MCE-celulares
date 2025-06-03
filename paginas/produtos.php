<main class="container">
    <div class="conteudo">
        <div>
            <aside>
                <ul>
                    <h5 class="text-center">Atalho:</h5>
                    <li><a href="?param=produtos#iphone">Apple iphone</a></li>
                    <li><a href="?param=produtos#samsung">Samsung</a></li>
                    <li><a href="?param=produtos#galaxy">Samsung Galaxy A</a></li>
                    <li><a href="?param=produtos#xiaomi">Xiaomi</a></li>
                    <li><a href="?param=produtos#Redmi">Redmi</a></li>
                    <li><a href="?param=produtos#poco">Poco</a></li>
                    <li><a href="?param=produtos#motorola">Motorola</a></li>
                    <li><a href="?param=produtos#videogames">Videogames e jogos</a></li>
                    <li><a href="?param=produtos#notebook">Notebooks e Periféricos</a></li>
                </ul>
            </aside>
        </div>
        <div>
            <section class="margin-top text-center">
                <p class="texto-produtos text-center">Abaixo começa nosso catálogo de produtos caso queira apenas ver
                    aproveite! mas caso você já tenha algum produto em mente a <strong>esquerda</strong> da sua tela
                    você terá um <strong>atalho</strong> que ao clicar em alguma marca ou itens desejados será
                    direcionado para o item ou marca desejada, <strong>quando escolher um produto e quiser comprar
                        aperte na imagem do item e será direcionado até a área de contato da nossa loja!</strong></p>

            </section>
        </div>
    </div>
    <section>
        <h1 class="text-center subtitulo" id="iphone">Apple iPhone:</h1>
        <?php
        require "array.php";
        ?>
        <div class="row">
            <?php
            foreach ($iphone as $index => $apple) {
              
                $accordionId = "accordion" . $index;
                ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="contato" class="text-decoration-none">
                        <div class="card card-format2">
                            <img src="<?= $apple['imagem'] ?>" alt="" width="100%" class="card-img-top">
                    </a>
                    <div class="card-body fundo">
                        <p class="link-produto fw-bold">
                            <?php echo $apple['titulo']; ?>
                        </p>

                        <div class="accordion" id="<?= $accordionId ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index ?>">
                                        Mais Detalhes
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#<?= $accordionId ?>">
                                    <div class="accordion-body">
                                        <p class="card-text">
                                            <?php echo $apple['informacoes']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <h1 class="text-center subtitulo" id="samsung">Samsung:</h1>
        <div class="row">
            <?php
            foreach ($samsung as $index => $sam) {
              
                $accordionId = "accordion" . $index;
                ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="contato" class="text-decoration-none">
                        <div class="card card-format2">
                            <img src="<?= $sam['imagem'] ?>" alt="" width="100%" class="card-img-top">
                    </a>
                    <div class="card-body fundo">
                        <p class="link-produto fw-bold">
                            <?php echo $sam['titulo']; ?>
                        </p>

                        <div class="accordion" id="<?= $accordionId ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index ?>">
                                        Mais Detalhes
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#<?= $accordionId ?>">
                                    <div class="accordion-body">
                                        <p class="card-text">
                                            <?php echo $sam['informacoes']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <h1 class="text-center subtitulo" id="galaxy">Samsung Galaxy A:</h1>
        <div class="row">
            <?php
            foreach ($galaxyA as $index => $galaxy) {
              
                $accordionId = "accordion" . $index;
                ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="contato" class="text-decoration-none">
                        <div class="card card-format2">
                            <img src="<?= $galaxy['imagem'] ?>" alt="" width="100%" class="card-img-top">
                    </a>
                    <div class="card-body fundo">
                        <p class="link-produto fw-bold">
                            <?php echo $galaxy['titulo']; ?>
                        </p>

                        <div class="accordion" id="<?= $accordionId ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index ?>">
                                        Mais Detalhes
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#<?= $accordionId ?>">
                                    <div class="accordion-body">
                                        <p class="card-text">
                                            <?php echo $galaxy['informacoes']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <h1 class="text-center subtitulo" id="xiaomi">Xiaomi:</h1>
        <div class="row">
            <?php
            foreach ($Xiaomi as $index => $xia) {
              
                $accordionId = "accordion" . $index;
                ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="contato" class="text-decoration-none">
                        <div class="card card-format2">
                            <img src="<?= $xia['imagem'] ?>" alt="" width="100%" class="card-img-top">
                    </a>
                    <div class="card-body fundo">
                        <p class="link-produto fw-bold">
                            <?php echo $xia['titulo']; ?>
                        </p>

                        <div class="accordion" id="<?= $accordionId ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index ?>">
                                        Mais Detalhes
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#<?= $accordionId ?>">
                                    <div class="accordion-body">
                                        <p class="card-text">
                                            <?php echo $xia['informacoes']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <h1 class="text-center subtitulo" id="redmi">Xiaomi Redmi:</h1>
        <div class="row">
            <?php
            foreach ($redmi as $index => $Red) {
              
                $accordionId = "accordion" . $index;
                ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="contato" class="text-decoration-none">
                        <div class="card card-format3">
                            <img src="<?= $Red['imagem'] ?>" alt="" width="100%" class="card-img-top">
                    </a>
                    <div class="card-body fundo">
                        <p class="link-produto fw-bold">
                            <?php echo $Red['titulo']; ?>
                        </p>

                        <div class="accordion" id="<?= $accordionId ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index ?>">
                                        Mais Detalhes
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#<?= $accordionId ?>">
                                    <div class="accordion-body">
                                        <p class="card-text">
                                            <?php echo $Red['informacoes']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <h1 class="text-center subtitulo" id="poco">Poco:</h1>
        <div class="row">
            <?php
            foreach ($poco as $index => $po) {
              
                $accordionId = "accordion" . $index;
                ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="contato" class="text-decoration-none">
                        <div class="card card-format2">
                            <img src="<?= $po['imagem'] ?>" alt="" width="100%" class="card-img-top">
                    </a>
                    <div class="card-body fundo">
                        <p class="link-produto fw-bold">
                            <?php echo $po['titulo']; ?>
                        </p>

                        <div class="accordion" id="<?= $accordionId ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index ?>">
                                        Mais Detalhes
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#<?= $accordionId ?>">
                                    <div class="accordion-body">
                                        <p class="card-text">
                                            <?php echo $po['informacoes']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <h1 class="text-center subtitulo" id="motorola">Motorola:</h1>
        <div class="row">
            <?php
            foreach ($motorola as $index => $moto) {
              
                $accordionId = "accordion" . $index;
                ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="contato" class="text-decoration-none">
                        <div class="card card-format2">
                            <img src="<?= $moto['imagem'] ?>" alt="" width="100%" class="card-img-top">
                    </a>
                    <div class="card-body fundo">
                        <p class="link-produto fw-bold">
                            <?php echo $moto['titulo']; ?>
                        </p>

                        <div class="accordion" id="<?= $accordionId ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index ?>">
                                        Mais Detalhes
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#<?= $accordionId ?>">
                                    <div class="accordion-body">
                                        <p class="card-text">
                                            <?php echo $moto['informacoes']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <h1 class="text-center subtitulo" id="videogames">Videogames e jogos:</h1>
        <div class="row">
            <?php
            foreach ($videogame as $index => $game) {
              
                $accordionId = "accordion" . $index;
                ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="contato" class="text-decoration-none">
                        <div class="card card-format3">
                            <img src="<?= $game['imagem'] ?>" alt="" width="100%" class="card-img-top">
                    </a>
                    <div class="card-body fundo">
                        <p class="link-produto fw-bold">
                            <?php echo $game['titulo']; ?>
                        </p>

                        <div class="accordion" id="<?= $accordionId ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index ?>">
                                        Mais Detalhes
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#<?= $accordionId ?>">
                                    <div class="accordion-body">
                                        <p class="card-text">
                                            <?php echo $game['informacoes']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="row">
            <?php
            foreach ($jogos as $index => $jogo) {
              
                $accordionId = "accordion" . $index;
                ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="contato" class="text-decoration-none">
                        <div class="card card-format3">
                            <img src="<?= $jogo['imagem'] ?>" alt="" width="100%" class="card-img-top">
                    </a>
                    <div class="card-body fundo">
                        <p class="link-produto fw-bold">
                            <?php echo $jogo['titulo']; ?>
                        </p>

                        <div class="accordion" id="<?= $accordionId ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index ?>">
                                        Mais Detalhes
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#<?= $accordionId ?>">
                                    <div class="accordion-body">
                                        <p class="card-text textoo">
                                            <?php echo $jogo['informacoes']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <h1 class="text-center subtitulo" id="notebook">Notebooks e Periféricos:</h1>
        <div class="row">
            <?php
            foreach ($notebooks as $index => $note) {
              
                $accordionId = "accordion" . $index;
                ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="contato" class="text-decoration-none">
                        <div class="card card-format2">
                            <img src="<?= $note['imagem'] ?>" alt="" width="100%" class="card-img-top">
                    </a>
                    <div class="card-body fundo">
                        <p class="link-produto fw-bold">
                            <?php echo $note['titulo']; ?>
                        </p>

                        <div class="accordion" id="<?= $accordionId ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index ?>">
                                        Mais Detalhes
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#<?= $accordionId ?>">
                                    <div class="accordion-body">
                                        <p class="card-text">
                                            <?php echo $note['informacoes']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="row">
            <?php
            foreach ($perifericos as $index => $peri) {
              
                $accordionId = "accordion" . $index;
                ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="contato" class="text-decoration-none">
                        <div class="card card-format2">
                            <img src="<?= $peri['imagem'] ?>" alt="" width="100%" class="card-img-top">
                    </a>
                    <div class="card-body fundo">
                        <p class="link-produto fw-bold">
                            <?php echo $peri['titulo']; ?>
                        </p>

                        <div class="accordion" id="<?= $accordionId ?>">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?= $index ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $index ?>" aria-expanded="false"
                                        aria-controls="collapse<?= $index ?>">
                                        Mais Detalhes
                                    </button>
                                </h2>
                                <div id="collapse<?= $index ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $index ?>" data-bs-parent="#<?= $accordionId ?>">
                                    <div class="accordion-body">
                                        <p class="card-text textoo">
                                            <?php echo $peri['informacoes']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </section>
</main>