<?php

class Home extends Controller{

    public function __construct() {
        parent::__construct();
    }
    public function index(){
        //$this->model = new Home_Model();
        $this->view->render('home.php', 'template.php',$data);
    }
}