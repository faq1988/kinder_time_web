<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index(){
  $this -> load -> view('web_institucional');
  }

  public function contenido_header()
  {
    $this->load->model('usuario_model');
    $usuario= $this->usuario_model->obtener_usuario($this->session->userdata('username')) ->result();
    $header=array();
    $this->load->model('sistema_model');
    $ultimos_mensajes=  $this->sistema_model->obtener_ultimos_mensajes($usuario[0]-> tipo_doc,$usuario[0]-> doc);
    if (isset($ultimos_mensajes))
    $header['ultimos_mensajes']= $ultimos_mensajes->result();

    return $header;
  }


  public function login()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $this->load->model('usuario_model');
    $usuario= $this->usuario_model->obtener_usuario($this->session->userdata('username')) ->result();
    $header=array();
    $this->load->model('sistema_model');
    $ultimos_mensajes=  $this->sistema_model->obtener_ultimos_mensajes($usuario[0]-> tipo_doc,$usuario[0]-> doc);

    if (isset($ultimos_mensajes))
    $header['ultimos_mensajes']= $ultimos_mensajes->result();
    $menu['rol']= $this->session->userdata('rol');

    $this -> load -> view('header', $header);
    $this -> load -> view('menu', $menu);
    $this -> load -> view('estadisticas');
  }


  public function eventos()
  {
  	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
		$data=array();
		$this->load->model('evento_model');
		$eventos=  $this->evento_model->obtener_eventos();

		if (isset($eventos))
		$data['eventos']= $eventos->result();

    $menu['rol']= $this->session->userdata('rol');

	$this -> load -> view('header');
  $this -> load -> view('menu', $menu);
	$this -> load -> view('eventos', $data);
  }


   public function crear_alumno()
  {
  	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');


     $this -> load -> view('header');
     $this -> load -> view('menu', $menu);
	 $this -> load -> view('crear_alumno');
  }

	public function crear_editar_tutor()
 {
	 if (!$this->session->userdata('username'))
	 {
		 redirect('login');
	 }

	 $menu['rol']= $this->session->userdata('rol');

	 //verifico si el alumno tiene cargado un tutores
	 //si tiene tutor precargo los datos
	 $this -> load -> model('Persona_model');
	 $tipo_doc_alumno=$this->uri->segment(3);
	 $doc_alumno=$this->uri->segment(4);
	 if(isset($tipo_doc_alumno) &&  $doc_alumno){
		 $alumno=$tipo_doc_alumno.'|'.$doc_alumno;
	 	 $tutor=$this -> Persona_model -> obtener_tutor($tipo_doc_alumno,$doc_alumno);
	 }
	 else {
	 	//MENSAJE DE ERROR 404
	 }
	 $data=array();
	 $data['tutor']=$tutor;
	 $data['alumno']=$alumno;
		$this -> load -> view('header');
		$this -> load -> view('menu', $menu);
		$this -> load -> view('crear_editar_tutor',$data);
 }

  public function contacto()
  {
  	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');



    $this -> load -> view('header');
    $this -> load -> view('menu', $menu);
	  $this -> load -> view('contacto');
  }

  public function crear_evento()
  {
  	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

		$data=array();
		$this->load->model('persona_model');
		$alumnos=  $this->persona_model->obtener_personas(ALUMNO);

		if (isset($alumnos))
		$data['alumnos']= $alumnos->result();

    $menu['rol']= $this->session->userdata('rol');

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
	$this -> load -> view('crear_evento', $data);
  }


	public function menu_semanal()
	{
		if (!$this->session->userdata('username'))
		{
			redirect('login');
		}
    $monday = date( 'Y-m-d', strtotime( 'monday this week' ) );
    $friday = date( 'Y-m-d', strtotime( 'friday this week' ) );

		$data=array();
		$this->load->model('menu_model');
		$menu_semanal=  $this->menu_model->obtener_menu($monday, $friday);

		if (isset($menu_semanal))
		$data['menu_semanal']= $menu_semanal->result();

		$menu['rol']= $this->session->userdata('rol');



		$this -> load -> view('header');
		$this -> load -> view('menu', $menu);
		$this -> load -> view('menu_semanal', $data);
	}


  public function crear_maestro()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('crear_maestro');
  }

  public function buscar_alumno()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('persona_model');
    $alumnos=  $this->persona_model->obtener_personas(ALUMNO, $this->session->userdata('establecimiento'));

    if (isset($alumnos))
    $data['alumnos']= $alumnos;

    $menu['rol']= $this->session->userdata('rol');

		$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('buscar_alumno', $data);
  }

  public function buscar_maestros()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('persona_model');
    $maestros=  $this->persona_model->obtener_personas(MAESTRO);
    if (isset($maestros))
    $data['maestros']= $maestros->result();

    $menu['rol']= $this->session->userdata('rol');

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('buscar_maestro', $data);
  }

    public function ver_mensajes_alumno()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $this->load->model('usuario_model');
    $usuario= $this->usuario_model->obtener_usuario($this->session->userdata('username')) ->result();

    $data=array();
    $this->load->model('sistema_model');
    $mensajes=  $this->sistema_model->obtener_mensajes_alumno($usuario[0]->tipo_doc, $usuario[0]->doc);

    if (isset($mensajes))
    $data['mensajes']= $mensajes->result();

    $menu['rol']= $this->session->userdata('rol');

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('mensajes_alumnos', $data);
  }


  public function galeria()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('galeria');
  }


  public function asignar_clases()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('clase_model');
    //$alumnos=  $this->persona_model->obtener_personas('ALUMNO');
    $alumnos= $this->clase_model->obtener_alumnos_sin_clase();
    $aulas= $this->clase_model->obtener_aulas();

    if (isset($alumnos))
    $data['alumnos']= $alumnos;

    if (isset($aulas))
    $data['aulas']= $aulas->result();

    $menu['rol']= $this->session->userdata('rol');

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('clases', $data);
  }


  public function buscar_autorizaciones()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('autorizaciones_model');
    //$alumnos=  $this->persona_model->obtener_personas('ALUMNO');
    $autorizaciones= $this->autorizaciones_model->obtener_autorizaciones();

    if (isset($autorizaciones))
    $data['autorizaciones']= $autorizaciones->result();

    $menu['rol']= $this->session->userdata('rol');

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('autorizaciones', $data);
  }

  public function estadisticas()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('estadisticas');
  }


    public function crear_usuario_maestros()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $data=array();
    $this->load->model('persona_model');
    $maestros=  $this->persona_model->obtener_personas('MAESTRO');

    if (isset($maestros))
    $data['maestros']= $maestros->result();

    $menu['rol']= $this->session->userdata('rol');

    $data['rol']= 'MAESTRO';

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('crear_usuario', $data);
  }



  public function ver_perfil()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');
    $data=array();
    $this->load->model('usuario_model');
    $perfil=  $this->usuario_model->obtener_perfil($this->session->userdata('username'));

    if (isset($perfil))
    $data['perfil']= $perfil->result();

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('perfil', $data);
  }


  public function buscar_inasistencias()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('inasistencias_model');
    $inasistencias= $this->inasistencias_model->obtener_inasistencias();

    if (isset($inasistencias))
    $data['inasistencias']= $inasistencias->result();

    $menu['rol']= $this->session->userdata('rol');

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('inasistencias', $data);
  }


  public function buscar_aulas()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('Clase_model');
    //$alumnos=  $this->persona_model->obtener_personas('ALUMNO');
    $aulas= $this->Clase_model->obtener_aulas();

    if (isset($aulas))
    $data['aulas']= $aulas->result();

    $menu['rol']= $this->session->userdata('rol');

	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('buscar_aula', $data);
  }

	public function buscar_clases()
	{
	 if (!$this->session->userdata('username'))
		{
			redirect('login');
		}

		$data=array();
		$this->load->model('Clase_model');
		$clases= $this->Clase_model->obtener_clase();

		if (isset($clases))
		$data['clases']= $clases;

		$menu['rol']= $this->session->userdata('rol');

		$this -> load -> view('header');
		$this -> load -> view('menu', $menu);
		$this -> load -> view('buscar_clases', $data);
	}

	public function crear_editar_clase()
	{
	 if (!$this->session->userdata('username'))
		{
			redirect('login');
		}

		$data=array();
		$this->load->model('persona_model');
		$id=$this->uri->segment(3);
		$maestros=  $this->persona_model->obtener_personas('MAESTRO');

		if (isset($maestros))
		$data['maestros']= $maestros;

		$menu['rol']= $this->session->userdata('rol');

		$this -> load -> view('header');
		$this -> load -> view('menu', $menu);
		$this -> load -> view('crear_editar_clase', $data);
	}

  public function ver_alumno()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $data=array();
    $this->load->model('persona_model');
    $tipo_doc = $this->uri->segment(3);
		$doc = $this->uri->segment(4);

    $alumno= $this->persona_model->obtener_persona($tipo_doc,$doc);
    if (isset($alumno))
    $data['alumno']= $alumno->result();
    $menu['rol']= $this->session->userdata('rol');

    $this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('detalle_alumno', $data);
  }


   public function crear_usuario_alumno()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $data=array();
    $this->load->model('persona_model');
    $id_alumno = $this->uri->segment(3);

    $alumno= $this->persona_model->obtener_persona_por_id($id_alumno);
    if (isset($alumno))
    $data['alumno']= $alumno->result();


    $tutores=  $this->persona_model->obtener_tutores($id_alumno);

    if (isset($tutores))
    $data['tutores']= $tutores->result();

    $menu['rol']= $this->session->userdata('rol');

    $data['rol']= 'TUTOR';
    $data['id_alumno']= $id_alumno;

    $this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('crear_usuario_alumno', $data);
  }


  public function deberes_tareas()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $rol=$this->session->userdata('rol');
    $tipo_doc_usuario= $this->session->userdata('tipo_doc_usuario');
    $doc_usuario= $this->session->userdata('doc_usuario');
    $this->load->model('Persona_model');

    $hijos= $this->Persona_model->obtener_hijo($tipo_doc_usuario, $doc_usuario);

    $data=array();
    $this->load->model('Deberes_model');

    if ($rol=='TUTOR')
      $deberes= $this->Deberes_model->obtener_deberes_tutor($tipo_doc_usuario, $doc_usuario);

    if ($rol=='MAESTRO')
      $deberes= $this->Deberes_model->obtener_deberes_maestro($tipo_doc_usuario, $doc_usuario);

    if ($rol=='SUPERUSER')
      $deberes= $this->Deberes_model->obtener_deberes();

    if (isset($deberes))
    $data['deberes']= $deberes->result();

    $menu['rol']= $this->session->userdata('rol');
    
   $this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('deberes', $data);
  }


   public function modificar_alumno()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $data=array();
    $this->load->model('persona_model');
    $id_alumno = $this->uri->segment(3);

    $alumno= $this->persona_model->obtener_persona_por_id($id_alumno);

    if (isset($alumno))
    $data['alumno']= $alumno->result();
    $menu['rol']= $this->session->userdata('rol');

    $this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('modificar_alumno', $data);
  }


    public function ver_usuarios_alumno()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $data=array();
    $this->load->model('usuario_model');
    $id_alumno = $this->uri->segment(3);

    $usuarios= $this->usuario_model->obtener_usuarios_alumno($id_alumno);
    if (isset($usuarios))
    $data['usuarios']= $usuarios->result();
    $menu['rol']= $this->session->userdata('rol');
    $data['id_alumno']=$id_alumno;

    $this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('usuarios_alumno', $data);
  }


  public function cambiar_password()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');
    $data=array();
    $this->load->model('usuario_model');
    $perfil=  $this->usuario_model->obtener_perfil($this->session->userdata('username'));

    if (isset($perfil))
    $data['perfil']= $perfil->result();

    $this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('cambio_password', $data);
  }



    public function circulares()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('Circulares_model');
    $circulares= $this->Circulares_model->obtener_circulares();

    if (isset($circulares))
    $data['circulares']= $circulares->result();

    $menu['rol']= $this->session->userdata('rol');

   	$this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('circulares', $data);
  }

   public function crear_menu_semanal()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');


     $this -> load -> view('header');
     $this -> load -> view('menu', $menu);
   $this -> load -> view('crear_menu_semanal');
  }

  public function crear_tarea()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');


     $this -> load -> view('header');
     $this -> load -> view('menu', $menu);
   $this -> load -> view('crear_tarea');
  }

  public function buscar_establecimientos()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('Establecimiento_model');
    $establecimientos= $this->Establecimiento_model->obtener_establecimientos();

    if (isset($establecimientos))
    $data['establecimientos']= $establecimientos->result();

    $menu['rol']= $this->session->userdata('rol');

    $this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('buscar_establecimiento', $data);
  }


 public function crear_establecimiento()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');


     $this -> load -> view('header');
     $this -> load -> view('menu', $menu);
   $this -> load -> view('crear_establecimiento');
  }


   public function crear_circular()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');


     $this -> load -> view('header');
     $this -> load -> view('menu', $menu);
   $this -> load -> view('crear_circular');
  }


  public function crear_aula()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');


     $this -> load -> view('header');
     $this -> load -> view('menu', $menu);
   $this -> load -> view('crear_aula');
  }


  public function ver_establecimiento()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $data=array();
    $this->load->model('Establecimiento_model');
    $id_establecimiento = $this->uri->segment(3);

    $establecimiento= $this->Establecimiento_model->obtener_establecimiento($id_establecimiento);
    if (isset($establecimiento))
    $data['establecimiento']= $establecimiento->result();
    $menu['rol']= $this->session->userdata('rol');

    $this -> load -> view('header');
    $this -> load -> view('menu', $menu);
    $this -> load -> view('detalle_establecimiento', $data);
  }


}
