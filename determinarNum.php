<?php
print "Digite o 1º número: ";
$Numero1= (float) fgets(STDIN);

print "Digite o 2º número: ";
$Numero2= (float) fgets(STDIN);

print "Digite o 3º número: ";
$Numero3= (float) fgets(STDIN);

print "Digite o 4º número: ";
$Numero4= (float) fgets(STDIN);

print "Digite o 5º número: ";
$Numero5= (float) fgets(STDIN);

//Para determinar o maior

if ($Numero1>$Numero2 && $Numero1>$Numero3 && $Numero1>$Numero4 && $Numero1>$Numero5) 
    {print "O 1º número é o maior\n";}
    
if ($Numero2>$Numero1 && $Numero2>$Numero3 && $Numero2>$Numero4 && $Numero2>$Numero5) 
    {print "O 2º número é o maior\n";}
    
if ($Numero3>$Numero1 && $Numero3>$Numero2 && $Numero3>$Numero4 && $Numero3>$Numero5) 
    {print "O 3º número é o maior\n";}
    
if ($Numero4>$Numero1 && $Numero4>$Numero2 && $Numero4>$Numero3 && $Numero3>$Numero5) 
    {print "O 4º número é o maior\n";}
    
if ($Numero5>$Numero1 && $Numero5>$Numero2 && $Numero5>$Numero3 && $Numero5>$Numero4) 
    {print "O 5º número é o maior\n";}
    
