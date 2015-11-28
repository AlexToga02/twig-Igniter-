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
	public function favoritos()
	{
		$id=$this->session->userdata('ID');
		$datos['user']=$this->session->userdata('user');
		$articulos=$this->getProductos($id);
		// print_r($articulos);
		$datos['articulos']=$articulos;
		$this->twig->display('favoritos',$datos);
	}
	function getProductos($id){
		$this->db->where('Cliente',$id);
		$query = $this->db->get('Fav');
		return $query->result_array();
	}
	public function inicio(){
		$articulos=$this->getArticulos();
		// print_r($articulos);
		$datos['articulos']=$articulos;
		$datos['user']=$this->session->userdata('user');
		$this->twig->display('login',$datos);
	}
	public function agregarFav($id){
		$iduser=$this->session->userdata('ID');
		$datos['idcliente']=$iduser;
		$datos['idproducto']=$id;
		$this->db->insert('marcador',$datos);
		// $id=$this->input->post('id');
		// print_r($id);
		$this->inicio();
	}
	public function borrarFav($id){
		$this->borrarMarcador($id);
		$this->favoritos();
	}
	function borrarMarcador($id){
		$this->db->where('idmarcador',$id);
		$this->db->delete('marcador');
	}
	/*-------------------------------------------------------Usuarios-------------------.-------------------------------------------*/

	public function perfil()
	{
		$id=$this->session->userdata('ID');
		$datos['user']=$this->session->userdata('user');
		print_r($id);
		$cliente=$this->getUsuario($id);
		$city=$this->ciudades();
		$state=$this->estados();
		// print_r($city);
		// print_r($state);
		// print_r($cliente);
		$datos['cliente']=$cliente[0];
		$datos['ciudad']=$city;
		$datos['estado']=$state;
		$this->twig->display('perfil',$datos);
	}
	function getUsuario($id){
		$this->db->where('idCliente',$id);

		$query = $this->db->get('cliente');
		return $query->result_array();
	}
	function estados(){
		$query = $this->db->get('estado');
		return $query->result_array();
	}

	function ciudades(){
		$query = $this->db->get('ciudad');
		return $query->result_array();
	}
	function actualizar(){
		$id=$this->input->post('id');
		$datos['nombre']=$this->input->post('name');
		$datos['user']=$this->input->post('user');
		$datos['contrasena']=$this->input->post('pass');
		$datos['zonacliente']=$this->input->post('zone');
		$datos['estado_id']=$this->input->post('state');
		$datos['ciudad_id']=$this->input->post('city');
		$datos['calle']=$this->input->post('street');
		$datos['numero']=$this->input->post('no');
		$datos['poblacion']=$this->input->post('pob');
		$datos['referencia']=$this->input->post('ref');
		$datos['telefono']=$this->input->post('phone');
		$datos['cp']=$this->input->post('cp');
		$datos['colonia']=$this->input->post('colo');
		$datos['email']=$this->input->post('emal');
		$datos['rfc']=$this->input->post('rfc');
		$datos['notas']=$this->input->post('nota');
		$this->actPerfil($datos,$id);
		$this->perfil();
	}

	function actPerfil($datos,$id){
		$this->db->where('idCliente',$id);
		$this->db->update('cliente',$datos);
}

		function login(){

			$user =$this->input->post('cuenta');
			// print_r($user);
			$contrasena =$this->input->post('clave');
			// print_r($contrasena);
			$res = $this->m_admin->validalogin($user,$contrasena);

			//print_r($res);
			if(!empty($res)){
				$datos = array(
					'ID'=>$res[0]['idCliente'],
					'user'=>$res[0]['user'],
					'nombre'=>$res[0]['nombre'],
					'categoria'=>0
				);
				$this->session->set_userdata($datos);
				$this->inicio();

			} else{$this->index();}

		}

		function logout(){
			$this->session->sess_destroy();
			$this->index();
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
