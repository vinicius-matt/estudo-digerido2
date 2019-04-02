<?php

echo "Insira o valor de A: ";
$A = fgets(STDIN);

if ($A == 0) {

   e "A não pode ser validado como 0 \n";
    exit;

}
echo "Insira o valor de B: ";
$B = fgets(STDIN);

echo "Insira o valor de C: ";
$C = fgets(STDIN);

    $Delta = (pow($B,2))-(4*$A*$C);

if ($Delta < 0) {

    print "Delta negativo: não possui raizes reais";
    exit;

}
elseif ($Delta == 0) {

        $X = -$B/2*$A;

    print "O valor de A é: $A";
    print "O valor de B é: $B";
    print "O valor de C é: $C";
    print "O valor de Δ é: $Delta \n";
    print "O valor de x é: $X \n";

}
elseif ($Delta > 0) {

        $X1 = (-$b-sqrt($Delta))/2*$A;
        $X2 = (-$b+sqrt($Delta))/2*$A;

    echo  "O valor de A é: $A";
    echo  "O valor de B é: $B";
    echo  "O valor de C é: $C";
    echo  "O valor de Δ é: $Delta \n";
    echo  "O valor de x1 é: $X1 \n";
    echo  "O valor de x2 é: $X2 \n";    

}
