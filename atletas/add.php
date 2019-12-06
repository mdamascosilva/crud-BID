<?php 
	  require_once('funcoes.php'); 
	  add();
	?>
	
	<?php include(HEADER_TEMPLATE); ?>
	
	<h2>Novo Atleta</h2>
	
	<form action="add.php" method="post">
	  <!-- area de campos do form -->
	  <hr />
	  <div class="row">
	    <div class="form-group col-md-6">
	      <label for="name">Nome</label>
	      <input type="text" class="form-control" name="atleta['nome']">
	    </div>
	
	    <div class="form-group col-md-3">
	      <label for="campo2">CPF</label>
	      <input type="text" class="form-control" name="atleta['cpf']">
	    </div>
	
	    <div class="form-group col-md-2">
	      <label for="campo3">Data de Nascimento</label>
	      <input type="text" class="form-control" name="atleta['datanasc']">
	    </div>

        <div class="form-group col-md-1">
	      <label for="campo4">UF</label>
	      <input type="text" class="form-control" name="atleta['uf']">
	    </div>
	  </div>
	  
	  <div class="row">
	    <div class="form-group col-md-3">
	      <label for="campo1">Naturalidade</label>
	      <input type="text" class="form-control" name="atleta['naturalidade']">
	    </div>
	
	    <div class="form-group col-md-3">
	      <label for="campo2">Clube Formador</label>
	      <input type="text" class="form-control" name="atleta['clubeformador']">
	    </div>
	    
	    <div class="form-group col-md-3">
	      <label for="campo3">Clube Atual</label>
	      <input type="text" class="form-control" name="atleta['clubeatual']">
	    </div>
	    
	    <div class="form-group col-md-3">
	      <label for="campo4">Posição</label>
	      <input type="text" class="form-control" name="atleta['posicao']">
	    </div>
	  </div>
	  
	  <div class="row">
      <div class="form-group col-md-4">
	      <label for="campo1">Tipo de Contrato</label>
	      <input type="text" class="form-control" name="atleta['tipocontrato']">
	    </div>

        <div class="form-group col-md-4">
	      <label for="campo2">Telefone</label>
	      <input type="text" class="form-control" name="atleta['fone']">
	    </div>

      <div class="form-group col-md-4">
	      <label for="campo3">Data de Cadastro</label>
	      <input type="text" class="form-control" name="atleta['criado']" disabled>
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
