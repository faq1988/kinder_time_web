<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tareas_controller extends CI_Controller {

	public function __construct()
{
  parent::__construct();  
  $this->load->model('Deberes_model');
}



  public function agregar_tarea()
  {

      $this->form_validation->set_rules('fecha', 'Fecha de entrega', 'required');
      $this->form_validation->set_rules('materia', 'Materia', 'required');
      $this->form_validation->set_rules('descripcion', 'Descripción', 'required');      
      
      if ($this->form_validation->run() == FALSE)      
      {
          $menu['rol']= $this->session->userdata('rol');         
          $this -> load -> view('header');
          $this -> load -> view('menu', $menu);
          $this -> load -> view('crear_tarea');
      } 
      else
      {
        $data = array(
      'fecha' => $this->input->post('fecha'),
      'materia' => $this->input->post('materia'),
      'descripcion' => $this->input->post('descripcion'),
      
      );

      $this->Deberes_model->crear_deberes($data);

      redirect("welcome/deberes_tareas");
      }
    
  }


   public function eliminar_establecimiento()
      {
        $id_establecimiento = $this->uri->segment(3);

        $this->Establecimiento_model->eliminar_establecimiento($id_establecimiento);

        redirect('Welcome/buscar_establecimientos');
      }




}
