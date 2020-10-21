<?php
include "cabecalho.php";
?>
	<h1>Criar objeto jogador</h1>
	
	<?php
		if(empty($_POST)){
			$_SESSION["nome_cadastrado"] = 0;
			$_SESSION["opcaoJogador"] = $_POST["opcao"] ='X';
			echo '
				
				<form action="instanciarJogador.php" method="post">
				<fieldset>
				<br />
				<br />
				Ainda não há jogadores.
				<br />
				<br />
				Insira o nome do Jogador 1 (x):
				<br />
				<input type="text" name="nome"  placeholder="Jogador 1..."/>
				<br />
				<br />
				<input type="submit" value="Novo Jogador" />
				<br />
				<br />
				</fieldset>
				</form>';
						
		}else{
			if($_SESSION["nome_cadastrado"] == 0){
				$_SESSION["nomeJogador"][] = $_POST["nome"];
				$_SESSION["nome_cadastrado"][] = 1;
				echo'
					<form action="instanciarJogador.php" method="post">
					<fieldset>
					<br />
					<br />
					Insira o nome do Jogador 2 (0):
					<br />
					<br />
					<input type="text" name="nome" placeholder="Jogador 2..." />
					<br />
					<br />
					<input type="submit" value="Novo Jogador" />
					<br />
					<br />
					</fieldset>
					</form>';
					}
			}
					
		?>	
</body>
</html>