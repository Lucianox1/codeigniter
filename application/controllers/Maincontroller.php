<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Maincontroller extends CI_Controller
{
	
	public function index(){
    $this->load->view('generico/head.php');
    $this->load->view('generico/nav.php');
    $this->load->view('generico/footer.php');

  }
		
	

	
}

?>