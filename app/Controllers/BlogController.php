<?php  

namespace App\Controllers;

use App\Repositories\PostRepository;

/**
* 
*/
class BlogController extends Controller
{
	/**
	 * [$postRepository description]
	 * @var [type]
	 */
	private $postRepository;

	/**
	 * [__construct description]
	 */
	function __construct()
	{
		$this->postRepository = new PostRepository;
	}

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		/*
		if( ! is_user_logged_in() ){
			auth_redirect();
		}
		*/

		$posts = $this->postRepository->all();

		return $this->render("blog/main.html",[
			'posts' => $posts,
		]);
	}

}

?>