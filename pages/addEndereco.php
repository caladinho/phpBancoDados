<div>
<form method="POST">

<div class="form-group">
    <label for="cep">CEP</label>
    <input type="text" class="form-control" id="cep" placeholder="Digite seu cep" name="cep">
  </div>
  <div class="form-group">
    <label for="logra">Logradouro</label>
    <input type="text" class="form-control" id="logra" placeholder="Digite seu logradouro" name="logradouro">
  </div>
  <div class="form-group">
  <label for="bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro" placeholder="Digite seu bairro" name="bairro">
  </div>
  <div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" id="cidade" placeholder="Digite sua cidade" name="cidade">
  </div>
  <div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control" id="estado" placeholder="Digite seu estado" name="estado">
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
  <button type="submit" class="btn btn-primary">Cancelar</button>

</form>
</div>
<?php
    if(!empty($_POST)){
    
    require_once("./model/endereco.php");
    $endereco = new Endereco;
    $endereco->cep = $_POST['cep'];
    $endereco->logradouro = $_POST['logradouro'];
    $endereco->bairro = $_POST['bairro'];
    $endereco->cidade = $_POST['cidade'];
    $endereco->uf = $_POST['estado'];
    $endereco->add();
}