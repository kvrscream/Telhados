<nav class="navbar navbar-inverse header navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo $this->html->image('logo.png',
                                                        array('alt' => "logo-mini", 
                                                            "width" => 75, 
                                                            "class" => "img-responsive visible-xs",
                                                            "url" => array("Contorler" => "Home", "Action" => "index")
                                                        )
                                                     ); 
                            ?>
            </div>
            
            <div class="navbar-collapse collapse menu-link">
                <ul class="nav navbar-nav menu-link">
                <li>
                        <?php echo $this->html->image('logo.png',
                                                        array('alt' => "logo", 
                                                            "width" => 150,
                                                            "class" => 'img-responsive hidden-xs',
                                                                "url" => array("Contorler" => "Home", "Action" => "index")
                                                        )
                                                     ); ?>
                    </li>
                
                   
                    
                    <li>
                     <strong class="txt-color hidden-xs col-md-3 top-phone">
                        2408-1035 | 2229-6985
                        <br />
                        <i class="fa fa-whatsapp" aria-hidden="true"></i> (11) 99882-1777
                    </strong> 
                     <div class="row hidden-xs super-right">
                        <div class="col-md-3">
                            <a href="http://www.unimetalestruturas.com.br/" target="_blank">
                            <?php echo $this->html->image('cobertura-policarbonato.jpg',
                                                        array('alt' => "cobertura-policarbonato", 
                                                            "width" => 100, 
                                                            "class" => "img-responsive thumbnail"
                                                        )
                                                     ); 
                            ?>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <?php echo $this->html->image('estruturas-metalicas.jpg',
                                                        array('alt' => "estruturas-metalicas", 
                                                            "width" => 100, 
                                                            "class" => "img-responsive thumbnail",
                                                            "url" => array("Contorler" => "Home", "Action" => "index")
                                                        )
                                                     ); 
                            ?>                   
                        </div>
                        <div class="col-md-3">
                            <?php echo $this->html->image('coberturas-metalicas.jpg',
                                                        array('alt' => "coberturas-metalicas", 
                                                            "width" => 100, 
                                                            "class" => "img-responsive thumbnail",
                                                            "url" => array("Contorler" => "Home", "Action" => "index")
                                                        )
                                                     ); 
                            ?>
                        </div>
                        <div class="col-md-3">
                            <?php echo $this->html->image('escadas-mezaninos-metalicos.jpg',
                                                        array('alt' => "escadas-mezaninos-metalicos", 
                                                            "width" => 100, 
                                                            "class" => "img-responsive thumbnail",
                                                            "url" => array("Contorler" => "Home", "Action" => "index")
                                                        )
                                                     ); 
                            ?>
                        </div>
                    </div>
                    </li>
                    <br />
                    <li class="hidden-xs"><a href="<?php echo $this->base.'/Home/index'?>">Home</a></li>
                    <li class="visible-xs"><a href="<?php echo $this->base.'/Home/index'?>">Home</a></li>
                    <li><a href="<?php echo $this->base?>/Estruturas/index">Tipos de Estruturas</a></li>
                    
                    <!-- <li><a href="<?php echo $this->base?>/Produtos/index">Produtos</a></li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Produtos
                        </a>
                        <div class="dropdown-menu" id="categorias" aria-labelledby="navbarDropdownMenuLink">
                          
                        </div>
                      </li>


                    <li><a href="<?php echo $this->base?>/Orcamentos/index">Orçamentos</a></li>
                    <li><a href="<?php echo $this->base?>/Contatos/index">Fale Conosco</a></li>
                </ul>
            </div>
        </div>
    </nav>