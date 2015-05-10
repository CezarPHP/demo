<?php
class Overview extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        echo current_url() . '<br>';
        echo base_url() . '<br>';
        echo site_url() . '<br>';
    }

    public function detect_user(){
        $this->load->view('overview');

    }

    public function routed($params1, $params2){
        echo $params1 . ' ' . $params2;
    }
}