<?php

class Stats extends Controller{
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $data = $this->model->get_data();
        $this->view->render('stats.php', 'template.php',$data);
    }
}
