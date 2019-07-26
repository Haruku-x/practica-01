<?php 
class Mproduc extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function fn_getAllProd(){
        $res = false;
        $this->db->trans_start();
        $query = $this->db->query("CALL sp_producto_get()");
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE):
            $res = false;
        else:
            $data = array();
            foreach ($query->result_array() as $row):
                $array = array(
                    'id' => $row['id_prod'],
                    'nombre' => $row['nombre_prod'],
                    'modelo' => $row['modelo_prod'],
                    'marca' => $row['marca_prod'],
                    'precio' => $row['precio_prod']
                );
                $data[] = $array;
            endforeach;
            $res = $data;
        endif;
        
    return $res;
    }
}

?>
