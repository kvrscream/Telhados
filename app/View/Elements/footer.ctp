<div class="row jumbotron">
    <div class="col-md-12">
        <h4 class="txt-color" >Catálogo de Serviços da Unimetal</h5>
        </div>
        <div class="col-md-2">
            <a href="http://portaoautomatico.ind.br/" target="_blank">
                <img src="<?php echo $this->base?>/img/portoes-aco.jpg" class="img-responsive" alt="portões-aço" />
                <h5 class="txt-color">Portões de Aço</h5>
            </a>
        </div>
        <div class="col-md-2">
            <a href="http://www.unimetalestruturas.com.br/" target="_blank">
                <img src="<?php echo $this->base?>/img/estruturas-metalicas.jpg" class="img-responsive" alt="estruturas-metálicas" />               
                <h5 class="txt-color">Estruturas Metálicas</h5>
            </a>    
        </div>
        <div class="col-md-2">
            <a href="" target="_blank">
                <img src="<?php echo $this->base?>/img/coberturas-acm.jpg" class="img-responsive" alt="coberturas-acm" />
                <h5 class="txt-color">Coberturas em ACM</h5>
            </a>    
        </div>
        <div class="col-md-2">
            <a href="" target="_blank">
                <img src="<?php echo $this->base?>/img/cobertura-policarbonato.jpg" class="img-responsive" alt="coberturas-policarbonato" />
                <h5 class="txt-color">Coberturas de Policarbonato</h5>
            </a>
        </div>
        <div class="col-md-2">
            <a href="http://mezanino.com.br/" target="_blank">
                <img src="<?php echo $this->base?>/img/escadas-mezaninos-metalicos.jpg" class="img-responsive" alt="escadas-mezaninos-metalicos" />
                <h5 class="txt-color">Escadas e Mezaninos</h5>
            </a>    
        </div>
        <div class="col-md-2">
            <a href="http://www.unimetalestruturas.com.br/" target="_blank">
                <img src="<?php echo $this->base?>/img/coberturas-metalicas.jpg" class="img-responsive" alt="coberuras-metalicas" />
                <div class="col-md-12">
                    <h5 class="txt-color">Coberturas Metálicas Diversas</h5>
                </div>
            </a>    
        </div>
    </div>

    <div class="bg-footer row">
        <footer class="container">
            <div class="col-md-6">
                <p>&copy; <?php echo date("Y"); ?> - Telhados Unimetal Estruturas  Metálicas</p>
                <p>Totos os direitos resesvados</p>
            </div>
            <div class="col-md-6">
                <p>Av. Pres. Humberto de Alencar Castelo Branco, 72 - Vila Augusta - Guarulhos - SP - CEP 07040-039</p>
            </div>
        </footer>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                url: '<?php echo $this->base ?>/products/getCategories',
                'dataType':'json',
                success: function(result){
                    var html = '';
                    $.each(result, function(i, item) {
                        html = '<li><a class="dropdown-item" href=" <?php echo $this->base ?>/products/list/'+result[i]["id"]+'" > '+result[i]["categoria"]+' </a></li>'
                        $(".dropdown-menu").append(html);
                    });
                    
                }
            })
        })
    </script>