<?php 
class Mventa extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function fn_getAllPedidos(){
        $res = false;
        $this->db->trans_start();
        $query = $this->db->query("CALL sp_pedido_get()");
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE):
            $res = false;
        else:
            $data = array();
            foreach ($query->result_array() as $row):
                $array = array(
                    'num' => $row['numventa_ped'],
                    'fecha' => $row['fecha_ped'],
                    'total' => $row['total_ped'],
                    'detalles' => $row['detalles_ped'],
                    'cantidad' => $row['cant_ped'],
                    'emp' => $row['emp']
                );
                $data[] = $array;
            endforeach;
            $res = $data;



        endif;
        
    return $res;
    }
}

?>
