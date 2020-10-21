<?php
include "cabecalho.php";
include "classJogador.php";

$j = new Jogador(
		$_POST["nome"],
		$_POST["opcao"]
);

$_SESSION["jogador"][] = $j;


?>

<h3>Jogador cadastrado com sucesso.</h3>

</body>
</html>




