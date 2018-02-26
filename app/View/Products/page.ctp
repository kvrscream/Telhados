<div class="row">
	<h1>Produtos</h1>
	<div class="pull-right">
		<a href="<?php echo $this->base ?>/products/addPage" class="btn btn-primary">Novo Produto</a>
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
						<td><?php echo $data["Page"]["title"] ?></td>
						<td><?php echo $data["Category"]["name"] ?></td>
						<td>
							<a href="<?php echo $this->base.'/products/editPage/'.$data["Page"]["id"] ?>" class="btn btn-primary">
								Editar
							</a>
							<a href="<?php echo $this->base.'/products/deletePage/'.$data["Page"]["id"] ?>" class="btn btn-danger">
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