<?php

function titulo () {
    static $num = 1;
    echo "Exercicio ", $num, "<br><br>";
    $num ++;

}

titulo ();
$x = 2;
echo $x, " , o tipo da variavel é: ", var_dump (2), "<br><br>";
$x = 3.14;
echo $x, " , o tipo da variavel é: ", var_dump(3.14), "<br><br>";
$x = "Texto";
echo $x, " , o tipo da variavel é: ", var_dump("Texto"); //adicionado por mim para teste

// A função var_dump pode ser usada para descobrir o tipo de qualquer valor\variável e POSIÇÃO NA MEMORIA.

/*  Resolução do GITHUB: 

    echo var_dump(2);  // Deve aparecer int(2)
    echo "<br>";
    echo var_dump(3.14); // Deve aparecer float(3.14) 
*/
echo "<br><br>";
//fim

titulo ();
echo "* ", 59.58, " it's a number, true or false? ", var_dump(is_numeric(59.85/*, "<br>" - não consegui colocar 'ENTER'*/));  
/* *Para saber se a string é numérica, basta usar a função is_numeric().
*Utilize a var_dump() para encontrar o resultado correto */
echo "<br>";
echo "* '58,59' esta sendo representado dentro de aspas, mas ainda é numero, verdadeiro ou falso? ", var_dump(is_numeric("59.85"));
echo "<br>";
echo "* Mesmo '59.85 dentro de aspas' o PHP reconhece que ele é um número, ou é falso? ", var_dump(is_numeric("* 59.85 é um número"));
echo "<br><br>";
// fim

titulo ();
$string = "5";
echo var_dump($string), "<br>";
echo var_dump(intval($string)), "<br><br>"; //a função 'intval()' transforma o tipo de valor e tipo de variavel do objeto
//fim
?>