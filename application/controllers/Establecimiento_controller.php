<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Establecimiento_controller extends CI_Controller {

	public function __construct()
{
  parent::__construct();  
  $this->load->model('Establecimiento_model');
}



  public function agregar_establecimiento()
  {
      $data = array(
      'nombre' => $this->input->post('nombre'),
      'domicilio' => $this->input->post('domicilio'),
      'ciudad' => $this->input->post('ciudad'),
      'pais' => $this->input->post('pais'),
      'telefono' => $this->input->post('telefono'),
      'mail' => $this->input->post('mail'),
      );

      $this->Establecimiento_model->insertar_establecimiento($data);

      redirect("welcome/buscar_establecimientos");
  }




}
