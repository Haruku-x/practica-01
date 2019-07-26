<?php 
class Mdetalles extends CI_Model{
    function __construct(){
        parent::__construct();
    } 

    public function fn_getAllDetalles(){
        $res = false;
        $this->db->trans_start();
        $query = $this->db->query("CALL sp_producto_detalles_get()");
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE):
            $res = false;
        else:
            $data = array();
            foreach ($query->result_array() as $row):
                $array = array(
                    'id' => $row['id_dt'],
                    'nombre' => $row['nombre_dt']
                );
                $data[] = $array;
            endforeach;
            $res = $data;
        endif;
        
    return $res;
    }


    public function fn_RegAltaVenta($nombre, $modelo, $marca, $precio, $total, $cant, $detalles){
        $res = false;
        if($detalles =''){
            $detalles = 'Sin detalles extras';
        }
        $det =   'Producto: '.$nombre.'\n|'
                .'Modelo: '.$modelo.'\n|'
                .'Marca: '.$marca.'\n|'
                .'Precio: '.$precio.'\n|'
                .'Detalles: '.$detalles;
        if($this->session->userdata('$_id')):
        $id = $this->session->userdata('$_id');
        $this->db->trans_start();
        $query = $this->db->query("CALL sp_pedido_set('{$total}', '{$id}', '{$det}', '{$cant}')");
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE):
            $res = false;
        else:
            $res = true;
        endif;
        else:
        $res = false;
        endif;
        
    return $res;
    }




}

?>
