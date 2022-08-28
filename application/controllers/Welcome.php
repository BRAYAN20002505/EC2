<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load -> helper('form');
		$this->load->model('persona');
		$this->load->helper('url');
	}

	public function index()
	{
		$datos['personas'] = $this->persona->seleccionar_todo();
		$this->load->view('main_view',$datos);
	}

	public function agregar()
	{
		$persona['nombre'] = $this->input-> post('nombre');
		$persona['apellido'] = $this->input-> post('apellido');
		$persona['dpi'] = $this->input-> post('dpi');
		$persona['direccion'] = $this->input-> post('direccion');
		$persona['movil'] = $this->input-> post('movil');
		$persona['email'] = $this->input-> post('email');
		$this->persona->agregar($persona);
		redirect('welcome');
	}

	public function eliminar($id_persona) {
		$this->persona->eliminar($id_persona);
		redirect('welcome');
	}//end eliminar


	public function editar($id_persona) {
		$persona['nombre'] = $this->input->post('nombre');
		$persona['apellido'] = $this->input->post('apellido');
		$persona['dpi'] = $this->input-> post('dpi');
		$persona['direccion'] = $this->input->post('direccion');
		$persona['movil'] = $this->input->post('movil');
		$persona['email'] = $this->input->post('email');

		$this->persona->actualizar($persona, $id_persona);
		redirect('welcome');
	}//end editar

}
