<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clase_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}




function insertar_alumno_clase($id_clase, $id_alumno){
		$this->db->insert('alumnos_por_clase', array('id_alumno'=>$id_alumno, 'id_clase'=>$id_clase,
			));
	}


 function insertar_aula($data)
 {
 	$this->db->insert('aula', array('nombre'=>$data['nombre'], 'capacidad'=>$data['capacidad']));
 }


  function obtener_aulas(){
  		$query = $this->db->get('aula');
  		if ($query->num_rows() >0 ) return $query;//->result();
  		}



/*
alumnos que no estan asignados a una clase
SELECT l.id, l.dni, l.nombre, l.apellido, l.edad
FROM   persona l
LEFT   JOIN alumnos_por_clase i ON i.id_alumno = l.id
WHERE  i.id_alumno IS NULL
and l.tipo='ALUMNO'
*/
	function obtener_alumnos_sin_clase()
	{
    $qry="SELECT *
          FROM persona p
          JOIN alumnos_por_clase ac ON (p.tipo_doc=ac.tipo_doc_alumno AND  p.doc=ac.doc_alumno)
          WHERE  p.doc IS NULL AND p.tipo_doc IS NUll";
    $res=$this->db->query($qry);
    if ($res->num_rows() >0 ) return $res -> result_array();
	}


	function eliminar_aula($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('aula');
	}

  function obtener_clases($establecimiento){
      $this->db->where('establecimiento', $establecimiento);
      $query = $this->db->get('clase');
      if ($query->num_rows() >0 ) return $query;//->result();
      }

  function obtener_clase($id = NULL,$estado=ACTIVO){
    $f_st=($estado) ? " AND st={$estado} ":"";
    $f_id=($id) ? " AND id={$id} ":"";
    $qry="SELECT * FROM clase WHERE 1 {$f_id} {$f_st}";
    $res=$this->db->query($qry);
    if ($res->num_rows() >0 ) return $res -> result_array();
  }


  function obtener_alumnos_clase($clase){
    $qry="SELECT p.tipo_doc_alumno as tipo_doc, p.doc_alumno as doc FROM alumnos_por_clase p
          WHERE p.id_clase={$clase};";
    $res=$this->db->query($qry);
    if ($res->num_rows() >0 ) return $res -> result_array();
  }

}


?>
