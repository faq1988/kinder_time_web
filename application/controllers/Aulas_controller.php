<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aulas_controller extends CI_Controller {

	public function __construct()
{
  parent::__construct();  
  $this->load->model('clase_model');
}



  public function agregar_aula()
  {
      $data = array(
      'nombre' => $this->input->post('nombre'),
      'capacidad' => $this->input->post('capacidad'),
      );

      $this->clase_model->insertar_aula($data);

      redirect("welcome/buscar_aulas");
  }




}
