<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}




function crear_persona($data, $tipo){
    switch($tipo){
      case ALUMNO: {
        $this->db->trans_start();
          $qry="INSERT INTO persona (tipo_doc,doc,nombre,apellido,edad,nacimiento,email,direccion,ciudad,id_establecimiento)
                VALUES({$data['tipo_doc']},{$data['doc']},'{$data['nombre']}', '{$data['apellido']}',
            			'{$data['edad']}','{$data['nacimiento']}', '{$data['email']}', '{$data['direccion']}','{$data['ciudad']}',0);";
          $this->db->simple_query($qry);
          $qry="INSERT INTO alumno  (tipo_doc,doc,st,ts)
                VALUES({$data['tipo_doc']},{$data['doc']},1, sydsdate());";
          $this->db->simple_query($qry);
        $this->db->trans_complete();
      }break;
      case MAESTRO: {
      }break;
      case TUTOR: {
      }break;
    }
	}



  function obtener_personas($tipo,$estado = ACTIVO){
    $f_st=($estado) ? " AND p.st={$estado} ":"";
    switch($tipo){
      case ALUMNO: {
        $qry="SELECT p.* FROM persona p JOIN alumno a USING (tipo_doc,doc) WHERE 1 {$f_st};";
        $res=$this->db->query($qry);
        if ($res->num_rows() >0 ) return $res -> result_array();
      }break;
      case MAESTRO: {
        $qry="SELECT p.* FROM persona p JOIN alumnos_por_maestro hp ON (p.tipo_doc=hp.tipo_doc_maestro AND p.doc=hp.doc_maestro) WHERE 1 {$f_st};";
        $res=$this->db->query($qry);
        if ($res->num_rows() >0 ) return $res -> result_array();
      }break;
      case TUTOR: {
        $qry="SELECT p.*,ht.vinculo FROM persona p JOIN hijos_por_tutores ht ON (p.tipo_doc=ht.tipo_doc_tutor AND p.doc=ht.doc_tutor) WHERE 1 {$f_st};";
        $res=$this->db->query($qry);
        if ($res->num_rows() >0 ) return $res -> result_array();
      }break;
    }
  }

  function obtener_persona($tipo_doc,$doc,$estado = ACTIVO){
    $f_st=($estado) ? " AND st={$estado} ":"";
    $qry="SELECT * FROM persona WHERE tipo_doc={$tipo_doc} AND doc={$doc} {$f_st};";
    $res=$this->db->query($qry);
    if ($res->num_rows() >0 ) return $res -> row_array();
  }

  function obtener_tutor($tipo_doc_alumno,$doc_alumno){
    $qry="SELECT p.*,ht.vinculo FROM persona p
          JOIN hijos_por_tutores ht ON (p.tipo_doc=ht.tipo_doc_tutor AND p.doc=ht.doc_tutor)
          WHERE ht.tipo_doc_alumno={$tipo_doc_alumno} AND ht.doc_alumno={$doc_alumno};";
    $res=$this->db->query($qry);
    if ($res->num_rows() >0 ) return $res -> row_array();
  }

function eliminar_persona($tipo_doc,$doc)
	{
      $qry="UPDATE persona SET st=".INACTIVO." WHERE tipo_doc={$tipo_doc} AND doc={$doc};";
      $this->db->simple_query($qry);
	}

  function modificar_persona($tipo_doc,$doc, $data)
  {
    $this->db->set('nombre', $data['nombre']);
    $this->db->set('apellido', $data['apellido']);
    $this->db->set('edad', $data['edad']);
    $this->db->set('email', $data['email']);
    $this->db->set('direccion', $data['direccion']);
    $this->db->set('ciudad', $data['ciudad']);
    $this->db->where('tipo_doc', $tipo_doc);
    $this->db->where('doc', $doc);
    $this->db->update('persona');
  }


}


?>
