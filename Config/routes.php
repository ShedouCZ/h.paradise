<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'domu'));

	Router::connect('/domu', array('controller' => 'pages', 'action' => 'display', 'domu'));
	Router::connect('/o-nas', array('controller' => 'pages', 'action' => 'display', 'o-nas'));
	Router::connect('/kontakt', array('controller' => 'pages', 'action' => 'display', 'kontakt'));
	Router::connect('/rezervace', array('controller' => 'reservations', 'action' => 'add'));
	Router::connect('/cenik', array('controller' => 'pages', 'action' => 'display', 'cenik'));

	Router::connect('/home', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/about', array('controller' => 'pages', 'action' => 'display', 'about'));
	Router::connect('/contact', array('controller' => 'pages', 'action' => 'display', 'contact'));
	Router::connect('/reservation', array('controller' => 'reservations', 'action' => 'add'));
	Router::connect('/price-list', array('controller' => 'pages', 'action' => 'display', 'price-list'));

	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
	Router::connect('/admin', array('controller' => 'reservations', 'action' => 'index', 'admin' => true));


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
