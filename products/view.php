<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Produto <?php echo $product['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Produto:</dt>
	<dd><?php echo $product['nome']; ?></dd>

	<dt>Tipo:</dt>
	<dd><?php echo $product['tipo']; ?></dd>

	<dt>Quantidade:</dt>
	<dd><?php echo $product['quantidade']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Unidade:</dt>
	<dd><?php echo $product['unidade']; ?></dd>

	<dt>Preço:</dt>
	<dd><?php echo $product['preco']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $product['created']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>