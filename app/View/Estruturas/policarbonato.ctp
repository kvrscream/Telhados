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
    <h2 class="txt-color"> Telhados de Policarbonato </h2>
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
        <img src="<?php echo $this->base?>/img/policarbonato-a.jpg" alt="policarbonato" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Telhado em Policarbonato</h4>
          <p class="card-text">
            Considerado um dos tipos mais dinâmicos para qualquer projeto. Pois o material se adapta a situação, criando diversas opções para sua aplicação.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/header-policarbonato.jpg" alt="policarbonato-alveolar" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Policarbonato Alveolar</h4>
          <p class="card-text">
            Este material é uma chapa lisa com cavidades internas chamadas de alvéolos. Pronto para qualquer cobertura, seja plana ou curva e com uma transmissão da luz natural.
            <br />
            O policarbonato alveolar possuí modelos de diversas espessuras chegando até 10 milímetros, sendo assim
            suas opções são bem amplas. 
            <br />
            Trata-se de um material de baixo custo, leve e flexível. Com uma instalação muito prática.
          </p>
        </div>
      </div>
    </div>

     <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/policarbonato-compacto.jpg" alt="policarbonato-compacto" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Policarbonato Compacto</h4>
          <p class="card-text">
            O Policarbonato compacto é perfeito para quem busca mais transparência e alta resistência. Ideal para aredução do calor.
            <br />
            Possuí uma larga espessura que reduz a tansmissão da luz e a penetração do calor. Além de ser muito leve e de fácil instalação.
          </p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>