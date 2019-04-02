<?php

echo "Deseja Fibonacciar até quanto? ";

$Fibonacciar= (float) fgets(STDIN);

echo"(O valor *provavelmente* vai ultrapassar o digitado)\n";

sleep (1);

$Fibonacci=0;

$FibonacciNovo=1;

echo "$Fibonacci $FibonacciNovo ";

while ($FibonacciMaisNovoAinda<$Fibonacciar)

    {$FibonacciMaisNovoAinda=$Fibonacci+$FibonacciNovo;
    
     echo "$FibonacciMaisNovoAinda ";
     
     $Fibonacci= $FibonacciNovo;
     $FibonacciNovo= $FibonacciMaisNovoAinda;}
