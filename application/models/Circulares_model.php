<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Circulares_model extends CI_Model{



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


  function obtener_circulares(){
  	$this->db->select('c.id, c.asunto, c.mensaje, c.fechahora, p.nombre, p.apellido');
	$this->db->from('circulares c');
	$this->db->join('persona p', 'p.tipo_doc = c.tipo_doc_destino AND p.doc=c.doc_destino');			
	$query = $this->db->get();
  		
	if ($query->num_rows() >0 ) return $query;//->result();
  	}


  function enviar_circular($destinatarios, $data)
  {

  	if (isset($destinatarios)){
         for($i=0; $i<count($destinatarios); $i++)
         {
  			$this->db->insert('circulares', array('tipo_doc_destino'=>$destinatarios[$i]['tipo_doc'], 'doc_destino'=>$destinatarios[$i]['doc'],
			'asunto'=>$data['asunto'], 'mensaje'=>$data['comentario']));
  		 }
  	}
  }			


  function enviar_mensaje_directo($tipo_doc, $doc, $data)
  {
  			$this->db->insert('circulares', array('tipo_doc_destino'=>$tipo_doc, 'doc_destino'=>$doc,
			'asunto'=>$data['asunto'], 'mensaje'=>$data['comentario']));
  }

}


?>
