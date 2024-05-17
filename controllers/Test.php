<?php 

/**
 * home class
 */
class Test{
	use Controller;

	public function index()
	{

		$this->view('admin2-dashboard');
	}

}
