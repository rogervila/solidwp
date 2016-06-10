<?php

/**
 * Router
 */

$router = new \Bramus\Router\Router();
$router->set404(function() {
	header('HTTP/1.1 404 Not Found');
	echo $GLOBALS['twig']->render('errors/404.html');
});

require get_template_directory() . '/app/routes.php';
$router->run();