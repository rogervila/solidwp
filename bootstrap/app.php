<?php

//composer vendors
require get_template_directory() . '/vendor/autoload.php';

//global config
$GLOBALS['config'] = require get_template_directory() . '/app/config.php';


/**
 * Global Cache
 *
 * The idea is to prevent the cache while not being in production. 
 * TO DO: find a better way to prevent cache
 */
if( $GLOBALS['config']['env'] !== 'production' ){
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Mon, 17 Apr 1992 17:00:00 GMT");
	header("Pragma: no-cache");
}


//template
require 'template.php';

//router
require 'router.php';

