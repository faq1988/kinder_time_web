<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_controller extends CI_Controller {

	public function __construct()
{
  parent::__construct();
  $this->load->model('persona_model');
	$this->load->model('evento_model');
}



  public function crear_alumno()
  {


      $data = array(
      'nombre' => $this->input->post('nombre'),
      'apellido' => $this->input->post('apellido'),
      'edad' => $this->input->post('edad'),
      'dni' => $this->input->post('dni'),
      'email' => $this->input->post('email'),
      'direccion' => $this->input->post('direccion'),
      'ciudad' => $this->input->post('ciudad'),

      );


      $this->persona_model->crear_persona($data, 'ALUMNO');

      redirect("Welcome/buscar_alumno");
  }

	public function registrar_evento()
  {
		$evento = $this->input->post('tipo_evento');
		$lista_alumnos= $this->input->post('lista_alumnos');
		$descripcion= $this->input->post('descripcion');
/*
      $data = array(
      'evento' => $this->input->post('tipo_evento'),
      'alumnos' => $this->input->post('lista_alumnos'),
      );
			var_dump($data);exit;
*/
			for ($i=0 ; $i< sizeof($lista_alumnos); $i++)
			{
      		$this->evento_model->crear_eventos($evento, $descripcion, $lista_alumnos[$i]);
			}
      redirect("welcome/eventos");
  }



  public function asignar_alumnos_clases()
  {
    $clase = $this->input->post('clase');
    $lista_alumnos = $this->input->post('lista_alumnos');

    $this->load->model('clase_model');

    for ($i=0 ; $i < sizeof($lista_alumnos) ; $i++)
    {
        $this->clase_model->insertar_alumno_clase($clase, $lista_alumnos[$i]);
    }

    redirect("welcome");
  }


  public function eliminar_alumno()
  {
    $id_alumno = $this->uri->segment(3);

    $this->persona_model->eliminar_persona($id_alumno);

    redirect('Welcome/buscar_alumno');
  }



public function modificar_alumno()
  {
    $id_alumno = $this->uri->segment(3);

    $data = array(
      'nombre' => $this->input->post('nombre'),
      'apellido' => $this->input->post('apellido'),
      'edad' => $this->input->post('edad'),
      'dni' => $this->input->post('dni'),
      'email' => $this->input->post('email'),
      'direccion' => $this->input->post('direccion'),
      'ciudad' => $this->input->post('ciudad'),

      );

    $this->persona_model->modificar_persona($id_alumno, $data);

    redirect('Welcome/buscar_alumno');
  }

  

}
