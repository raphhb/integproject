<?php 

/**
 * home class
 */
class Movies
{
	use Controller;

	public function index()
	{

		$this->view('admin-movies');
	}
	
}
