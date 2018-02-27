<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}




function insertar_menu_semanal($data){
		$this->db->insert('menu_semanal', array('desayuno'=>$data['desayuno'], 'almuerzo'=>$data['almuerzo'], 'merienda'=>$data['merienda'], 'cena'=>$data['cena'], 
      'fecha'=>$data['fecha']));      
	}
  



  function obtener_menu($monday, $friday){
  		$this->db->where('fecha >=', $monday);
    	$this->db->where('fecha <=', $friday);
  		$query = $this->db->get('menu_semanal');
  		if ($query->num_rows() >0 ) return $query;//->result();
  			}










}


?>
