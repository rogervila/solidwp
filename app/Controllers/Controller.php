<?php  

namespace App\Controllers;

use App\Services\TwigService;

/**
* 
*/
class Controller
{

	/**
	 * [render description]
	 * @param  [type] $viewPath [description]
	 * @param  [type] $data     [description]
	 * @return [type]           [description]
	 */
	public function render($viewPath,$data)
	{
		return (new TwigService)->render($viewPath,$data);
	}

}

?>