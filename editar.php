

<?php
include("header.php");
?>	

<body>

<?php

$nome = $_GET["atributo"];
$novonome = filter_input(INPUT_POST, 'novonome', FILTER_SANITIZE_STRING);
$antigonome = filter_input(INPUT_POST, 'antigonome', FILTER_SANITIZE_STRING);
$novaidade = filter_input(INPUT_POST, 'novaidade', FILTER_SANITIZE_NUMBER_INT);
		if(isset($novonome) && (isset($novaidade))){
			echo "entrou";
				
				foreach ($_SESSION['usuario'] as $index=>$indexsub)
		{
			if ( $indexsub['nome'] == "$antigonome" )
			{
				
				$_SESSION['usuario'][$index]['nome'] = "$novonome";
				
				$_SESSION['usuario'][$index]['idade'] = "$novaidade";
				header('location: /index.php');
			}
			
			
			
		}
		}

?>

<div class="uk-container" style="text-align: center">
<h2 >
	Editar o Usuário <?php echo $nome; ?> ?
</h2>
<?php


$usuario = 	$_SESSION['usuario'];
		foreach ($usuario as $index=>$indexsub)
{
    if ( $indexsub['nome'] == "$nome" )
    {
		?>
<div style="   background-color:#F7F7F7; padding: 20px; border-radius: 10px; ">
		<h3> Digite o novo nome e a nova idade: </h3> 
		
		<form method="post" action="editar.php">
			<label  class="uk-legend">Nome: </label>
			<input class="uk-input" type="text" name="novonome" placeholder="Nome anterior:<?php echo $indexsub['nome'] ?>" required> <br><br>
			<input type="hidden" name="antigonome" value="<?php echo $nome ?>" > 
			
			<label style="text-align:left;" class="uk-legend">Idade: </label>
			<input class="uk-input" type="int" name="novaidade" placeholder="Idade anterior: <?php echo $indexsub['idade'] ?>" required> <br><br>
		
			<input style="border-radius: 10px;" class="uk-button uk-button-primary" type="submit" value="Confirmar">
		</form>
		
	</div>	
		
		<?php
		
        
    }
	
	 $_SESSION['usuario'] = $usuario;
}
?>
<div style="text-align:left;">
<a href="index.php" > cancelar</a>
</div>
</div>
</body>
</html>