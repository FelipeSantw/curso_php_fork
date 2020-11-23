<?php include_once("templates/header.php") ?>
  <div class="container">
    <h1 id="main-title">Criar contato</h1>
    <form id="create-form" action="<? $BASE_URL?>db/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" placeholder="Digite o nome">
      </div>
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" placeholder="Digite o telefone">
      </div>
      <div class="form-group">
        <label for="observations">Observações</label>
        <textarea class="form-control" id="observations" rows="3" placeholder="Insira as observações"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php include_once("templates/footer.php") ?>