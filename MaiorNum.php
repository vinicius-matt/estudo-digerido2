<?php

echo  "Digite o 1° número: ";
$Primeiro = fgets(STDIN);

echo  "Digite o 2° número: ";
$Segundo = fgets(STDIN);

if ($Primeiro > $Segundo) {

    echo  "O 1° número é maior: $Primeiro \n";

}

elseif ($Primeiro == $Segundo) {

    echo  "Os dois números são iguais \n";

}
else {

    echo  "O 2° número é maior: $Segundo \n";

}
