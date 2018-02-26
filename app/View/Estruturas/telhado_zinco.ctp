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
    <h2 class="txt-color"> Telhados de Zinco </h2>
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
        <img src="<?php echo $this->base?>/img/zinco.jpg" alt="zinco" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Telhados em Zinco</h4>
          <p class="card-text">
            Telhados em zinco são os mais populares na atualidade, já que são um alternativa acessível para casa, comércios e galpões.
            <br />
            Tem grandes vantagens já que o zinco é muito resistente e possuí uma grande durabilidade.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/zinco-a.jpg" alt="zinco-a" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Telhados em Zinco</h4>
          <p class="card-text">
            Telhados em zinco são os mais populares na atualidade, já que são um alternativa acessível para casa, comércios e galpões.
            <br />
            Tem grandes vantagens já que o zinco é muito resistente e possuí uma grande durabilidade.
          </p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>