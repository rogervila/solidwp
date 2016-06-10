<?php

namespace App\Services;

/**
* 
*/
class TwigService
{

	function __construct()
	{

	}
	
	/**
	 * [render description]
	 * @param  [type] $viewPath [description]
	 * @param  [type] $data     [description]
	 * @return [type]           [description]
	 */
	public function render($viewPath, $data)
	{


		if( $this->checkView($viewPath) ){
			echo $GLOBALS['twig']->render($viewPath,$data);
			return true;
		}

		//TO DO handle exceptions and trigger 404
		throw new Exception('Page not found');

	}


	/**
	 * [checkView description]
	 * @param  [type] $path [description]
	 * @return [type]       [description]
	 */
	private function checkView($path)
	{
		$config = require get_template_directory() . '/app/config.php'; //TO DO abstract a global config

		// to do wrap subtheme views folder in a helper function
		return file_exists( get_template_directory() . '/' . $config['subthemes_folder'] . '/' . $config['subtheme'] . '/views/' . $path);
	}

}