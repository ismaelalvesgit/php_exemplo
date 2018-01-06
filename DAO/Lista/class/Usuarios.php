<?php

class Usuarios{

	private $idusuario;
	private $login;
	private $senha;
	private $dtCadastro;


	public function getIdusuario(){

		return $this->idusuario;
	}

	public function setIdusuario($value){
		$this->idusuario = $value;		
	}

	public function getLogin(){

		return $this->login;
	}

	public function setLogin($value){
	
		$this->login = $value;		
	}

	public function getSenha(){

		return $this->senha;
	}
	public function setSenha($value){
		
		$this->senha = $value;		
	}

	public function getDtcadastro(){

		return $this->dtCadastro;
	}

	public function setDtcadastro($value){
		
		$this->dtCadastro = $value;		
	}

public function loadByid($id){

	$sql = new Sql();

	$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));

	if(count($results) > 0){

		$row = $results[0];

		$this->setIdusuario($row['idusuario']);
		$this->setSenha($row['senha']);
		$this->setLogin($row['login']);
		$this->setDtcadastro(new DateTime($row['dtCadastro']));
	}
}

public static function getLista(){

	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario;");
}

public function __toString(){

	return json_encode(array(
		"idusuario"=>$this->getIdusuario(),
		"login"=>$this->getLogin(),
		"senha"=>$this->getSenha(),
		"dtCadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
));
}
}
?>