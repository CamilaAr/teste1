<?php
session_start();

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
				echo "Nome: $nome <br>";
				echo "Idade: $idade <br>";
				$pessoa = array('nome' => $nome, 'idade' => $idade);
				
				if(!is_array($_SESSION['usuario'])){
					$_SESSION['usuario'] = array();
				}
				/*foreach ($_SESSION['usuario'] as $row)
					{
						foreach($row as $i => $a)
						{
							if ($a <> $nome){
								$igual = 0;
							} else{
								$igual = 1;
								break;
							}
						}
					} */
		$cadastrado = 0;			
		// $usuario = 	$_SESSION['usuario'];
		foreach ($_SESSION['usuario'] as $index=>$indexsub)
		{
			if ( $indexsub['nome'] == "$nome" )
			{
				$message = "Já cadastrado!";
				
				echo "<script type='text/javascript'>alert('$message');
				 window.location.href='index.php';
				</script>";
				
				$cadastrado = 1;
				
			}
			
			
		}
				
				
				 //$_SESSION['usuario'] = $usuario;
					
					echo $cadastrado;
				if($cadastrado == 0){
					
					array_push($_SESSION['usuario'],$pessoa);
					$message = "Será cadastrado!";
					echo "<script type='text/javascript'>alert('$message');
				 window.location.href='index.php';
				</script>";

				}
				//$usuario = $adiciona($usuario, $nome, $idade);
				var_dump($_SESSION['usuario']);


