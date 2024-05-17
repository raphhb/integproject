<?php

class Customers
{
    use Controller;

    public function index()
    {
        $user = new User();
        $users = $user->findAll();
        $this->view('admin-customers', ['users' => $users]);
    }

    public function deleteUser()
    {
        // Start output buffering
        ob_start();

        // Check if the request method is POST and if the user ID is set
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userId'])) {
            // Retrieve user ID from the POST data
            $userId = $_POST['userId'];

            // Instantiate the User model
            $user = new User();

            // Attempt to delete the user
            $result = $user->deleteUser($userId, "UserID");

            // Prepare the response
            $response = ['success' => $result];

            // Clear the output buffer
            ob_clean();

            // Set the content type to JSON
            header('Content-Type: application/json');

            // Return the response as JSON
            echo json_encode($response);
            exit; // Terminate script execution
        } else {
            // Clear the output buffer
            ob_clean();

            // Set the content type to JSON
            header('Content-Type: application/json');

            // Handle invalid request
            echo json_encode(['success' => false]); // Add debug statement to verify the response

            exit; // Terminate script execution
        }
    }
}
