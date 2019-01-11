<?php  

class Sql extends PDO { //PDO é uma classe generica do php para se conectar ao banco de dados SQL

	private $conn; //conexao

	public function __construct(){ //indica o banco de dados que sera utilizado

		$this->conn = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");
	}

	//Define parametros para o SQL
	private function setParams($statment, $parameters = array()){

		foreach ($parameters as $key => $value) {
			$this->setParam($key, $value);
		}

	}

	//metódo para definir parametros
	private function setParam($statment, $key, $value){

		$statment->bindParam($key, $value);
	}

	//funçao para executar comandos do SQL
	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
		
	}

	//método para função select do SQL
	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchALL(PDO::FETCH_ASSOC);


	}

}





?>