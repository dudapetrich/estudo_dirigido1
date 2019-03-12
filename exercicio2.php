<?php 

print"Digite o primeiro valor:";
$valor1= fgets(STDIN);

print"Digite o segundo valor:";
$valor2= fgets(STDIN);

print"Digite o terceiro valor:";
$valor3= fgets(STDIN);

print"Digite o quarto valor:";
$valor4= fgets(STDIN);

$media= ($valor1 + $valor2 + $valor3 + $valor4)/4;

print"A média é: $media";