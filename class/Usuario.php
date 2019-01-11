<?php

class Usuario {

	//Atributos
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	//Geters e Seters de cada atributo, define valores e pega os mesmos
	public function getIdusuario(){

		return $this->idusuario;
	}

	public function setIdusuario($value){

		return $this->idusuario = $value;
	}

	public function getDeslogin(){

		return $this->deslogin;
	}

	public function setDeslogin($value){

		return $this->deslogin = $value;
	}

	public function getDessenha(){

		return $this->dessenha;
	}

	public function setDessenha($value){

		return $this->dessenha = $value;
	}

	public function getDtcadastro(){

		return $this->dtcadastro;
	}

	public function setDtcadastro($value){

		return $this->dtcadastro = $value;
	}


	//Funçao para receber chave primaria id
	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array( ":ID"=>$id
	));
	
		//Logica para validar se existe códigos ids no banco de dados, verifica a posicao no array
		if (count($results) > 0) {

			$row = $results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new Datetime($row['dtcadastro']));

		}

	}



// metodo magico: __toString = converte informacoes de dentro de um objeto para string
public function __toString(){

	return json_encode(array(
		"idusuario"=>$this->getIdusuario(),
		"deslogin"=>$this->getDeslogin(),
		"dessenha"=>$this->getDessenha(),
		"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
	));
}

}

?>