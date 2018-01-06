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

		$this->Dados($results[0]);	
	}
}

public static function getLista(){

	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario;");
}

public static function Buscar($login){
	
	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_usuarios WHERE login LIKE :PESQUISA ORDER BY login",array(':PESQUISA'=>"%".$login."%"));
}
public function Login($login,$senha){
	$sql = new Sql();

	$results = $sql->select("SELECT * FROM tb_usuarios WHERE login = :LOGIN AND senha = :SENHA", array(":LOGIN"=>$login,"SENHA"=>$senha));

	if(count($results) > 0){

	$this->Dados($results[0]);		
} 
else{
	
	throw new Exception("Error login ou senha incorreto!!!");
	
	}
}
public function Dados($dados){

	$this->setIdusuario($dados['idusuario']);
	$this->setSenha($dados['senha']);
	$this->setLogin($dados['login']);
	$this->setDtcadastro(new DateTime($dados['dtCadastro']));
}
public function insert(){

	$sql = new Sql();

	$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)", array(
		':LOGIN'=>$this->getLogin(),
		':SENHA'=>$this->getSenha()
	));

	if (count($results)>0) {
		
		$this->Dados($results[0]);
	}
}
public function __construct($LOGIN="",$SENHA=""){

	$this->getLogin(),
	$this->getSenha()
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