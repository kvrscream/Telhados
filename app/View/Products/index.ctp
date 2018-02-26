<div class="row">
	<h1>Telhados</h1>
	<div class="pull-right">
		<a href="<?php echo $this->base ?>/products/add" class="btn btn-primary">Novo Card Telhado</a>
	</div>
	<div class="col-md-12">
		<table class="table table-responsive">
			<thead>
				<th>Titulo</th>
				<th>Categoria</th>
				<th>Ações</th>
			</thead>
			<tbody>
			<?php if(!empty($dados)) {?>
				<?php foreach ($dados as $data) { ?>
					<tr>
						<td><?php echo $data["Product"]["title"] ?></td>
						<td><?php echo $data["Product"]["categoria"] ?></td>
						<td>
							<a href="<?php echo $this->base.'/products/edit/'.$data["Product"]["id"] ?>" class="btn btn-primary">
								Editar
							</a>
							<a href="<?php echo $this->base.'/products/delete/'.$data["Product"]["id"] ?>" class="btn btn-danger">
								Excluir
							</a>
						</td>
					</tr>
				<?php } ?>
			<?php } else { ?>
							<tr>
								<td colspan="6">Nenhum cadastro foi encontrado.</td>
							</tr>
			<?php } ?>		
			</tbody>
		</table>
	</div>
</div>