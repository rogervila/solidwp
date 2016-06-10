<?php

/**
 * Wordpress Methods
 */


//wp_head
$twig->addFunction(
	new Twig_SimpleFunction('wp_head', function () {
	    do_action('wp_head');
	})
);

//wp_footer
$twig->addFunction(
	new Twig_SimpleFunction('wp_footer', function () {
	    do_action('wp_footer');
	})
);

//wp_nav_menu
$twig->addFunction(
	new Twig_SimpleFunction('wp_nav_menu', function ($navOptions) {
	    echo wp_nav_menu($navOptions);
	})
);



/**
 * WpSolid Methods
 */

//path
$twig->addFunction(
	new Twig_SimpleFunction('path', function ($route = '') {
	    echo get_template_directory_uri() . '/'. $GLOBALS['config']['subthemes_folder'] .'/' . $GLOBALS['config']['subtheme'] . '/' . $route;
	})
);

//url
$twig->addFunction(
	new Twig_SimpleFunction('url', function ($route = '') {
	    echo get_site_url() . '/' . $route;
	})
);

/**
 * PHP functions
 */

//print_r
$twig->addFunction(
	new Twig_SimpleFunction('print_r', function ($dataVariable = '') {
	    print_r($dataVariable);
	})
);

