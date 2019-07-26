<?php

class cProducts extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mProduc');
    }
    

    public function getProduc(){
        $d = $this->input->post('d');
        $data = $this->mProduc->fn_getAllProd();
        echo json_encode($data);
    }
}
?>