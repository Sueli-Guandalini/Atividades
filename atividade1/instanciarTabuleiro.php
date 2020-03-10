<?php

include "classTabuleiro.php";
include "cabecalho.php";

$t = new Tabuleiro(

	$_POST["linha"],
	$_POST["coluna"]
		
);

$_SESSION["tabuleiro"][] = $t;


?>

<h3>Tabuleiro Inserido com sucesso.</h3>

</body>
</html>





