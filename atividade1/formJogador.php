<?php
include "cabecalho.php";
?>
	<h1>Criar objeto Jogador</h1>
	<form action="instanciarJogador.php" method="post">
	
	
	
		Ainda não há jogadores.
		Insira o nome do Jogador 1 (x): 
		<input type="text" name="nome"  placeholder="Jogador1..."/>
		<br />
		Insira o nome do Jogador 2 (0): 
		<input type="text" name="nome2" />
		<br />
		
		<input type="submit" value="Novo Jogador" />
		
	</form>
</body>
</html>