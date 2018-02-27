<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maestro_controller extends CI_Controller {

	public function __construct()
{
  parent::__construct();
  $this->load->model('persona_model');	
}



  public function crear_maestro()
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


      $this->persona_model->crear_persona($data, 'MAESTRO');

      redirect(welcome);
  }

	





}
