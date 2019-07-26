<?php 
class Cwelcome extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mVenta');
    }

    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('vWelcome');
        $this->load->view('layout/footer');
    }
}
?>