<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Cadastro extends CI_Controller {

	public function index()
	{

		if(@$_SESSION['login']=='' or is_null(@$_SESSION) ){
				if(@$_POST['usuario']=='' or @$_POST['senha']==''){
					print "Você precisa passar um usuário e senha. Clique <a href=/testeVoucher/index.php>Aqui</a>";
					
				}
				$this->load->model("cadastro_model");
				if($this->cadastro_model->authLogin($_POST['usuario'],$_POST['senha']) == true){
					$autenticado = true;
					$_SESSION['login']=$_POST['usuario'];
				}else{
					$autenticado = false;
				}

				if((!isset ($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
					unset($_SESSION['login']);
					unset($_SESSION['senha']);
					header('location:.');
				}
		}
		else
		{
			$autenticado = true;

		}

		if($autenticado==true){
			$this->load->view('voucher/cadastro');
		}
		else
			print "Você digitou algo errado. Clique <a href=#>Aqui</a> para digitar um usuário válido!";
	}
}