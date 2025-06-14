<div class="container">
  <h3 class="titulo-contato text-center">Faça seu Pedido:</h3>
  <form name="FormCompra" class="needs-validation" novalidate action="enviar.php" method="post">
    <div class="row">
      <div class="mb-3 col-md-6 col-12">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome..." required minlength="3" maxlength="20">
        <div class="invalid-feedback">Por favor, insira seu nome.</div>
      </div>
      <div class="mb-3 col-md-6 col-12">
        <label for="sobrenome" class="form-label">Sobrenome:</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome..." required minlength="3" maxlength="30">
        <div class="invalid-feedback">Por favor, insira seu sobrenome.</div>
      </div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-mail:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail..." required>
      <div class="invalid-feedback">Por favor, insira um e-mail válido.</div>
    </div>

    <div class="row">
      <div class="mb-3 col-md-6 col-12">
        <label for="numero" class="form-label">Telefone:</label>
        <input type="tel" class="form-control" id="numero" name="numero" required placeholder="Digite seu telefone..."  pattern="\(\d{2}\)\s\d{4,5}-\d{4}">
        <div class="invalid-feedback" id="numero-erro">Por favor, insira um telefone válido.</div>
      </div>

      <div class="mb-3 col-md-6 col-12">
        <label for="cpf" class="form-label">CPF:</label>
        <input type="text" class="form-control" id="cpf" name="cpf" required placeholder="Digite seu CPF..." pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
        <div id="cpf-erro" class="invalid-feedback">Por favor, insira um CPF válido.</div>
      </div>
    </div>

    <div class="mb-3">
      <label for="mensagem" class="form-label">Produto desejado: </label>
      <textarea class="form-control" name="mensagem" id="mensagem" rows="3" required minlength="5" placeholder="Digite seu Produto..."></textarea>
      <div class="invalid-feedback">Por favor, insira uma mensagem (pelo menos 5 caracteres).</div>
    </div>

    <button class="btn btn-purple mt-3" type="submit">Enviar</button>
    <button class="btn btn-danger mt-3" type="reset">Redefinir</button>
  </form>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/vanilla-masker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
     cpf = document.querySelector('#cpf');
    VMasker(cpf).maskPattern('999.999.999-99');
    numero = document.querySelector('#numero');
    VMasker(numero).maskPattern('(99) 99999-9999');

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
    const cpf = document.getElementById('cpf');
     const cpferro = document.getElementById('cpf-erro');
     const cpfRegex = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;
     if (!cpfRegex.test(cpf.value)){
        event.preventDefault();
        event.stopPropagation();
        cpf.classList.add('is-invalid');
     }else {
        cpferro.textContent = '';
        cpf.classList.remove('is-invalid');
     }
     const numero = document.getElementById('numero')
     const numeroErro = document.getElementById('numero-erro')
     const numeroRegex = /^\(\d{2}\)\s\d{5}-\d{4}$/;
     if (!numeroRegex.test(numero.value)) {
    event.preventDefault();
    event.stopPropagation();
    numero.classList.add('is-invalid');
} else {
    numero.classList.remove('is-invalid');
    numeroErro.textContent = "";
}
  })
})()
</script>