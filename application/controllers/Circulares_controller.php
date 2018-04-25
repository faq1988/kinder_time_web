<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Circulares_controller extends CI_Controller {

	public function __construct()
{
  parent::__construct();  
  $this->load->model('Circulares_model');
}



  public function enviar_circular()
  {
     
      $this->form_validation->set_rules('destino', 'Destino', 'required');
      //$this->form_validation->set_rules('clase', 'Clase', 'required');
      //$this->form_validation->set_rules('alumno', 'Alumno', 'required');
      $this->form_validation->set_rules('asunto', 'Asunto', 'required');
      $this->form_validation->set_rules('comentario', 'Mensaje', 'required');
      
      if ($this->form_validation->run() == FALSE)      
      {
          $menu['rol']= $this->session->userdata('rol');         
          $this -> load -> view('header');
          $this -> load -> view('menu', $menu);
          $this -> load -> view('crear_circular');
      } 
      else
      {
        $data = array(         
      'destino' => $this->input->post('destino'),
      'clase' => $this->input->post('clase'),
      'alumno' => $this->input->post('alumno'),
      'asunto' => $this->input->post('asunto'),
      'comentario' => $this->input->post('comentario'),
      );

        if ($data['destino'] == "Todos")
        {
          $this->load->model('Persona_model');
          $destinatarios=  $this->Persona_model->obtener_personas(ALUMNO, $this->session->userdata('establecimiento'));
          $this->Circulares_model->enviar_circular($destinatarios, $data);
        }

        if ($data['destino'] == "Clase")
        {
          $this->load->model('Clase_model');
          $destinatarios= $this->Clase_model->obtener_alumnos_clase($data['clase']);
          //var_dump($destinatarios);exit;          
          $this->Circulares_model->enviar_circular($destinatarios, $data);
        }

        if ($data['destino'] == "Alumno")
        {
          $id_alumno_data=explode('-',$data['alumno']);          
          $this->Circulares_model->enviar_mensaje_directo($id_alumno_data[0],$id_alumno_data[1], $data);
        }

      redirect("welcome/circulares");
      }
    
  }


   




}
