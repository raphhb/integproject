<?php 

/**
 * home class
 */
class Home
{
	use Controller;

	public function index()
	{
		$user = new User;

		$result = $user->where(['UserID'=>1]);

		show($result);

		$this->view('home');
	}

}
