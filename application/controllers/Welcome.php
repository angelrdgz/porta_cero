<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
	  parent::__construct();
	}
	public function index()
	{
		$data = array();
		$this->template->set('title', 'Home');
		$this->template->load('template', 'contents' , 'home', $data);
	}
	public function details()
	{
		$data = array();
		$this->template->set('title', 'Detalle | Portal Cero');
		$this->template->load('template', 'contents' , 'details', $data);
	}
	public function search()
	{
		$data = array();
		$this->template->set('title', 'Busqueda | Portal Cero');
		$this->template->load('template', 'contents' , 'search', $data);
	}
	public function designers()
	{
		$data = array();
		$this->template->set('title', 'Busqueda | Portal Cero');
		$this->template->load('template', 'contents' , 'designers', $data);
	}
	public function login()
	{
		$data = array();
		$this->template->set('title', 'Detalle | Portal Cero');
		$this->template->load('blue_template', 'contents' , 'login', $data);
	}
	public function cart()
	{
		$data = array();
		$this->template->set('title', 'Detalle | Portal Cero');
		$this->template->load('blue_template', 'contents' , 'cart', $data);
	}
}
