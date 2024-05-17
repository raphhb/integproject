<?php 

/**
 * home class
 */
class AdminDashboard {
	use Controller;

	public function index()
	{

		$this->view('admin-dashboard');
	}

}
