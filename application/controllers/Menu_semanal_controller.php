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

      $this->form_validation->set_rules('desayuno', 'Desayuno', 'required');
      $this->form_validation->set_rules('almuerzo', 'Almuerzo', 'required');
      $this->form_validation->set_rules('merienda', 'Merienda', 'required');
      $this->form_validation->set_rules('cena', 'Cena', 'required');
      $this->form_validation->set_rules('fecha', 'Fecha', 'required');
      
      if ($this->form_validation->run() == FALSE)      
      {
          $menu['rol']= $this->session->userdata('rol');         
          $this -> load -> view('header');
          $this -> load -> view('menu', $menu);
          $this -> load -> view('crear_menu_semanal');
      } 
      else
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




}
