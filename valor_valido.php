<?php

  print"Escreva uma nota de zero a dez \n";
  $nota=fgets (STDIN);
  
  while ($nota > 10 or $nota <0){
      print"Valor inválido \n";
      print"Escreva uma nota de zero a dez \n";
  $nota=fgets (STDIN);
  }

  print "valor válido";