<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	 public function __construct()
   {
        parent::__construct();
				$this->load->model('m_admin');
				$this->load->library('Twig');
        // Your own constructor code
   }
	public function index()
	{
		$articulos=$this->m_admin->getArticulos();
		// print_r($articulos);
		$datos['articulos']=$articulos;
		$this->twig->display('index',$datos);
	}

	public function registrar()
	{
		$datos['nombre']=$this->input->post('name');
		$datos['email']=$this->input->post('email');
		$datos['user']=$this->input->post('username');
		$datos['contrasena']=$this->input->post('passwd');
		$articulos=$this->m_admin->getArticulos();
		redirect("/");
	}
	/*-------------------------------------------------------Usuarios-------------------.-------------------------------------------*/

		function login(){

			$user =$this->input->post('cuenta');
			// print_r($user);
			$contrasena =$this->input->post('clave');
			// print_r($contrasena);
			$res = $this->m_admin->validalogin($user,$contrasena);

			//print_r($res);
			if(!empty($res)){
				$datos = array(
					'user'=>$res[0]['user'],
					'nombre'=>$res[0]['nombre'],
					'categoria'=>0
				);
					$datos['articulos']=$this->m_admin->getArticulos();
				//print_r($datos);
				$this->session->set_userdata($datos);

				$this->twig->display('login',$datos);




			} else{$this->twig->display('index');}
		}

		function logout(){
			$this->session->sess_destroy();
			$this->twig->display('index');
		}

		function validaSession(){
			if($this->session->userdata('cuenta')!=null)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
}
