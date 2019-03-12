<?php

    print"Informe uma medida:";
    $medida= (int) fgets (STDIN);
    $pedaco= 45;

    $quantidade =(int) ($medida/$pedaco);
    $sobra= $medida%$pedaco;
    print "Você conseguirá $quantidade pedaços e sobrará $sobra cm";