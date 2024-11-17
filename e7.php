<?php

function titulo () {
    static $num = 1;
    echo "Exercício ", $num , "<br><br>";
    $num ++;
};

titulo (); //exibindo Pi
echo pi (), "<br><br>";

titulo (); //Achando Max e Min de dados brutos
echo max (7,9,2,4), "<br>";
echo min (7,9,2,4), "<br><br>";

echo "Exercício 2.2",  "<br><br>";
echo min (40, -5, 0, -69,7), "<br>";
echo max (40, -5, 0, -69,7), "<br><br>";

titulo (); //removendo sinal negativo
$negativo = -6;
echo abs($negativo), " não é negativo", "<br><br>";

titulo (); //saber a raiz quadrada
echo 9, " sua raiz é: ", sqrt (9), "<br>";
echo 25, " sua raiz é: ", sqrt (25), "<br>";
echo 16, " sua raiz é: ", sqrt (16), "<br><br>";

titulo (); //valores arredondados
echo 6.9, " o valor arredondado é: ", round (6.9), "<br>";
echo 4.19, " o valor arredondado é: ", round (4.19), "<br>";
echo pi (), " o valor arredondado é: ", round (pi ()), "<br><br>";

titulo(); //gerando valores aleatorios com rand(min, max)
echo rand(0, 10);

?>
