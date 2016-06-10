<?php  

namespace App\Controllers;

//use App\App;

/**
* 
*/
class PageController extends Controller
{

	/**
	 * [show description]
	 * @param  [type] $slug [description]
	 * @return [type]       [description]
	 */
	public function show($slug)
	{
		
		return $this->render("pages/$slug.html",[
			'title' => 'SolidWp - a Wordpress subframework dressed as a theme.',
			'description' => 'SolidWp is a Wordpress subframework dressed as a theme.'
		]);
	}

}

?>