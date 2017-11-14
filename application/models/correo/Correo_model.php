<?php
/**
* 
*/
class Correo_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function enviar($datos){
		$this->load->library("email");
		$usuario = $datos['txtcorreo'];
		$contra = $datos['txtpassword'];
		$destinatario = $datos['txtcorreodestino'];
        $titulo = $datos['txttitulo'];
		$mensaje = $datos['txtmensaje'];
  
	    $configGmail = array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.gmail.com',
        'smtp_port' => 465,
        'smtp_user' => $usuario,
        'smtp_pass' => $contra,
        'mailtype' => 'html',
        'charset' => 'utf-8',
        'newline' => "\r\n"
        );
        $this->email->initialize($configGmail);
        $this->email->from('Boom Solutions');
        $this->email->to($destinatario);
        $this->email->subject($titulo);
        $this->email->message($mensaje);
        if ($this->email->send()) {
            return 1;
        }
	}
}

?>