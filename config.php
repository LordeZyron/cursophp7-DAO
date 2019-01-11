<?php  

//Verifica se existe outros arquivos .php, se sim, utiliza as funcoes de cada classe encontrada .php
spl_autoload_register(function($class_name){

	$filename = "class" .DIRECTORY_SEPARATOR.$class_name. ".php";

	if (file_exists($filename)) {
		require_once($filename);
	}

});


//DAO = data access object: isola a camada de apresentacao da camada de negocio e da camada de dados

//Camada de apresentação
//É a chamada GUI (Graphical User Interface), ou simplesmente interface. Esta camada interage diretamente com o usuário, é através dela que são feitas as requisições como consultas, por exemplo.

//Camada de negócio
//Também chamada de lógica empresarial, regras de negócio ou funcionalidade. É nela que ficam as funções e regras de todo o negócio. Não existe uma interface para o usuário e seus dados são voláteis, ou seja, para que algum dado seja mantido deve ser utilizada a camada de dados.

//Camada de Dados
//É composta pelo repositório das informações e as classes que as manipulam. Esta camada recebe as requisições da camada de negócios e seus métodos executam essas requisições em um banco de dados. Uma alteração no banco de dados alteraria apenas as classes da camada de dados, mas o restante da arquitetura não seria afetado por essa alteração.

?>