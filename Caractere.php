<?php

print "Digite uma letra: ";
$letra = fgetc(STDIN);

if ($letra == "a" or $Letra == "e" or $Letra == "i" or $letra == "o"  or $letra == "u" or $Letra == "A" or $letra == "E" or $letra == "I" or $letra == "O" or $letra == "U") {

    print "$Letra é uma vogal \n";

}
elseif ($letra == "b" or $letra == "c" or $Letra == "d" or $letra == "f" or $Letra == "g" or $Letra == "h" or $letra == "j" or $letra == "k" or $letra == "l" or $letra == "m" or $letra == "n" or $letra == "p" or $letra == "q" or $letra == "r" or $letra == "s" or $letra == "t" or $letra == "v" or $letra == "w" or $letra == "x" or $letra == "y" or $letra == "z" or $letra == "B" or $letra == "C" or $letra == "D" or $letra == "F" or $letra == "G" or $letra == "H" or $letra == "J" or $letra == "K" or $letra == "L" or $letra == "M" or $letra == "N" or $letra == "P" or $letra == "Q" or $letra == "R" or $letra == "S" or $letra == "T" or $letra == "V" or $letra == "W" or $letra == "X" or $letra == "Y" or $letra == "Z") {

    print "$letra é uma consoante \n";

}
else {

    print "Isto não é um número ou é um caractere inválido";

}
