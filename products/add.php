<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Produto</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="nome">Produto</label>
      <input type="text" class="form-control" name="product['nome']">
    </div>

    <div class="form-group col-md-3">
      <label for="tipo">Tipo</label>
      <input type="text" class="form-control" name="product['tipo']">
    </div>

    <div class="form-group col-md-2">
      <label for="quantidade">Quantidade</label>
      <input type="text" class="form-control" name="product['quantidade']">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-5">
      <label for="unidade">Unidade</label>
      <input type="text" class="form-control" name="product['unidade']">
    </div>

    <div class="form-group col-md-3">
      <label for="preco">Preço</label>
      <input type="text" class="form-control" name="product['preco']">
    </div>  

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="product['created']" disabled>
    </div>

  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>