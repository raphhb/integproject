<?php 

/**
 * home class
 */
class Admin
{
	use Controller;

	public function index()
	{

		$this->view('admin');
	}

	public function theater()
	{

		$this->view('admin-theater');
	}

	public function movies()
	{

		$this->view('admin-movies');
	}

	public function reservations()
	{

		$this->view('admin-reservations');
	}

	public function customers()
	{

		$this->view('admin-customers');
	}

	public function requests()
	{

		$this->view('admin-requests');
	}
}
