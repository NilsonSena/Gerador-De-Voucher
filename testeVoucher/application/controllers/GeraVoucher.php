<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class GeraVoucher extends CI_Controller {

	public function index(){
		if(isset($_POST['CPF'])){
			$this->load->model("cadastro_model");
			$valido = $this->cadastro_model->validar_cpf($_POST['CPF']);

			if($valido == false){
				return $this->load->view('voucher/cadastro');
			}
		}else{
			return @$this->load->view('voucher/login');
		}
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
		$this->load->model("geraVoucher_model");
		$lista = $this->geraVoucher_model->selecionaVoucher($_SESSION['login']);
		$dados = array("voucher" => $lista);
		if(!(is_null($dados))){
			$listaHorario = $this->geraVoucher_model->invalidaVoucher($lista);
			$horario = array("horario" => $listaHorario);
		}
		$this->load->view('voucher/geraVoucher',$dados + $horario);

	}
}
