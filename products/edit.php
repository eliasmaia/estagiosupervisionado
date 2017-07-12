<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Produto</h2>

<form action="edit.php?id=<?php echo $product['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="nome">Produto</label>
      <input type="text" class="form-control" name="product['name']" value="<?php echo $product['nome']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="tipo">Tipo</label>
      <input type="text" class="form-control" name="product['tipo']" value="<?php echo $product['tipo']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="quantidade">Quantidade</label>
      <input type="text" class="form-control" name="product['quantidade']" value="<?php echo $product['quantidade']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="unidade">Unidade</label>
      <input type="text" class="form-control" name="product['unidade']" value="<?php echo $product['unidade']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="preco">Preço</label>
      <input type="text" class="form-control" name="product['preco']" value="<?php echo $product['preco']; ?>">
    </div>

     <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="product['created']" disabled value="<?php echo $product['created']; ?>">
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