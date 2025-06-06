<div class="container">
    <h3 class="titulo-contato text-center">Faça seu Pedido:</h3>
<form method="get" name="FormCompra" class="needs-validation" novalidate>
        <div class="row">
       <div class="mb-3 col-md-6 col-12">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome..." required minlength="3" maxlength="20">
        <div class="invalid-feedback">
            Por Favor, Insira seu nome.
        </div>
        </div>
        <div class="mb-3 col-md-6 col-12">
        <label for="sobrenome" class="form-label">Sobrenome:</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome..." required minlength="3" maxlength="30">
        <div class="invalid-feedback">
            Por Favor, Insira seu sobrenome.
        </div>
        </div>
        </div>
        <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail..." required>
        <div class="invalid-feedback">
            Por Favor, Insira um e-mail válido.
        </div>
        </div>
        <div class="row">
        <div class="mb-3 col-md-6 col-12">
        <label for="numero" class="form-label">Telefone:</label>
        <input type="tel" class="form-control" id="numero" name="numero"required placeholder="Digite seu telefone..." maxlength="11">
        <div class="invalid-feedback">
            Por Favor, Insira um telefone válido.
        </div>
        </div>
        <div class="mb-3 col-md-6 col-12">
        <label for="cpf" class="form-label">CPF:</label>
        <input type="text" class="form-control" id="cpf" name="cpf" required placeholder="Digite seu CPF..." pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}">
        </div>
        <div class="invalid-feedback">
            Por Favor, Insira um CPF válido.
        </div>
        </div>
        <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem:</label>
        <textarea class="form-control" name="mensagem" id="mensagem" rows="3" required minlength="10"></textarea>
        <div class="invalid-feedback">
            Por Favor, Insira uma mensagem(pelo menos 10 caracteres).
        </div>
        </div>
        <button class="btn btn-purple mt-3" type="submit">Enviar</button>
        <button class="btn btn-danger mt-3" type="reset">Redefinir</button>
</form>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/vanilla-masker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
<script>
    cpf = document.querySelector('#cpf');
    VMasker(cpf).maskPattern('999.999.999-99');
    numero = document.querySelector('#numero');
    VMasker(numero).maskPattern('(99) 99999-9999');
</script>
