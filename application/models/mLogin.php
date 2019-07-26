<?php 
class Mlogin extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function fn_registrase($nick_s, $pass_s, $nombre_s, $ape_pat, $ape_mat, $tipo_s){
            $res = false;
            $data = array(
                'nick_us'   =>  $nick_s,
                'pass_us'   =>  $pass_s,
                'tipo_us'        =>  $tipo_s
            );
            $this->db->trans_start();
            $this->db->insert("usuario", $data);
            $id = $this->db->insert_id();
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE):
                $res = false;
            else:
                $this->db->trans_start();
                $this->db->query("CALL sp_usuario_dt_set({$id},'{$nombre_s}', '{$ape_pat}', '{$ape_mat}');");
                $this->db->trans_complete();
                
                $this->session->set_userdata('$_emp', $nombre_s.' '.$ape_pat.' '.$ape_mat);
                $this->session->set_userdata('$_tipo', $tipo_s);
                $this->session->set_userdata('$_id', $id);
                $res = true;
            endif;
        return $res;
    }

    public function fn_iniciarSesion($nick_l, $pass_l){
            $res = false;
            $this->db->trans_start();
            $query = $this->db->query("CALL sp_usuario_get('{$nick_l}', '{$pass_l}');");
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE):
                $res = false;
            else:
                $row = $query->row();
                if($row):
                    $this->session->set_userdata('$_emp', $row->emp);
                    $this->session->set_userdata('$_tipo', $row->tipo_us);
                    $this->session->set_userdata('$_id', $row->id_us);
                    $res = true; 
                else:$res = false;
                endif;
                
            endif;
            
        return $res;
    }
}

?>