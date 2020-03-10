<?php

include "classJogador.php";
include "cabecalho.php";

$j = new Jogador(


		$_POST["nome"],
		$_POST["opcao"]
		
		
		);

$_SESSION["jogador"][] = $j;


?>

<h3>Jogador Inserido com sucesso.</h3>

</body>
</html>




