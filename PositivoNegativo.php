<?php

echo "Digite um valor numérico: ";
$Numero = fgets(STDIN);

if ($Numero > 0) {

    echo "O Valor é positivo. \n";

}

elseif ($Numero < 0) {

    echo "O Valor é negativo. \n";

}
else {

    echo "O Valor é 0. \n";

}
