<?php
include "classJogador.php";
include "cabecalho.php";
?>
Objetos "Jogador" instanciados no sistema: <br />

<?php
	foreach($_SESSION["jogador"] as $i=>$j){
		echo "
			Jogador: ".$j->get_nome()." <br />
			
			<hr />";
	}
?>
</body>
</html>