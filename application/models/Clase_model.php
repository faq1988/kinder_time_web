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
		$this->db->select('l.id, l.dni, l.nombre, l.apellido, l.edad');
		$this->db->from('persona l');
		$this->db->join('alumnos_por_clase i', 'i.id_alumno = l.id', 'left');
		$where = "i.id_alumno is NULL and l.tipo='ALUMNO'";
		$this->db->where($where);		
		$query = $this->db->get();
  		if ($query->num_rows() >0 ) return $query;//->result();

	}







}


?>
