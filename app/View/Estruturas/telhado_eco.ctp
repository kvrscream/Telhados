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
        <img src="<?php echo $this->base?>/img/eco-color.jpg" alt="eco-colors" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Telhado Ecológico</h4>
          <p class="card-text">
            Telhado ecológico é feito de materiais recicláveis que além do bonito acabamento são ecológicamente corretos.
            Fazendo o bem para a natureza.
            <br />
            Além disso são isolantes naturais termo acústico. Reduzindo o calor e o ruído. 
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/telha-eco-aluminio.jpg" alt="eco-aluminio" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Acabamento em Alumínio</h4>
          <p class="card-text">
            O telhado ecológico é construído em camadas, e uma delas é o alumínio. Claro ele é opcional, mas deixa a o acabamento do telhado muito mais bonito. Além de refletir a luz do sol e diminuir o calor que normalmente é absorvido pelo telhado.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/tetrapark.jpg" alt="tetra-park" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Tetra-Park</h4>
          <p class="card-text">
            O telhado ecológico em tetra-park é responsável pelo isolamento térmico e acústico. È extremamente comum, resistente e não absorve a umidade.
            Sendo uma alternativa muito mais eficiente e barata que telhados com isolante em EPI.
          </p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>