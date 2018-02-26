<div class="row">
	<h1>Novo Card de Telhado</h1>
	 <?php echo $this->Session->Flash(); ?>
	 <div class="col-md-6">
	 		<?php echo $this->Form->create("Product", ["url" => ["Controller" => "Products", "action" => $form_action ],  'enctype'=>'multipart/form-data']); ?>
	 		<div class="col-md-12 form-group">
					<label>Titulo:</label>
					 <?php echo $this->Form->input('title', array("label" => false, "placeholder" => "Titulo", "class" => "form-control", "required" => true)); ?>
				</div>
				<div class="col-md-12 form-group">
					<label>Categoria:</label>
					 <?php echo $this->Form->input('categoria', array("label" => false, "class" => "form-control", "required" => true, "options" => ["Vidro" => "Vidro", "Policarbonato" => "Policarbonato", "Acustico" => "Acústico", "Fibrocimento" => "Fibrocimento", "Misto" => "Misto", "Colonial" => "Colonial", "Metalica" => "Metálica", "Ecologico" => "Ecologico"], "empty" => "Selecione")); ?>
				</div>
				<div class="col-md-12 form-group">
					<label>Texto:</label>
					 <?php echo $this->Form->input('text', array("label" => false, "placeholder" => "Texto do Produto", "class" => "form-control","required" => true)); ?>
				</div>
				<div class="col-md-12 form-group">
					<label>Imagem:</label>
					 <?php echo $this->Form->input('image', array("label" => false, "placeholder" => "Senha", "class" => "form-control btn btn-primary", "type" => "file")); ?>
				</div>
				<div class="col-md-12 form-group">
					<button class="btn btn-success">Salvar</button>
					<a href="<?php echo $this->base ?>/products/index">Voltar</a>
				</div>
	 		</form>
	 </div>
</div>