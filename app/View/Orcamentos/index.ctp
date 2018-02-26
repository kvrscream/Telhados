<?php echo $this->Session->flash(); ?>
<div class="row">
  <div class="col-md-12">
    <center>
      <h3 class="txt-color"><i class="fa fa-globe" aria-hidden="true" > Solicitação de Orçamento </i></h3>
        <div class="row">
            <h4 class="txt-color">
                Centrais de Atendimento
                <i class="fa fa-phone" aria-hidden="true"> </i> 11 2087-2204 | 
                <i class="fa fa-whatsapp" aria-hidden="true"></i> 11 94466-6777 
            </h4>
        </div>
    </center>
    <?php echo $this->Form->create('Orcamentos', ["url" => ["Controller" => "Orcamentos", "action" => "sendmail" ]]);?>
      <div class="row">
        <div class="col-md-6">
          <label>Nome:</label>
          <?php echo $this->Form->input('name', array("label" => false, "placeholder" => "Nome", "class" => "form-control")); ?>
        </div>
        <div class="col-md-6">
          <label>Nome do Local:</label>
          <?php echo $this->Form->input('nomeLocal', array("label" => false, "placeholder" => "Nome do Estabelecimento", "class" => "form-control")); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label>E-mail:</label>
          <?php echo $this->Form->input('email', array("label" => false, "placeholder" => "E-mail", "class" => "form-control")); ?>
        </div>
        <div class="col-md-6">
          <label>Telefone:</label>
          <?php echo $this->Form->input('telefone', array("label" => false, "placeholder" => "(xx)xxxx-xxxx", "class" => "form-control")); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label>Celular:</label>
          <?php echo $this->Form->input('celular', array("label" => false, "placeholder" => "(xx)xxxxx-xxxx", "class" => "form-control")); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label>CEP:</label>
          <?php echo $this->Form->input('cep', array("label" => false, "placeholder" => "CEP", "class" => "form-control")); ?>
        </div>
        <div class="col-md-4">
          <label>Endereço:</label>
          <?php echo $this->Form->input('endereco', array("label" => false, "placeholder" => "Endereço", "class" => "form-control")); ?>
        </div>
        <div class="col-md-4">
          <label>Número:</label>
          <?php echo $this->Form->input('numero', array("label" => false, "placeholder" => "Numero do Estabelecimento", "class" => "form-control")); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label>Bairro:</label>
          <?php echo $this->Form->input('bairro', array("label" => false, "placeholder" => "Bairro", "class" => "form-control")); ?>
        </div>
        <div class="col-md-4">
          <label>Cidade:</label>
          <?php echo $this->Form->input('cidade', array("label" => false, "placeholder" => "Cidade", "class" => "form-control")); ?>
        </div>
        <div class="col-md-4">
          <label>Estado:</label>
          <?php echo $this->Form->input('estado', array("label" => false, "placeholder" => "Estado", "class" => "form-control")); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label>Comprimento:</label>
          <?php echo $this->Form->input('comprimento', array("label" => false, "placeholder" => "Comprimento","class" => "form-control")); ?>
        </div>
        <div class="col-md-6">
          <label>Largura:</label>
          <?php echo $this->Form->input('largura', array("label" => false, "placeholder" => "Largura", "class" => "form-control")); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label>Prioridade</label>
          <select name="prioridade" class="form-control">
            <option value="">Selecione</option>
            <option value="Alta">Alta</option>
            <option value="Média">Média</option>
            <option value="Baixa">Baixa</option>
          </select>
        </div>

        <div class="col-md-4">
          <label>Produto</label>
          <select name="produto" class="form-control">
            <option value="">Selecione</option>
            <option value="Telhado Misto">Telhado Misto</option>
            <option value="Telhado Termoácustico">Telhado Termoácustico</option>
            <option value="Cobertura de Policarbonato">Cobertura de Policarbonato</option>
            <option value="Coberturas Metálicas">Coberturas Metálicas</option>
            <option value="Telhados Ecologicos">Telhados Ecologicos</option>
            <option value="Telhados em PVC Colonial">Telhados em PVC Colonial</option>
            <option value="Coberturas em Vidro">Coberturas em Vidro</option>
            <option value="Telhados de Fibrocimento">Telhados de Fibrocimento</option>
            <option value="">Outro(Especificar na observação)</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label>Observação:</label>
          <?php echo $this->Form->input('observacoes', array("label" => false, "placeholder" => "Insira seu texto Aqui", "class" => "form-control", "type" => "textarea")); ?>
        </div>
      </div>
      <div class="col-md-12">
        <br />
        <button class="btn btn-success" type="submit"> Enviar </button>
        <button class="btn btn-primary" type="reset"> Limpar </button>
      </div>
    </form>
  </div>
</div>