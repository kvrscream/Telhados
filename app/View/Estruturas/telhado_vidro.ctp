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
    <h2 class="txt-color"> Telhados de Vidro </h2>
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
        <img src="<?php echo $this->base?>/img/card-vidro-a.jpg" alt="card-vidro-a" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Telhados de Vidro</h4>
          <p class="card-text">
            O telhado de vidro é altamente requisitado para construções que buscam luminosidade.
            <br />
            Graças a sua transparência natural e resistência dada a fabricação, Alinhado a pontos estratégicos, o telhado de vidro torna o ambiente único e com um acabamento maravilhoso.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/card-vidro-b.jpg" alt="card-vidro-b" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Vidro em Sacadas</h4>
          <p class="card-text">
            Sacadas comerciais ou de grandes instituições trazem a tendência do vidro.
            <br />
            Buscando maior iluminação, classe e sofisticação para atrair sua atenção ao local.
          </p>
        </div>
      </div>
    </div>

     <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/card-vidro-c.png" alt="card-vidro-c" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Aplicações</h4>
          <p class="card-text">
            O telhado de vidro pode ser composto por três tipos de vidros:
            <br />
            Laminado: Brm resistênte e com uma ótima durabilidade a residos naturais e aos raios de sol.
            <br />
            Temperado: Ótimo para ambientes amplos e ao ar livre. Usado principalmente em varandas ou coberturas de grandes edificações.
            <br />
            Opaco: Um vidro mais fosco para quem busca mais privacidade no ambiente.
          </p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>