<?php

echo  "Digite a 1ª nota: ";
$Nota = fgets(STDIN);

echo  "Digite a 2ª nota: ";
$Nota2 = fgets(STDIN);

    $Media = ($Nota + $Nota2)/2;

if ($Media == 10) {

    echo  "Aprovado com Distinção \n";

}

elseif ($Media >= 7) {

    echo  "Aprovado \n";

}

else {

    echo  "Reprovado \n";

}
