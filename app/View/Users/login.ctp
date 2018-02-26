<div class="row">
	 <?php echo $this->Session->Flash(); ?>
	 <div class="col-md-6">
	 		<?php echo $this->Form->create("User", ["url" => ["Controller" => "Users", "action" => "login" ]]); ?>
				<div class="col-md-12 form-group">
					<label>Usuário:</label>
					 <?php echo $this->Form->input('username', array("label" => false, "placeholder" => "Usuário", "class" => "form-control")); ?>
				</div>
				<div class="col-md-12 form-group">
					<label>Senha:</label>
					 <?php echo $this->Form->input('password', array("label" => false, "placeholder" => "Senha", "class" => "form-control")); ?>
				</div>
				<div class="col-md-12 form-group">
					<button class="btn btn-primary">Entrar</button>
					<a href="<?php echo $this->base ?>/users/add">Novo Usuário</a>
				</div>
	 		</form>
	 </div>
</div>