<?php
function titulo () {
    static $num = 1;
    echo "exercicio ", $num, "<br><br>";
    $num ++;
}

titulo ();
/*
Constantes não mudam
 * 
 * É possível definir valores imutáveis, que podem 
 * ser acessados dentro e fora de funções.
 * 
 * Para criar uma constante, utilize a função:
 *      define(nome, valor)
 * onde nome e valor são string que representam 
 * exatamente o que dizem ser.
 * 
 * Constantes não usam o $.
 */

define("fruta", "morango");
echo fruta, "<br><br>";

titulo (); // Definição da constante
//tive que copiar da solução
define ("carro", "ferrari");

function qualCarro (){
    echo carro;
}
qualCarro ();

?>