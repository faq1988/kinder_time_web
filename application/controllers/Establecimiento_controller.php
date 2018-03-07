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

     $this->form_validation->set_rules('nombre', 'Nombre', 'required');
      $this->form_validation->set_rules('domicilio', 'Domicilio', 'required');
      $this->form_validation->set_rules('ciudad', 'Ciudad', 'required');
      $this->form_validation->set_rules('pais', 'País', 'required');
      $this->form_validation->set_rules('telefono', 'Teléfono', 'required|numeric');
      $this->form_validation->set_rules('mail', 'Email', 'required|valid_email');
      
      if ($this->form_validation->run() == FALSE)      
      {
          $menu['rol']= $this->session->userdata('rol');         
          $this -> load -> view('header');
          $this -> load -> view('menu', $menu);
          $this -> load -> view('crear_establecimiento');
      } 
      else
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


   public function eliminar_establecimiento()
      {
        $id_establecimiento = $this->uri->segment(3);

        $this->Establecimiento_model->eliminar_establecimiento($id_establecimiento);

        redirect('Welcome/buscar_establecimientos');
      }




}
