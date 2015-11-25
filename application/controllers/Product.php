<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	 public function __construct()
   {
        parent::__construct();
				$this->load->library('Twig');
        // Your own constructor code
   }
	public function index()
	{
		$articulos=$this->getArticulos();
		// print_r($articulos);
		$datos['articulos']=$articulos;
		$this->twig->display('index',$datos);
	}
	function getArticulos(){
		$query=$this->db->get('articulos');
		return $query->result_array();
	}
	public function registrar()
	{
		$datos['nombre']=$this->input->post('name');
		$datos['email']=$this->input->post('email');
		$datos['user']=$this->input->post('username');
		$datos['contrasena']=$this->input->post('passwd');
		//print_r($datos);
	  $this->db->insert('cliente',$datos);
		$this->twig->display('index');
		//$this->load->view('index.twig');
		//$this->twig->render('index.twig');
		//redirect();
	}
	/*-------------------------------------------------------Usuarios-------------------.-------------------------------------------*/

		function login(){

			$user =$this->input->post('cuenta');
			// print_r($user);
			$contrasena =$this->input->post('clave');
			// print_r($contrasena);
			$res = $this->validaUsuario($user,$contrasena);
			//print_r($res);
			if(!empty($res)){
				$datos = array(
					'user'=>$res[0]['user'],
					'nombre'=>$res[0]['nombre'],
					'categoria'=>0
				);
				//print_r($datos);
				$this->session->set_userdata($datos);
				$this->twig->display('login',$datos);

			} else{$this->twig->display('index');}
		}

		function validaUsuario($user,$contrasena){
			$this->db->where('user',$user);
			$this->db->where('contrasena',$contrasena);

			$query = $this->db->get('cliente');
			return $query->result_array();
		}

		function logout(){
		/*	$datos = array(
				'cuenta'=>null,
				'nombre'=>null,
				'categoria'=>null
			);
			$this->session->set_userdata($datos);
			$this->load->view('inicio');*/
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
