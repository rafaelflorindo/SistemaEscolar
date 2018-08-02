<?php

include("../model/classeAutenticar.php");


	if (filter_input(INPUT_POST,"login") && filter_input(INPUT_POST,"senha")){
		$login = filter_input(INPUT_POST,"login");
		$senha = filter_input(INPUT_POST,"senha");
		
		$objLogin = new Autenticar;
		/*$objLogin -> setLogin($login);
		$objLogin -> setSenha(senha);*/
		$objLogin -> logar($login, $senha);
 	
 	}else{
 		echo "Erro";
 	}

?>