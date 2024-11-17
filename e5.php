<?php
//parte criada por mim ///////////////
function titulo () {
    static $total = 1;  //static permite que os numeros mudem
    echo "<h3>Exercicio ", $total, "<br></h3>" ;//pedido para exibir
    $total ++; //essa linha permite a soma de +1
}    
/////////////////////////////



titulo ();
$string = "Eu sou uma string: " ;
    echo $string, strlen($string) ; //Retorna o tamanho da string informada.
    echo "<br><br>";

//fim



titulo ();
$string2 = "Do contra, eu sou, hiihihi ";
    echo $string2, str_word_count($string2), "<br><br>"; //serve para contar as palavras
//fim

titulo ();
$string3 = "Do contra, eu sou, hihihi: ";
    echo $string3, strrev($string3), "<br><br>"; //espelha o objeto
//fim

titulo ();
$string4 = "O que está buscando, hohoho? " ;
    echo $string4, strpos($string4, "hohoho"), "<br><br>"; //
//fim

titulo ();
$string5 = "Eu estou aqui, lol: ";
    echo $string5, str_replace("lol", "huhuhu", $string5), "<br><br>";
//fim

titulo ();
    echo "super ". "legal", "<br><br>";
//fim

titulo ();
$y = "Como vai?";
   // echo $y = $y . "Eu vou bem"; -- Eu pensei deste jeito
    $y .= "Eu vou bem!"; //resolução do exc
    echo $y;
?>