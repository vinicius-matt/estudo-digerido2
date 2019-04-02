<?php

echo  "Digite o 1º número: ";
$PrimeiroNumero = fgets(STDIN);

echo  "Digite o 2º número: ";
$SegundoNumero = fgets(STDIN);

echo  "Digite o 3º número: ";
$TerceiroNumero = fgets(STDIN);

if ($PrimeiroNumero > $SegundoNumero and $PrimeiroNumero > $TrimeiroNumero) {

    echo  "O 1º número é o maior";

}
elseif ($SegundoNumero > $PrimeiroNumero and $SegundoNumero > $TerceiroNumero) {

    echo  "O 2º númeor é o maior";

}
elseif ($TerceiroNumero > $PrimeiroNumero and $TerceiroNumero > $SegundoNumero) {

    echo  "O 3º número é o maior";

}
elseif ($PrimeiroNumero == $SegundoNumero and $PrimeiroNumero == $TerceiroNumero) {

    echo  "Todos os números são iguais \n";

}
