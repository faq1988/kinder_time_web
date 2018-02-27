<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autorizaciones_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}




function crear_autorizacion($id_tutor, $id_alumno, $asunto, $descripcion, $leido, $estado){
		$this->db->insert('evento', array('id_tutor'=>$id_tutor, 'id_alumno'=>$id_alumno,
			'asunto'=>$asunto, 'descripcion'=>$descripcion, 'leido'=>$leido, 'estado'=>$estado));
	}



  function obtener_autorizaciones(){
  		$query = $this->db->get('autorizaciones');
  		if ($query->num_rows() >0 ) return $query;//->result();
  			}










}


?>
