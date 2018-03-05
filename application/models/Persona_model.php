<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}




function crear_persona($data, $tipo){

		$this->db->insert('persona', array('nombre'=>$data['nombre'], 'apellido'=>$data['apellido'],
			'edad'=>$data['edad'], 'dni'=>$data['dni'], 'email'=>$data['email'], 'direccion'=>$data['direccion'],'ciudad'=>$data['ciudad'],'tipo'=>$tipo));

	}



  function obtener_personas($tipo){
      $this->db->where('tipo=',$tipo);
      $query = $this->db->get('persona');
      if ($query->num_rows() >0 ) return $query;//->result();

        }

  function obtener_persona_por_id($id){
      $this->db->where('id=',$id);
      $query = $this->db->get('persona');
      if ($query->num_rows() >0 ) return $query;//->result();
        }


function eliminar_persona($id)
	{
		$this->db->where('id =', $id);
		$this->db->delete('persona');
	}

  function modificar_persona($id_alumno, $data)
  {
    $this->db->set('nombre', $data['nombre']);
    $this->db->set('apellido', $data['apellido']);
    $this->db->set('edad', $data['edad']);
    $this->db->set('dni', $data['dni']);
    $this->db->set('email', $data['email']);
    $this->db->set('direccion', $data['direccion']);
    $this->db->set('ciudad', $data['ciudad']);
    $this->db->where('id', $id_alumno);
    $this->db->update('persona');
  }



  function obtener_tutores ($id_persona)
  {
      $qry="SELECT * FROM persona p JOIN hijos_por_tutores ht ON (p.id=id_tutor AND id_alumno={$id_persona});";
      $res=$this->db->query($qry);
      if ($res->num_rows() >0 ) return $res -> row_array();//->result();
  }






}


?>
