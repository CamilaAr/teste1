

	

<?php
include("header.php");
?>	

<body>

	<div class="uk-container">
	<br>
		<h1 style="text-align: center;">Gerenciamento de Usuários</h1>
		<br>
		<div uk-grid>
		
		<div class="uk-width-1-2@m"  >
		<div style="background-color:#F7F7F7; padding: 20px; border-radius: 10px;">
		<h2 style="text-align: center;">Lista de Usuários</h2>
		
		<a href='ordenar.php' class="uk-button uk-button-default" style="border-radius: 10px;">ordenar a lista</a> <br>
		<br>
		<div class="uk-child-width-1-3"  uk-grid>
		<?php
		
	
		
		foreach ($_SESSION['usuario'] as $row)
{
    foreach($row as $index => $atributo)
    {
		if ($index == 'nome'){
			?>
			
			<div>
			<?php
			?>
			<a class="uk-button uk-button-danger uk-button-small"  style="border-radius: 10px;"  href='excluir.php?atributo=<?php echo $atributo ?>'>Excluir</a> 
			 <a  class="uk-button uk-button-primary uk-button-small"style="border-radius: 10px;" href='editar.php?atributo=<?php echo $atributo ?>'>Editar</a>
			 
			 </div>
			 <?php
		
		}
		?>
			
			<div>
			
		<p><?php echo $index;?>:  <?php echo $atributo;?> </p>
		 
			 </div>
			 
			 <?php
        
		
    }
}			
		
				?>
				</div>
				</div>
				</div>
		
		<div class="uk-width-1-2@m" >
		<div style=" height: 400px;  background-color:#F7F7F7; padding: 20px; border-radius: 10px;">
		<h2 style="text-align: center;" >Cadastrar Usuário</h2>
		<form method="post" action="vetor.php">
			<label class="uk-legend">Nome: </label>
			<input class="uk-input" type="text" name="nome" placeholder="Nome completo"> <br><br>
			
			<label class="uk-legend">Idade: </label>
			<input class="uk-input" type="int" name="idade" placeholder="Digia a idade"> <br><br>
		
			<input style="border-radius: 10px;" class="uk-button uk-button-primary" type="submit" value="cadastrar">
		</form>
		</div>
				</div>
		
		
				
				</div>
		<br>		
	<a href="sair.php" > Finalizar sessão</a>
	
	</div>
	</body>
	

	
</html>