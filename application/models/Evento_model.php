<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}




function crear_eventos($accion, $descripcion, $id_alumno){
		$this->db->insert('evento', array('accion'=>$accion, 'descripcion'=>$descripcion,
			'id_alumno'=>$id_alumno));
	}



  function obtener_eventos(){
  		$query = $this->db->get('evento');
  		if ($query->num_rows() >0 ) return $query;//->result();
  			}










}


?>
