<?php 

/**
 * Cover class
 */
class Cover
{
	use Controller;

	public function index()
	{

		$this->view('landing');
	}

}

