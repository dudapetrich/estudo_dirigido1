<?php   
    $a =2;
    $b = 4;
    $c = 6;
 
    if($a==$b){
        if($a==$c)
            if($b==$c);
                print"Equilatero";
    }elseif($a == $b or $b ==$c) {
        print"Isósceles";
    }elseif($a <> $b and $b <> $c) {
        print"escaleno";
    }