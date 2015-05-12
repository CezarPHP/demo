<?php
class Frontpage extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('header');
        $this->load->view('front-page');
        $this->load->view('footer');
    }

    public function detect_user(){
        $this->load->view('overview');

    }

    public function routed($params1, $params2){
        echo $params1 . ' ' . $params2;

    }
}