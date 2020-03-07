<?php
include "cabecalho.php";
?>
	<h1>Criar objeto Jogador</h1>
	
	
	<?php
		if(empty($_POST)){
			$_SESSION["nomeJogador"] = 0;
			echo '<form action="instanciarJogador.php" method="post">
			Ainda não há jogadores.
			<br />
			<br />
			Insira o nome do Jogador 1 (x):
			<br />
			<input type="text" name="nome"  placeholder="Jogador 1..."/>
			<br />
			<br />
			<input type="submit" value="Novo Jogador" />
			</form>'
		}else{
			$_SESSION["nomeJogador"] == 0;
				if($_SESSION["nomeJogador"] = 1){
					$_SESSION["nome"][] = $_POST["nome"];
				
					<form action="instanciarJogador.php" method="post">
					Insira o nome do Jogador 2 (0):
					<br />
					<input type="text" name="nome2" placeholder="Jogador 2..." />
					<br />
		
					<input type="submit" value="Novo Jogador" />
				}
		}
		</form>
		?>
	
</body>
</html>