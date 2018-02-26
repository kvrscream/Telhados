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

  .card img{
    height: 258px;
  }

</style>
<div class="row">
  <center>
    <h2 class="txt-color"> Telhados de Fibrocimento </h2>
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
        <img src="<?php echo $this->base?>/img/card-fibro.jpg" alt="fibrocimento" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Telhado em Fibrocimento</h4>
          <p class="card-text">
              Telhados de fibrocimento são leves e resistentes. Muito comuns em residências graças a sua resistência as variações climáticas.
              <br />
              Pode ser encontrado em diferentes formas, tamanhos e cores. Se adaptando a sua necessidade.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/card-fibro-b.jpeg" alt="telhado-fibrocimento" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Fibrocimento</h4>
          <p class="card-text">
            O Fibrocimento é um material obtido da união entre o cimento comum e fibrass de qualquer espécie.
            <br />
            O Fibrocimento é usado não só para telhados como também em placas para paredes, cadeiras e tubos.
          </p>
        </div>
      </div>
    </div>

     <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/card-fibro-c.jpg" alt="telha fibrocimento" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Diferenciais</h4>
          <p class="card-text">
            Versatilidade é sua especialidade. O fibrocimento pode ser usado tanto como na cobertura quanto nos fechamentos laterais. Alinhando a funcionalidade de um telhado estrutural a beleza.
            <br />
            É resistênte e econômico, dando liberdade em sua aplicação em qualquer projeto.
          </p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>