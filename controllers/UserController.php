<?php 

/**
 * home class
 */
class UserController
{
    use Controller;
    use Model;

    public function index()
    {
        $users = new User;
        $users->delete(2, "UserID");
        show($users);
        $this->view('admin-customers', ['users' => $users]);
    }


}
