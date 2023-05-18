<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vouchers extends CI_Controller {

	public function index()
	{
//		$this->load->model("vouchers_model");
//		$lista = $this->vouchers_model->buscaTodos();
//		$dados = array("voucher" => $lista);
		//$this->load->view('vouchers/index', $dados);
		//@$cadastro = $_GET['cadastro'];
		//if($cadastro==true)
			//$this->load->view('voucher/cadastro');
		//else
			$this->load->view('voucher/login');
	}
}
