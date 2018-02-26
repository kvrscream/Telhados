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
    <h2 class="txt-color"> Telhados Termoacústicos </h2>
  </center>
</div>

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
        <img src="<?php echo $this->base?>/img/termo-galvanizada.jpg" alt="termo-galvanizada" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Telhado Galvanizado Termoacústica</h4>
          <p class="card-text">
            Esse tipo de telhado é composto por telhas galvanizadas que garantem a durabilidade e resistência. Seu interior é composto por EPS (Isopor) ou Pu (Poliuretano) de 30 ou 50 milímetros. Garantindo isolamento térmico e acústico.
            Por fim contém também uma chapa pré pintada para o acabamento do material deste exemplo.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/termo-eco.jpg" alt="termo-ecologica" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Telhado Termoacústico Ecológico</h4>
          <p class="card-text">
            O telhado termoacústico com telhas ecológicas tendem a ser mais leves sem perder a resistência. Isso graças ao material reciclável, que além da levesa garante um isolamento térmico natural, isolando entre 20 a 30% da temperatura. 
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $this->base?>/img/exemplo.jpeg" alt="exemplo" class="img-responsive" />
        <div class="card-block">
          <h4 class="card-title">Exemplo do Isolamento</h4>
          <p class="card-text">
            O telhado tearmoacústico reflete os raios do sol ao contrario das outras telhas que absorvem. Assim diminuem a temperatura no ambiente interno.  
          </p>
        </div>
      </div>
    </div>
  <?php } ?>