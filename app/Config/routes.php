<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'Home', 'action' => 'index'));
	Router::connect('/estruturas/telhado-misto', array('controller' => 'estruturas', 'action' => 'telhado_misto'));
	Router::connect('/estruturas/telhado-termo-acustico', array('controller' => 'estruturas', 'action' => 'termo_acusticos'));
	Router::connect('/estruturas/telhado-zinco', array('controller' => 'estruturas', 'action' => 'telhado_zinco'));
	Router::connect('/estruturas/telhado-eco', array('controller' => 'estruturas', 'action' => 'telhado_eco'));
	Router::connect('/estruturas/telhado-colonial', array('controller' => 'estruturas', 'action' => 'telhado_colonial'));
	Router::connect('/estruturas/telhado-vidro', array('controller' => 'estruturas', 'action' => 'telhado_vidro'));
	Router::connect('/estruturas/telhado-fibrocimento', array('controller' => 'estruturas', 'action' => 'telhado_fibrocimento'));
	Router::connect('/Contato/fale-conosco', array('controller' => 'contatos', 'action' => 'index'));
	Router::connect('/telhados', array('controller' => 'Products', 'action' => 'index'));
	Router::connect('/categorias', array('controller' => 'Categories', 'action' => 'index'));
	
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
