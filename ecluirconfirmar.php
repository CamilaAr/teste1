<?php

session_start();

$nome = $_GET["atributo"];
echo $nome;

$usuario = $_SESSION['usuario'];
var_dump($usuario);


foreach ($_SESSION['usuario'] as $index=>$indexsub)
		{
			if ( $indexsub['nome'] == "$nome" )
			{
				
				unset ($_SESSION['usuario'][$index]);
				
				
				
			}
			
			
			
		}

header('location: /index.php');


?>