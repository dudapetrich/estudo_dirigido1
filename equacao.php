<?php   

    print"digite o valor de a \n";
    $a = fgets(STDIN); 
    print"digite o valor de b \n";  
    $b = fgets(STDIN);
    print"digite o valor de c \n";  
    $c = fgets(STDIN);

    $delta = pow($b,2) -4*$a*$c;

    $x1 =( -$b + sqrt ($delta))/2*$a;
    $x2 =( -$b - sqrt($delta))/2*$a;

    print "valor de delta: $delta \n";
    print "o valor de x1: $x1 \n";
    print "o valor de x2: $x2 \n";