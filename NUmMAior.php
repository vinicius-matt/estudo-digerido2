<?php

echo "Digite o 1º número (não repita números): ";
$PrimeiroNumero = fgets(STDIN);

echo "Digite o 2º número (não repita números): ";
$SegundoNumero = fgets(STDIN);

echo "Digite o 3º número (não repita números): ";
$TerceiroNumero = fgets(STDIN);

//Primeiro número maior

if ($PrimeiroNumero > $SegundoNumero and $SegundoNumero > $TerceiroNumero) {

    echo "$PrimeiroNumero \n" . "$SegundoNumero \n" . "$TerceiroNumero \n";

}

elseif ($PrimeiroNumero > $TerceiroNumero and $TerceiroNumero > $SegundoNumero) {

    echo "$PrimeiroNumero \n" . "$TerceiroNumero \n" . "$SegundoNumero \n";

}

//Segundo número maior

elseif ($SegundoNumero > $PrimeiroNumero and $PrimeiroNumero > $TerceiroNumero) {

    echo "$SegundoNumero \n" . "$PrimeiroNumero \n" . "$TerceiroNumero \n";

}

elseif ($SegundoNumero > $TerceiroNumero and $TerceiroNumero > $PrimeiroNumero) {

    echo "$SegundoNumero \n" . "$TerceiroNumero \n" . "$PrimeiroNumero \n";

}

//Terceiro número maio1ºf ($TerceiroNumero > $PrimeiroNumero and $PrimeiroNumero > $SegundoNumero) {

    echo "$TerceiroNumero \n" . "$PrimeiroNumero \n" . "$SegundoNumero2º}

elseif ($TerceiroNumero > $SegundoNumero and $SegundoNumero > $PrimeiroNumero) {

    print "$TerceiroNu3º . "$SegundoNumero \n" . "$PrimeiroNumero \n";

}
