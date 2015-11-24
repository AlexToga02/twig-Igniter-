<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function validaUsuario($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query = $this->db->get('usuario');
		return $query->result_array();
	}

	function getProducto(){
		$this->db->order_by('modelo','asc');
		$query= $this->db->get('vista_producto');
		return $query->result_array();
	}
	function getTipoProducto(){
		$query= $this->db->get('tipo_producto');
		return $query->result_array();
	}
	function getTipoServicio(){
		$query= $this->db->get('tipo_servicio');
		return $query->result_array();
	}

	function getServicio(){
		$query= $this->db->get('vista_servicio');
		return $query->result_array();
	}

	function getUsuario(){
		$query= $this->db->get('vista_usuario');
		return $query->result_array();
	}
	function nombreProducto($id){
		$this->db->where('idtipo_producto',$id);
		$query = $this->db->get('tipo_producto');
		return $query->result_array();
	}

	function idProducto($modelo){
		$this->db->where('modelo',$modelo);
		$query = $this->db->get('producto');
		return $query->result_array();
	}


	function insertarProducto($datos){
		$this->db->insert('producto',$datos);

	}

	function insertImageProduct($datos){
		$this->db->insert('foto_producto',$datos);

	}


	function insertImageService($datos){
		$this->db->insert('foto_servicio',$datos);

	}

	function deletephoto($idproducto){
		$this->db->where('idproducto', $idproducto);
		$this->db->delete('foto_producto');
	}
	function deleteproduct($idproducto){
		$this->db->where('idproducto', $idproducto);
		$this->db->delete('producto');

	}

	function getIndividualProduct($idproducto){
		$this->db->where('idproducto', $idproducto);
		$query= $this->db->get('vista_producto_imagen');

		return $query->result_array();

	}

	function deleteimgproduct($idproducto){
		$this->db->where('idproducto', $idproducto);
		$this->db->delete('foto_producto');

	}

	function deleteIndividualimgproduct($name){
		$this->db->where('titulo',$name);
		$this->db->delete('foto_producto');

	}

	function deleteIndividualimgservice($name){
		$this->db->where('titulo',$name);
		$this->db->delete('foto_servicio');

	}


	function insertarServicio($datos){
		$this->db->insert('servicio',$datos);
	}

	function idServicio($nombre){
		$this->db->where('nombre',$nombre);
		$query = $this->db->get('servicio');
		return $query->result_array();
	}

	function nombreServicio($id){
		$this->db->where('idtipo_servicio',$id);
		$query = $this->db->get('tipo_servicio');
		return $query->result_array();
	}

	function getIndividualService($idservicio){
		$this->db->where('idservicio', $idservicio);
		$query= $this->db->get('vista_servicio_imagen');

		return $query->result_array();

	}


	function updateProduct($datos,$id){
		$this->db->where('idproducto',$id);
		$this->db->update('producto',$datos);

	}

	function updateService($datos,$id){
		$this->db->where('idservicio',$id);
		$this->db->update('servicio',$datos);
	}



	function deletephotoservice($idservicio){
		$this->db->where('idservicio', $idservicio);
		$this->db->delete('foto_servicio');
	}

	function deleteservice($idservicio){
		$this->db->where('idservicio', $idservicio);
		$this->db->delete('servicio');

	}
}
