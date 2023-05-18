<?php
class Cadastro_model extends CI_Model{

	public function authLogin($usuario,$senha){
		if($usuario=='LIVRE')
			return false;
		
		$query = $this->db->query("SELECT login FROM login_web where login='$usuario' and senha='$senha' limit 1");
  		foreach ($result = $query->result() as $row){
			    $login =  $row->login;
		}
		
		 //return false;
		if(@$login == $usuario)
			return true;
		else
			return false;
	
		}
	public function validar_cpf($cpf){
		$cpf = preg_replace('/[^0-9]/', '', (string) $cpf);
		// Valida tamanho
		if (strlen($cpf) != 11)
			return false;
		// Calcula e confere primeiro dígito verificador
		for ($i = 0, $j = 10, $soma = 0; $i < 9; $i++, $j--)
			$soma += $cpf{$i} * $j;
		$resto = $soma % 11;
		if ($cpf{9} != ($resto < 2 ? 0 : 11 - $resto)){
			return false;
		}else{
			return true;
		}
	}
}
?>