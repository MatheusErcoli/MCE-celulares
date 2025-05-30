<main class="container">
    <div class="conteudo">
        <div>
            <aside>
                <ul>
                    <h5 class="text-center">Atalho:</h5>
                    <li><a href="#iphone">Apple iphone</a></li>
                    <li><a href="#samsung">Samsung</a></li>
                    <li><a href="#Galaxy">Samsung Galaxy A</a></li>
                    <li><a href="#Xiaomi">Xiaomi</a></li>
                    <li><a href="#Redmi">Redmi</a></li>
                    <li><a href="#Poco">Poco</a></li>
                    <li><a href="#videogames">Videogames e jogos</a></li>
                    <li><a href="#notebook">Notebooks e Periféricos</a></li>
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
                        <div class="card">
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
                        <div class="card">
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
    </section>
</main>