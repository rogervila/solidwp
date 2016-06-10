<?php  

namespace App\Repositories;

/**
* 
*/
class PostRepository
{

	private $collection;


	function __construct()
	{
		$this->collection = [];
	}


	public function all()
	{
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				$this->collection[] = get_post();
			}
		}

		return $this->collection;
	}
}