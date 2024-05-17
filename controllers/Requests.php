<?php 

/**
 * home class
 */
class Requests
{
	use Controller;

	public function index()
	{

		$this->view('admin-requests');
	}
	
}
