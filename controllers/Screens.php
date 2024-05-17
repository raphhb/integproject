<?php 

/**
 * home class
 */

class Screens
{
	use Controller;

	public function index()
	{
		$test = new Screens;

		$result = $test->where(['ScreenID'=>1]);
		show($result);
	}

}
