<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Establecimiento_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}

function insertar_establecimiento($data){
		$this->db->insert('institucion', array('nombre'=>$data['nombre'],'domicilio'=>$data['domicilio'], 'ciudad'=>$data['ciudad'],
	'pais'=>$data['pais'], 'telefono'=>$data['telefono'], 'mail'=>$data['mail']));
	}



  function obtener_establecimientos(){
  		$query = $this->db->get('institucion');
  		if ($query->num_rows() >0 ) return $query;//->result();
  			}


function eliminar_establecimiento($id)
	{
		$this->db->where('id =', $id);
		$this->db->delete('institucion');
	}
}


?>
