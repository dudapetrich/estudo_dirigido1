<?php   
    print "Digite o nome do cachorro";
    $nome = fgets(STDIN);

    print"Digite o peso do cachorro";
    $peso = fgets(STDIN);

    if ($peso<= 2){
        print"Esse cachorro late fino au au au";
    }elseif($peso <=10){
        print"Esse cachorro tem belo latido";
    }elseif($peso >= 10){
        print"Esse cachorro late grosso wof wof";
    }
    