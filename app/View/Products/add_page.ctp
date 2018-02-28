
<div class="row">
	<h1>Novo Produto</h1>
	 <?php echo $this->Session->Flash(); ?>
	 <div class="col-md-6">
	 		<?php echo $this->Form->create("Products", ["url" => ["Controller" => "Products", "action" => $form_action ],  'enctype'=>'multipart/form-data']); ?>
	 		<div class="col-md-12 form-group">
					<label>Titulo:</label>
					 <?php echo $this->Form->input('title', array("label" => false, "placeholder" => "Titulo", "class" => "form-control", "required" => true)); ?>
				</div>
				<div class="col-md-12 form-group">
					<label>Categoria:</label>
					 <?php echo $this->Form->input('categories', array("label" => false, "class" => "form-control", "required" => true, "empty" => "Selecione", "options" => $category)); ?>
				</div>
				<div class="col-md-12 form-group">
					<label>Texto:</label>
					 <?php echo $this->Form->input('text', array("label" => false, "placeholder" => "Texto do Produto", "class" => "form-control","required" => true, "type" => "textarea")); ?>
				</div>
				<div class="col-md-12 form-group">
					<label>Imagem:</label>
					 <?php echo $this->Form->input('image', array("label" => false, "placeholder" => "", "class" => "form-control btn btn-primary", "type" => "file")); ?>
				</div>
				<div class="col-md-12 form-group">
					<label>Imagem do Meio:</label>
					 <?php echo $this->Form->input('image_text', array("label" => false, "placeholder" => "", "class" => "form-control btn btn-primary", "type" => "file")); ?>
				</div>
				<div class="col-md-12 form-group">
					<button class="btn btn-success">Salvar</button>
					<a href="<?php echo $this->base ?>/products/page">Voltar</a>
				</div>
	 		</form>
	 </div>
</div>