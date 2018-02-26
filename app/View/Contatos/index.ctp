<style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>


<center>
    <div class="row">
        <h4 class="txt-color">
            <h2 class="txt-color"> <i class="fa fa-envelope-open" aria-hidden="true"></i> Fale Conosco</h2>
            <h4 class="txt-color">
            Centrais de Atendimento
            <i class="fa fa-phone" aria-hidden="true"> </i> 11 2087-2204 | 
            <i class="fa fa-whatsapp" aria-hidden="true"> </i> 11 94466-6777  
            </h4>
        </h4>
    </div>
</center>
<div class="row">
    <div class="col-md-6">
        <?php echo $this->Form->create('Contatos', ["url" => ["Controller" => "Contatos", "action" => "sendmail" ]]);?>
            <div class="col-md-12">
                <label>Nome:</label>
                <?php echo $this->Form->input('name', array("label" => false, "placeholder" => "Nome", "class" => "form-control")); ?>
            </div>
            <div class="col-md-12">
                <label>Telefone:</label>
                <?php echo $this->Form->input('telefone', array("label" => false, "placeholder" => "(xx)xxxx-xxxx", "class" => "form-control")); ?>
            </div>
            <div class="col-md-12">
                <label>Celular:</label>
                <?php echo $this->Form->input('celular', array("label" => false, "placeholder" => "(xx)xxxxx-xxx", "class" => "form-control")); ?>
            </div>
            <div class="col-md-12">
                <label>E-mail:</label>
                <?php echo $this->Form->input('email', array("label" => false, "placeholder" => "E-mail", "class" => "form-control")); ?>
            </div>
            <div class="col-md-12">
                <label>Mensagem:</label>
                <?php echo $this->Form->input('msg', array("label" => false, "placeholder" => "Digite seu texto aqui!", "class" => "form-control", "type" => "textarea")); ?>
            </div>

            <div class="col-md-12">
                <br />
                <button class="btn btn-success" type="submit"> Enviar </button>
                <button class="btn btn-primary" type="reset"> Limpar </button>
            </div>
    </div>

    <div class="col-md-6">
        &nbsp;
        <div id="map"></div>
    </div>

</div>


<script>
    function initMap() {
        var uluru = {lat: -23.4742295, lng: -46.5324522};
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }   
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVOjckXmpFn6dhfUq-nxuONXpeBUtH5rE&callback=initMap">
</script>


