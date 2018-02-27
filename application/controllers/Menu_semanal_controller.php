<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_semanal_controller extends CI_Controller {

	public function __construct()
{
  parent::__construct();  
  $this->load->model('menu_model');
}



  public function agregar_menu()
  {
      $data = array(
      'desayuno' => $this->input->post('desayuno'),
      'almuerzo' => $this->input->post('almuerzo'),
      'merienda' => $this->input->post('merienda'),
      'cena' => $this->input->post('cena'),
      'fecha' => $this->input->post('fecha'),
      );

      $this->menu_model->insertar_menu_semanal($data);

      redirect("welcome/menu_semanal");
  }




}
