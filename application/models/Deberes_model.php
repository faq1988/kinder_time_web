<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deberes_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}
/*
function crear_deberes($id_alumno, $descripcion, $leido){
		$this->db->insert('evento', array('id_alumno'=>$id_alumno,
			'descripcion'=>$descripcion, 'leido'=>$leido));
	}
*/


  function obtener_deberes(){
  		$query = $this->db->get('deberes');
  		if ($query->num_rows() >0 ) return $query;//->result();
  			}

}


?>
