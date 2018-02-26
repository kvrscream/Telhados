<div class="row">
	<h1>Nova Categoria</h1>
	<?php echo $this->Session->Flash(); ?>
	<div class="col-md-6">
		<?php echo $this->Form->create("Category", ["url" => ["Controller" => "Categories", "action" => $form_action ] ]); ?>
			<div class="col-md-12 form-group">
				<label>Nome da Categoria:</label>
				<?php echo $this->Form->input('name', array("label" => false, "placeholder" => "Nome da Categoria", "class" => "form-control", "required" => true)); ?>
			</div>	
			<div class="col-md-12 form-group">
				<button class="btn btn-success">Salvar</button>
				<a href="<?php echo $this->base ?>/categories/index">Voltar</a>
			</div>
		</div>
	</form>
</div>