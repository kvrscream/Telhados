<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Estruturas Metálicas, Telhados, Coberturas, Telhas, Mistas, Policarbonato, Estrutura para Telhados, coberturas, Guarulhos, aço, telhado de policarboanto, telhado de vidro, coberturas em vidro, coberturas metálicas, coberturas mistas, coberturas de policarbonato" />
    <meta name="description" content="A Unimetal oferece estruturas metálicas e aço, telhados e coberturas com diversidade e custo beneficio para Guarulhos e região" />
    <meta name="theme-color" content="#00475B">

    <meta property="og:title" content="Unimetal Estruturas Metalicas" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.unimetalestruturas.com.br/" />
    <meta property="og:image" content="<?php echo $this->base?>/img/favicon.ico" />
    <meta property="og:description" content="A Unimetal oferece estruturas metálicas e aço, telhados e coberturas com diversidade e custo beneficio para Guarulhos e região." />
    <meta property="og:site_name" content="Unimetal Estruturas Metalicas" />

    <meta name="robots" content="index, follow">

    <!--Desenvolvido por: Felipe Botelho, botelho422@gmail.com, (11)99124-4644-->
    <!--Design de Imagens Thiago, (11) 97044-3437-->
     <!--Design de Imagens Bruno, (11) 94515-0573 -->

	
	<title>
<?php echo $description . " Unimetal Telhados" ?>:
<?php echo $this->fetch('title'); ?>
	</title>
	<?php
echo $this->Html->meta('icon');

echo $this->Html->css('bootstrap-theme.min');
echo $this->Html->css('bootstrap');
echo $this->Html->css('font-awesome');
echo $this->Html->css('site.min');


echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
	?>
<body>
	<?php echo $this->element("adminMenu"); ?>
	<div class="container-fluid">

		<p class="top-conteudo hidden-xs"></p>
   		 <p class="visible-xs top-conteudo-xs"></p>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>

			<?php 
				echo $this->Html->script('jquery');
				echo $this->Html->script('bootstrap'); 
			?>

		</div>
		<?php echo "&copy; Todos os direitos reservados Unimetal Esruturas - ". date("Y"); ?>
	</div>
</body>
</html>
