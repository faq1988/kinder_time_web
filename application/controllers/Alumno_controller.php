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

       $this->form_validation->set_rules('nombre', 'Nombre', 'required');
      $this->form_validation->set_rules('apellido', 'Apellido', 'required');
      $this->form_validation->set_rules('edad', 'Edad', 'required|numeric');
      $this->form_validation->set_rules('dni', 'Dni', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('direccion', 'Dirección', 'required');
      $this->form_validation->set_rules('ciudad', 'Ciudad', 'required');

      if ($this->form_validation->run() == FALSE)
      {
          $menu['rol']= $this->session->userdata('rol');
          $this -> load -> view('header');
          $this -> load -> view('menu', $menu);
          $this -> load -> view('crear_alumno');
      }
      else
      {
         $data = array(
		      'nombre' => $this->input->post('nombre'),
		      'apellido' => $this->input->post('apellido'),
		      'edad' => $this->input->post('edad'),
					'tipo_doc' => $this->input->post('tipo_doc'),
		      'doc' => $this->input->post('doc'),
		      'email' => $this->input->post('email'),
		      'direccion' => $this->input->post('direccion'),
		      'ciudad' => $this->input->post('ciudad'),

      );

      $this->persona_model->crear_persona($data, ALUMNO);

      redirect("Welcome/buscar_alumno");
      }
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
		$id_alumno_data=explode('-',$id_alumno);
    $this->persona_model->eliminar_persona($id_alumno_data[0],$id_alumno_data[1]);
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

  public function crear_editar_tutor(){
		//inserto el tutor como persona, si ya existe lo actualizo
		var_dump($this -> input -> post());
	}

}
