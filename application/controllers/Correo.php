<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Correo extends CI_Controller
{
    public function index(){
        $this->load->view('generico/head.php');
        $this->load->view('generico/nav.php');
        $this->load->view('correo/enviar.php');
        $this->load->view('generico/footer.php');
    }
    public function enviar(){
        $this->load->model('correo/Correo_model');
        $email = $this->Correo_model->enviar($this->input->post());
        if ($email == 1) {
            //funciono
        }else{
            //no funciono
        }
        redirect(base_url()."correo");
    }
		
	

	
}

?>