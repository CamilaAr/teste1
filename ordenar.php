<?php
session_start();

/*
$usuario = $_SESSION['usuario'];
		$OrdenaIdade  = array_column($_SESSION['usuario'], 'idade');
		$OrdenaNome  = array_column($_SESSION['usuario'], 'nome');
		array_multisort($OrdenaIdade, SORT_DESC, $_SESSION['usuario']);
		
 */

$primeiro = reset($_SESSION['usuario']);
		var_dump($primeiro); 
		echo "<br>" . $primeiro['idade'] ;
		
		$ultimo = end($_SESSION['usuario']);
		
if($primeiro['idade'] < $ultimo['idade']){
	$OrdenaIdade  = array_column($_SESSION['usuario'], 'idade');
		array_multisort($OrdenaIdade, SORT_DESC, $_SESSION['usuario']);
} 

else{
	$OrdenaIdade  = array_column($_SESSION['usuario'], 'idade');
		array_multisort($OrdenaIdade, SORT_ASC, $_SESSION['usuario']);
}

header('location: /index.php');

		