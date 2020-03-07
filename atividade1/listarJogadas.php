<?php
include "classJogador.php";
include "cabecalho.php";
?>
Objetos "Jogadas" instanciadas no sistema: <br />

<?php
	foreach($_SESSION["carro"] as $i=>$c){
		echo "
			Cor: <span style='color:".$c->get_cor()."'>".$c->get_cor()."</span><br />
			Quantidade Portas: ".$c->get_qtd_porta()." <br />
			Velocidade Máxima: ".$c->get_velocidade_maxima()." <br />
			Velocidade Atual: ".$c->get_velocidade_atual()."
			<form method='post' action='acelerar_frear.php'>
			<input type='number' name='tempo' 
				placeholder='tempo de aceleração / frenagem' />
			<input type='number' name='aceleracao_frenagem' 
				placeholder='aceleração / frenagem' />
				<br />
			<input type='radio' class='radio' name='tipo' value='a' />
				Aceleração
			<input type='radio' class='radio' name='tipo' value='f' />
				Frenagem	
			<br />
			<input type='hidden' name='id' value='$i' />
			<input type='submit' value='Acelerar / Frear' />
				
			</form>
			<hr />";
	}
?>
</body>
</html>