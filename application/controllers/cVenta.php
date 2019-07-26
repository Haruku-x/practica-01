<?php 

class Cventa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mVenta');
    }
    

    public function index(){
        $data['all'] = $this->mVenta->fn_getAllPedidos();

        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('Venta/vVenta',$data);
        $this->load->view('layout/footer');

    }
    
}

?>

