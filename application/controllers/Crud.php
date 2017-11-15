<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('crud/crud_model');
    }

	public function index(){
    $datos['productos'] = $this->crud_model->cargar();
    $datos['familia'] = $this->crud_model->cargar_familias();

    $this->load->view('generico/head.php');
    $this->load->view('generico/nav.php');
    $this->load->view('crud/crud.php',$datos);
    $this->load->view('generico/footer.php');
    }

    public function insertar_producto(){
        $insertar = $this->crud_model->insertar_producto($this->input->post());
        redirect(base_url()."crud");
    }

    public function eliminar_producto($id){
        $eliminar = $this->crud_model->eliminar_producto($id);
        redirect(base_url()."crud");
    }
		
	

	
}

?>