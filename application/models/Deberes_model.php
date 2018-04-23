<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deberes_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}


function crear_deberes($data){
		$this->db->insert('deberes', array('fecha_entrega'=>$data['fecha'],
			'descripcion'=>$data['descripcion'], 'materia'=>$data['materia'],
			'tipo_doc_maestro'=>$data['tipo_doc_maestro'], 'doc_maestro'=>$data['doc_maestro']

		));
	}



  function obtener_deberes(){
  		$query = $this->db->get('deberes');
  		if ($query->num_rows() >0 ) return $query;//->result();
  			}

  function obtener_deberes_maestro($tipo_doc_maestro, $doc_maestro){
  		$this->db->where('tipo_doc_maestro', $tipo_doc_maestro);
  		$this->db->where('doc_maestro', $doc_maestro);
  		$query = $this->db->get('deberes');
  		if ($query->num_rows() >0 ) return $query;//->result();
  			}


  function obtener_deberes_tutor($tipo_doc_tutor, $doc_tutor)
  {
    $qry="SELECT d.* FROM deberes d JOIN hijos_por_tutores h ON (h.tipo_doc_hijo=d.tipo_doc_alumno AND h.doc_hijo=d.doc_alumno) WHERE h.tipo_doc_tutor={$tipo_doc_tutor} AND h.doc_tutor={$doc_tutor};";
        $res=$this->db->query($qry);
        //if ($res->num_rows() >0 ) return $res -> result_array();
        if ($res->num_rows() >0 ) return $res;
  }





}


?>
