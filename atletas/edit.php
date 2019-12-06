<?php 
	  require_once('funcoes.php'); 
	  edit();
	?>
	
	<?php include(HEADER_TEMPLATE); ?>
	
	<h2>Atualizar Atleta</h2>
	
	<form action="edit.php?id=<?php echo $atleta['id']; ?>" method="post">
	  <hr />
	  <div class="row">
	    <div class="form-group col-md-6">
	      <label for="name">Nome</label>
	      <input type="text" class="form-control" name="atleta['nome']" value="<?php echo $atleta['nome']; ?>">
	    </div>

        <div class="form-group col-md-3">
	      <label for="campo2">CPF</label>
	      <input type="text" class="form-control" name="atleta['cpf']" value="<?php echo $atleta['cpf']; ?>">
	    </div>

        <div class="form-group col-md-2">
	      <label for="campo3">Data de Nascimento</label>
	      <input type="text" class="form-control" name="atleta['datanasc']" value="<?php echo $atleta['datanasc']; ?>">
	    </div>
	
        <div class="form-group col-md-1">
	      <label for="campo4">UF</label>
	      <input type="text" class="form-control" name="atleta['uf']" value="<?php echo $atleta['uf']; ?>">
	    </div>
	  </div>

	  <div class="row">
	    <div class="form-group col-md-3">
	      <label for="campo1">Naturalidade</label>
	      <input type="text" class="form-control" name="atleta['naturalidade']" value="<?php echo $atleta['naturalidade']; ?>">
	    </div>
	
        <div class="form-group col-md-3">
	      <label for="campo2">Clube Formador</label>
	      <input type="text" class="form-control" name="atleta['clubeformador']" value="<?php echo $atleta['clubeformador']; ?>">
	    </div>
	    
	    <div class="form-group col-md-3">
	      <label for="campo3">Clube Atual</label>
	      <input type="text" class="form-control" name="atleta['clubeatual']" value="<?php echo $atleta['clubeatual']; ?>">
	    </div>
	    
        <div class="form-group col-md-3">
	      <label for="campo4">Posição</label>
	      <input type="text" class="form-control" name="atleta['posicao']" value="<?php echo $atleta['posicao']; ?>">
	    </div>
	</div>

	  <div class="row">
      <div class="form-group col-md-4">
	      <label for="campo1">Tipo de Contrato</label>
	      <input type="text" class="form-control" name="atleta['tipocontrato']" value="<?php echo $atleta['tipocontrato']; ?>">
	    </div>
	    
	    <div class="form-group col-md-4">
	      <label for="campo2">Telefone</label>
	      <input type="text" class="form-control" name="atleta['fone']" value="<?php echo $atleta['fone']; ?>">
	    </div>

        <div class="form-group col-md-4">
	      <label for="campo3">Data de Cadastro</label>
	      <input type="text" class="form-control" name="atleta['criado']" disabled value="<?php echo $atleta['criado']; ?>">
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
