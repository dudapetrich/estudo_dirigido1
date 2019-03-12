<?php
print"Quantos metros você quer converter para centimetros?\n";
$metroscm= fgets (STDIN);

$converter= $metroscm*100;

print"$metroscm metros da $converter centimetros";