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
    <h3 class="txt-color"> Telhados Mistos </h3>
  </center>
</div>

<div class="row">
  <!--Card tipo de produto-->
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
    <div class="col-md-4 container">
      <div class="card">
        <img src="<?php echo $this->base?>/img/misto-a.jpg" alt="misto-a" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Telhado de Misto</h4>
          <p class="card-text">Telhados mistos procuram atender necessidades especiais ou ecônomicas. Combinando tipos de telhados diferentes para ter mais resultados e satisfação.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 container">
      <div class="card">
        <img src="<?php echo $this->base?>/img/misto-b.jpg" alt="misto-b" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Varandas e áreas de lazer</h4>
          <p class="card-text">Neste caso foi usado o vidro junto ao telhado colonial. Buscando sempre ter luminosidade e proteção.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4 container">
      <div class="card">
        <img src="<?php echo $this->base?>/img/misto-c.jpg" alt="misto-c" class="img-responsive" heigth="200" />
        <div class="card-block">
          <h4 class="card-title">Policarbonato Combinado</h4>
          <p class="card-text">Uma opção muito usada nos projetos é a mistura com o policarbonato. Essa combianção trás um resultado semelhante ao uso do vidro, com um custo inferior.</p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>  