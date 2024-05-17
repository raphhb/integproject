<?php

class Theaters {
    use Controller;

    public function index() {
        $theaterModel = new Theater;
        $theaters = $theaterModel->findAll();
        
        $screenModel = new Screen;
        $screens = $screenModel->findAll();
        
        $this->view('admin-theater', ['theaters' => $theaters, 'screens' => $screens]);
    }
}

