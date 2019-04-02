<?php
echo "Digite a base: ";
$base= (float) fgets(STDIN);

echo "Digite o expoente: ";
$Expoente= (float) fgets(STDIN);

$Potencia= ($Base**$Expoente);

echo "\nO resultado é: $Potencia";
