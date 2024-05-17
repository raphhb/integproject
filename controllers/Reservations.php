<?php 

/**
 * home class
 */
class Reservations
{
	use Controller;

	public function index()
	{

		$this->view('admin-reservations');
	}
	
}
