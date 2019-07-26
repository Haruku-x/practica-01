<?php

class cAltaVenta extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mDetalles');
    }
    

    public function index(){
        $data['deta'] = $this->mDetalles->fn_getAllDetalles();
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('AltaVenta/vAltaVenta', $data);
        $this->load->view('layout/footer');
    }


    public function RegAltaVenta(){
        $nombre = $this->input->post('txt_Nombre');
        $modelo = $this->input->post('txt_Modelo');
        $marca = $this->input->post('txt_Marca');
        $precio = $this->input->post('txt_Precio');
        $total = $this->input->post('txt_Total');
        $cant = $this->input->post('txt_Cant');
        $detalles = $this->input->post('ck_deta');
        $res = $this->mDetalles->fn_RegAltaVenta($nombre, $modelo, $marca, $precio, $total, $cant, $detalles);
        if($res):
            redirect('?/CAltaVenta');
        else:
            $this->load->view('vLogin');
        endif;
    }


}
?>