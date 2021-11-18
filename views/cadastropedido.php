<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoPedido.php");
?>

<form class="row g-3">
  <div class="col-md-3">
    <label for="inputcodfun" class="form-label">Código</label>
    <input type="text" class="form-control" id="inputcodfun" placeholder="1234">
  </div>
  <div class="col-md-9">
    <label for="inputNomeFun" class="form-label">Funcionário</label>
    <input type="text" class="form-control" id="inputNomeFun" placeholder="Vinicius da Silva">
  </div>
  <div class="col-md-3">
    <label for="inputcodCli" class="form-label">Código</label>
    <input type="text" class="form-control" id="inputcodCli" placeholder="1234">
  </div>
  <div class="col-md-9">
    <label for="inputNomeCli" class="form-label">Cliente</label>
    <input type="text" class="form-control" id="inputNomeCli" placeholder="Vinicius da Silva">
  </div>
  <div class="col-md-3">
    <label for="inputcodJogo" class="form-label">Código</label>
    <input type="text" class="form-control" id="inputcodJogo">
  </div>
  <div class="col-md-3">
    <label for="inputNomeJogo" class="form-label">Jogo</label>
    <input type="text" class="form-control" id="inputNomeJogo" placeholder="Vinicius da Silva">
  </div>
  <div class="col-md-2">
    <label for="inputQtd" class="form-label">Quantidade</label>
    <select id="inputQtd" class="form-select">
      <option selected>Escolha...</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputValorUni" class="form-label">Valor Unitário</label>
    <input type="text" class="form-control" id="inputValorUni">
  </div>
  <div class="col-md-2">
    <label for="inputTotal" class="form-label">Total</label>
    <input type="text" class="form-control" id="inputTotal">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Confirmar</button>
  </div>
</form>

<?php
include_once("footer.php");
?>