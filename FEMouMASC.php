<?php

echo  "Insira o seu sexo [F/M]: ";
$Sexo = fgetc(STDIN);

if ($Sexo == "F" or $Sexo == "f") {

	echo  "Sexo feminino foi validado";

}
elseif ($Sexo == "M" or $Sexo == "m") {

	echo  "Sexo masculino foi validado";

}
else {

	echo  "Sexo é inválido";

}
