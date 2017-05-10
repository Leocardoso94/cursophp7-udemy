<?php
class Usuario {
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;
	public function getIdUsuario() {
		return $this->idusuario;
	}
	public function getDesLogin() {
		return $this->deslogin;
	}
	public function getDesSenha() {
		return $this->dessenha;
	}
	public function getDtCadastro() {
		return $this->dtcadastro;
	}
	public function setIdUsuario($idusuario) {
		$this->idusuario = $idusuario;
	}
	public function setDesLogin($deslogin) {
		$this->deslogin = $deslogin;
	}
	public function setDesSenha($dessenha) {
		$this->dessenha = $dessenha;
	}
	public function setDtCadastro($dtcadastro) {
		$this->dtcadastro = $dtcadastro;
	}
	public function loadById($id) {
		$sql = new Sql ();
		$results = $sql->select ( "SELECT * FROM tb_usuarios WHERE idusuario = :ID", array (
			":ID" => $id 
			) );
		
		if (count ( $results ) > 0) {
			$this->setData($results[0])	;
		}
	}

	public static function getList(){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
	}

	public static function search($login){
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(':SEARCH' => "%".$login."%" ));
	}

	public function __toString() {
		return json_encode ( array (
			"idusuario" => $this->getIdUsuario (),
			"deslogin" => $this->getDesLogin (),
			"dessenha" => $this->getDesSenha (),
			"dtcadastro" => $this->getDtCadastro ()->format ( "d/m/Y H:i:s" ) 
			) );
	}

	public function login($login, $password) {
		$sql = new Sql ();
		$results = $sql->select ( "SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASS", array (
			":LOGIN" => $login,
			":PASS" => $password 
			) );
		
		if (count ( $results ) > 0) {		
			$this->setData($results[0]);	
		} else {
			throw new Exception("Login e/ou senha inválido(s)");
			
		}
	}

	public function setData($data)
	{
		$this->setIdUsuario ( $data ['idusuario'] );
		$this->setDesSenha ( $data ['dessenha'] );
		$this->setDesLogin( $data ['deslogin'] );
		$this->setDtCadastro( new DateTime ( $data ['dtcadastro'] ) );
	}

	public function insert()
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)",array(
			':LOGIN' => $this->getDesLogin(),
			':PASSWORD' =>  $this->getDesSenha()));

		if (count ( $results ) > 0) {		
			$this->setData($results[0])	;
		}

	}

	public function delete()
	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID",array(
			":ID"=>$this->getIdUsuario()));

		$this->setIdUsuario(0);
		$this->setDesLogin("");
		$this->setDesSenha("");
		$this->setDtCadastro(new DateTime());
	}

	public function update($login, $password)
	{	
		$this->setDesLogin($login);
		$this->setDesSenha($password);

		$sql = new Sql();

		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID",array(
			":LOGIN"=>$this->getDesLogin(),
			":PASSWORD"=>$this->getDesSenha(),
			":ID"=>$this->getIdUsuario()
			));
	}

	public function __construct($login="", $password="")
	{
		$this->setDesLogin($login);
		$this->setDesSenha($password);
	}
}

?>