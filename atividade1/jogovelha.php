<?php

function limpar_tela(){
    for ($i=0; $i<100; $i++){
        echo"<br />";
    }
}

function imprimir_tabuleiro( $tab){
    $tab = ()array;
	$cont = 1;
    echo"   0     1     2<br />";
    echo"   ______________<br />";
    for($i=0; $i<3; $i++){
		$tab[$i] = ()array;
        echo"  '. $i.'";
        for($j=0; $j<2; $j++){
			$tab[$i][$j]= $cont++;
            echo"  |  '.$tab[$i][$j].'";
        }
        echo"<br />'. $tab[$i][$j].'";
        if ($i<2){
            echo"   ______________<br />";
        }
    }
     echo"<br />";
}

function verificar_vencedor($tab){
    $vencedor = ' ';
  

        for($i=0; $i<3; $i++){
            /* linhas */
            if ($tab[$i][0] == $tab[$i][1]
                    && $tab[$i][1] == $tab[$i][2]){
                $vencedor = $tab[$i][0];
                break;
            }
        }

        for($i=0; $i<3; $i++){
            /* colunas */
            if ($tab[0][$i] == $tab[1][$i]
                    && $tab[1][$i] == $tab[2][$i]){
                $vencedor = $tab[0][$i];
                break;
            }
        }

        /* diagonal principal*/
        if ($tab[0][0] == $tab[1][1]
                && $tab[1][1] == $tab[2][2]){
            $vencedor = $tab[0][0];
        }
        /* diagonal secundaria*/
        if ($tab[0][2] == $tab[1][1]
                && $tab[1][1] == $tab[2][0]){
            $vencedor = $tab[0][2];
        }
        return $vencedor;
}

int main(void){
    char tab[3][3] ={
        ' ', ' ', ' ',
        ' ', ' ', ' ',
        ' ', ' ', ' ',
    };
    int  i, j;

    limpar_tela();
    imprimir_tabuleiro(tab);

    $vencedor = ' ';
    $jogador = 'X';
    $jogadas = 0;
    while (($vencedor == ' ') && ($jogadas<9)){
        /*Recebendo as jogadas*/
        echo"<br />";
        echo"(L,C): '.$i.'","'.$j.'";
        scanf("%d,%d", &linha, &coluna);
        echo"<br />";
        $tab[$i][$j] = $jogador;
        $jogadas++;

        /* proximo jogador */
        if ($jogador == 'X'){
            $jogador = 'O';
        }else if($jogador == 'O'){
            $jogador ='X';
        }

        $vencedor = verificar_vencedor($tab);
        limpar_tela();
        imprimir_tabuleiro($tab);
    }

    if (($vencedor == 'X') || ($vencedor == 'O')){
        echo"Vencedor: '.$vencedor.'<br />";
    }else {
        echo"Ninguem ganhou!<br />";
    }
}
