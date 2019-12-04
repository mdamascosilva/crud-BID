<?php
	    require_once('funcoes.php');
	    index();
	?>
	
	<?php include(HEADER_TEMPLATE); ?>
	
	<header>
		<div class="row">
			<div class="col-sm-6">
				<h2>Atletas</h2>
			</div>
			<div class="col-sm-6 text-right h2">
		    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Atleta</a>
		    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
		    </div>
		</div>
	</header>
	
	<?php if (!empty($_SESSION['message'])) : ?>
		<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php echo $_SESSION['message']; ?>
		</div>
		<?php clear_messages(); ?>
	<?php endif; ?>
	
	<hr>
	
	<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Data Nasc</th>
			<th>Clube Formador</th>
            <th> Clube Atual</th>
            <th>Posição</th>
			<th>Atualizado em</th>
			<th >Opções</th>
		</tr>
	</thead>
	<tbody>
	<?php if ($atletas) : ?>
	<?php foreach ($atletas as $atleta) : ?>
		<tr>
			<td><?php echo $atleta['id']; ?></td>
			<td><?php echo $atleta['nome']; ?></td>
			<td><?php echo $atleta['datanasc']; ?></td>
			<td><?php echo $atleta['clubeformador']; ?></td>
            <td><?php echo $atleta['clubeatual']; ?></td>
            <td><?php echo $atleta['posicao']; ?></td>
			<td><?php echo $atleta['modificado']; ?></td>
			<td class="actions text-right">
				<a href="view.php?id=<?php echo $atleta['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
				<a href="edit.php?id=<?php echo $atleta['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
				<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-atleta="<?php echo $atleta['id']; ?>">
					<i class="fa fa-trash"></i> Excluir
				</a>
			</td>
		</tr>
	<?php endforeach; ?>
	<?php else : ?>
		<tr>
			<td colspan="6">Nenhum registro encontrado.</td>
		</tr>
	<?php endif; ?>
	</tbody>
	</table>
	
	<?php include(FOOTER_TEMPLATE); ?>
