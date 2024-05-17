<?php 


/**
 * User class
 */
class Theater
{
	
	use Model;

	protected $table = 'theater';


    public function findAll() {
        return $this->query("SELECT * FROM theater");
    }

    public function validate($data)
	{
		$this->errors = [];

		if(empty($data['Name']))
		{
			$this->errors['password'] = "Password is required";
		}
		
		if(empty($data['Location']))
		{
			$this->errors['terms'] = "Please accept the terms and conditions";
		}

		if(empty($data['Capacity']))
		{
			$this->errors['terms'] = "Please accept the terms and conditions";
		}

		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}
}