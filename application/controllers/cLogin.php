<?php 

class Clogin extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mLogin');
        $this->load->library('encrypt');
    }
    

    public function index(){
        $this->load->view('vLogin');
    }

    public function registrarse(){
        $nick_s = $this->input->post('txt_nick_s');
        $pass_s = sha1($this->input->post('txt_pass_s'));
        $nombre_s = $this->input->post('txt_nombre_s');
        $ape_pat_s = $this->input->post('txt_ape_pat_s');
        $ape_mat_s = $this->input->post('txt_ape_mat_s');
        $tipo_s = $this->input->post('opc_tipo');
        $res = $this->mLogin->fn_registrase($nick_s, $pass_s, $nombre_s, $ape_pat_s, $ape_mat_s, $tipo_s);
        if($res):
            redirect('?/Cwelcome');
        else:
            $this->load->view('vLogin');
        endif;
    }
    public function iniciarSesion(){
        $nick_l = $this->input->post('txt_nick_l');
        $pass_l = sha1($this->input->post('txt_pass_l'));
        $res = $this->mLogin->fn_iniciarSesion($nick_l, $pass_l);
        if($res):
            redirect('?/Cwelcome');
        else:
            redirect('?/cLogin');
        endif;
    }

    public function cerrarSesion(){
        $this->session->sess_destroy();
        redirect('?/cLogin','refresh');
    }
    
}

?>

