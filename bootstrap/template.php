<?php

/**
 * Twig
 */

//register twig
Twig_Autoloader::register();

//twig views path
$loader = new Twig_Loader_Filesystem( get_template_directory() . '/' . $GLOBALS['config']['subthemes_folder'] . '/' . $GLOBALS['config']['subtheme'] . '/views');

//create the environment

$twigEnvironmentOptions = [
	'cache' => false,
    'autoescape' => false,
    'debug' => true,
];

if( $GLOBALS['config']['env'] === 'production' ){

	$twigEnvironmentOptions = [
		'cache' => get_template_directory() . '/cache',
	    'autoescape' => false,
	    'debug' => false,
	];
}

//set the environment
$twig = new Twig_Environment($loader, $twigEnvironmentOptions);

//add debug extension
$twig->addExtension(new Twig_Extension_Debug());

//twig directives
require get_template_directory() . '/app/directives.php';

//make it global
$GLOBALS['twig'] = $twig;

