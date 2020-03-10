<?php
	include "classTabuleiro.php";
	include "classJogador.php";
	include "cabecalho.php";
?>

<?php
$tabuleiro = array();

// Imprimir Tabuleiro
	echo'   0   1   2 ';
		<br />
		for($linha=0; $linha<3; $linha++){
			echo'   $linha';
			$tabuleiro[$linha] = array();
			for($coluna=0; $coluna<2; $coluna++){
				echo'   |   ';
			}
			$tabuleiro[$linha][$coluna] = $_POST["tabuleiro"];
			if($linha<2){
				echo'-------------';
				<br />
			}
		}
		<br />
		
//Verificar Vencedor
	
	for($linha=0; $linha<3; $linha++){
		/* linhas */
		if($tabuleiro[$linha][0] == $tabuleiro[$linha][1] 
			&& $tabuleiro[$linha][1] == $tabuleiro[$linha][2]{
			vencedor = $tabuleiro[$linha][0];
			break;
		}
	}
	
	for($coluna=0; $coluna<3; $coluna++){
		/* colunas */
		if($tabuleiro[0][$coluna] == $tabuleiro[1][$coluna] 
			&& $tabuleiro[1][$coluna] == $tabuleiro[2][$coluna]{
			vencedor = $tabuleiro[0][$coluna];
			break;
		}
	}
	
	/*Diagonal Principal*/
	if($tabuleiro[0][0] == $tabuleiro[1][1] 
			&& $tabuleiro[1][1] == $tabuleiro[2][2]{
			vencedor = $tabuleiro[0][0];
	}
	
	/*Diagonal Secundaria*/
	if($tabuleiro[0][2] == $tabuleiro[1][1] 
			&& $tabuleiro[1][1] == $tabuleiro[2][0]{
			vencedor = $tabuleiro[0][2];
	}
	
	
		
		
        if(empty($_POST)){

            echo   '<form action="instanciarTabuleiro.php" method="POST">
                        <fieldset>
                            <legend>Jogada</legend>
                            <p>
							
							//Proximo jogador
							
							if($_SESSION["nomeJogador"] == 'X'){
								echo'
									.$_SESSION["nomeJogador"].';
									$_SESSION["nomeJogador"] = 'O';
		                    }else if{$_SESSION["nomejodador"]== 'O'){
								echo'
								$_SESSION["nomeJogador"][$j]';
								$_SESSION["nomeJogador"] = 'X';
			
                                <select name="nome">';
                                foreach($_SESSION["Tabuleiro"] as $linha, $coluna){
									<br />
									<input type="text" name="linha"  placeholder="linha..."/>
									<br />
                                    <input type="text" name="coluna"  placeholder="coluna..."/>
								}
								<br />
                                <input type="submit" value="Jogar" />
                        </fieldset>
                    </form>';

        }else{
			
		}	
?>			
</body>
</html>