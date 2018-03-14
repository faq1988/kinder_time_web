<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aulas_controller extends CI_Controller {

	public function __construct()
{
  parent::__construct();  
  $this->load->model('Clase_model');
}



  public function agregar_aula()
  {
      $this->form_validation->set_rules('nombre', 'Nombre', 'required');    
      $this->form_validation->set_rules('capacidad', 'Capacidad', 'required|numeric');
    

      if ($this->form_validation->run() == FALSE)
      {
          $menu['rol']= $this->session->userdata('rol');
          $this -> load -> view('header');
          $this -> load -> view('menu', $menu);
          $this -> load -> view('crear_aula');
      }
      else
      {
          $data = array(
      'nombre' => $this->input->post('nombre'),
      'capacidad' => $this->input->post('capacidad'),
      );

      $this->Clase_model->insertar_aula($data);

      redirect("Welcome/buscar_aulas");
      }
       
  }


  public function eliminar_aula()
  {
    $id_aula = $this->uri->segment(3);    
    $this->Clase_model->eliminar_aula($id_aula);
    redirect('Welcome/buscar_aulas');
  }



}
