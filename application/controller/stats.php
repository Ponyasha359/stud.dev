<?php

class Stats extends Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->model = new Stats_Model();
        $this->view = new View();
        $data = $this->model->get_data();
        $this->view->render('stats.php', 'template.php',$data);
    }
}
