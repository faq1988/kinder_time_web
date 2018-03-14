<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deberes_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}


function crear_deberes($data){
		$this->db->insert('deberes', array('fecha_entrega'=>$data['fecha'],
			'descripcion'=>$data['descripcion'], 'materia'=>$data['materia']));
	}



  function obtener_deberes(){
  		$query = $this->db->get('deberes');
  		if ($query->num_rows() >0 ) return $query;//->result();
  			}

}


?>
