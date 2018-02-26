<div class="row">
	<h1>Categorias</h1>
	<div class="pull-right">
		<a href="<?php echo $this->base ?>/categories/add" class="btn btn-primary">Nova Categoria</a>
	</div>
	<div class="col-md-12">
		<table class="table table-responsive">
			<thead>
				<th>Categoria</th>
				<th>Ações</th>
			</thead>
			<tbody>
			<?php if(!empty($dados)) {?>
				<?php foreach ($dados as $data) { ?>
					<tr>
						<td><?php echo $dados["Category"]["name"] ?></td>
						<td>
							<a href="<?php echo $this->base.'/categories/delete/'.$data["Category"]["id"] ?>" class="btn btn-danger">
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