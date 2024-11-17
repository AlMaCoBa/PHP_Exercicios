<?php

    echo "<h2>Exercício 1</h2>";

    function somaXeY () {
        $y= 5;
        $x=5;
        echo $x+$y;
    }

    somaXeY ();
    echo "<br>";


    echo "<h2>Exercício 2</h2>";

    $y=5;
    function somaAeB () {
        global $a; //serve para usar variaveis fora da função
        $b=5;
        echo $a+$b;
    }

    somaAeB();
    echo "<br>";


    echo "<h2>Exercício 3</h2>";
    //nao entendi o que aconteceu aqui, utilizei outro  metodo, não achei a LOGICA DO STATIC
    function incrementa () {
        static $total = 0;
        echo $total, "<br>";
        $total ++;
    }

    incrementa();
    incrementa();
    incrementa();

    /* Em PHP, você pode criar variáveis estáticas através da palavra chave static. Basicamente, variáveis estáticas são criadas dentro de funções para 
    armazenar valores que poderão ser recuperados (e atualizados) quando a função for chamada outra vez. */


?>