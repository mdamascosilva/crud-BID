<?php 
		require_once('funcoes.php'); 
		view($_GET['id']);
	?>
	
	<?php include(HEADER_TEMPLATE); ?>
	
	<h2>Atleta <?php echo $atleta['id']; ?></h2>
	<hr>
	
	<?php if (!empty($_SESSION['message'])) : ?>
		<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
	<?php endif; ?>
	
	<dl class="dl-horizontal">
		<dt>Nome:</dt>
		<dd><?php echo $atleta['nome']; ?></dd>
	
		<dt>CPF:</dt>
		<dd><?php echo $atleta['cpf']; ?></dd>
	
		<dt>Data de Nascimento:</dt>
		<dd><?php echo $atleta['datanasc']; ?></dd>

        <dt>UF:</dt>
		<dd><?php echo $atleta['uf']; ?></dd>
	</dl>
	
	<dl class="dl-horizontal">
		<dt>Naturalidade:</dt>
		<dd><?php echo $atleta['naturalidade']; ?></dd>
	
		<dt>Clube Formador:</dt>
		<dd><?php echo $atleta['clubeformador']; ?></dd>
	
		<dt>Clube Atual:</dt>
		<dd><?php echo $atleta['clubeatual']; ?></dd>

        <dt>Posicao:</dt>
		<dd><?php echo $atleta['posicao']; ?></dd>
	</dl>
	
	<dl class="dl-horizontal">
		<dt>Tipo de Contrato:</dt>
		<dd><?php echo $atleta['tipocontrato']; ?></dd>
	
		<dt>Telefone:</dt>
		<dd><?php echo $atleta['fone']; ?></dd>
	
	    <dt>Data de Cadastro:</dt>
		<dd><?php echo $atleta['criado']; ?></dd>
	</dl>
	
	<div id="actions" class="row">
		<div class="col-md-12">
		  <a href="edit.php?id=<?php echo $atleta['id']; ?>" class="btn btn-primary">Editar</a>
		  <a href="index.php" class="btn btn-default">Voltar</a>
		</div>
	</div>
	
	<?php include(FOOTER_TEMPLATE); ?>
