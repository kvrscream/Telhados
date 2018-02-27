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
    <h2 class="txt-color"> Produtos </h2>
  </center>
</div>

<div class="row">
<?php if(!empty($data)){ ?>
  <?php foreach ($data as $dados) { ?>
        <div class="col-md-4 container">
          <div class="card">
            <img src="<?php echo $this->base.'/img/'.$dados['Page']['image']?>" alt="<?php echo $dados["Page"]["title"] ?>" class="img-responsive" />
            <div class="card-block">
              <h4 class="card-title"><?php echo $dados['Page']['title'];  ?></h4>
              <p class="card-text">
                <?php echo $dados['Product']['text']; ?>
              </p> 
            </div>
          </div>
        </div>
  <?php } ?>
  <?php } else { ?>
  <center>
    <div class="col-md-4 alert alert-info">
        Ops. Aguarde. Em breve você terá mais conteúdo.
    </div>
  </center>
  <?php } ?>
</div>