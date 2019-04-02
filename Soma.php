<?php
echo "Digite o 1º número: ";
$Numero1= (float) fgets(STDIN);

echo "Digite o 2º número: ";
$Numero2= (float) fgets(STDIN);

echo "Digite o 3º número: ";
$Numero3= (float) fgets(STDIN);

echo "Digite o 4º número: ";
$Numero4= (float) fgets(STDIN);

echo"Digite o 5º número: ";
$Numero5= (float) fgets(STDIN);

$Soma= ($Numero1+$Numero2+$Numero3+$Numero4+$Numero5);
$Media= ($Soma/5);
echo "A soma é de: $Soma\nA média é de: $Media";
