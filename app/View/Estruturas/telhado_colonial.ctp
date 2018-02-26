<?php echo $this->html->css("lightbox"); ?>
<style type="text/css">
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    margin: 20px;
    padding: 10px;
  }

  .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }

</style>
<div class="row">
  <center>
    <h2 class="txt-color"> Telhados Ecológicos Térmicos </h2>
  </center>
</div>

<div class="row">
  <?php if(!empty($data)){ ?>
  <?php foreach ($data as $dados) { ?>
        <div class="col-md-4 container">
          <div class="card">
            <img src="<?php echo $this->base.'/img/'.$dados['Product']['image']?>" alt="misto-a" class="img-responsive" />
            <div class="card-block">
              <h4 class="card-title"><?php echo $dados['Product']['title'];  ?></h4>
              <p class="card-text">
                <?php echo $dados['Product']['text']; ?>
              </p>
            </div>
          </div>
        </div>
  <?php } ?>
  <?php } else { ?>
    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/pvc-colonial.jpg" alt="pvc-colonial" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Telhado PVC Colonial</h4>
          <p class="card-text">
           Telhaodo em PVC Colonial é composto de de um plástico nomeado de pvc que não é 100% derivado do petróleo. 
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/pvc-colonial-b.jpg" alt="pvc-colonial-b" class="img-responsive" width="250" />
        <div class="card-block">
          <h4 class="card-title">Acabamento Clássico</h4>
          <p class="card-text">
            O telhado em PVC Colonial tem seu visual inspirado na clássica telha romana de barro. Deixando sua aplicação com um acabamento muito bonito e tradicional. 
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/pvc-colonial-c.jpg" alt="pvc-colonial-c" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Ecológico</h4>
          <p class="card-text">
            O telhados em PVC são 100% recicláveis. Podendo ser reaproveitados após servirem como telhas.
          </p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>