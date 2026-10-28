<?php
function doble($i) {
    return $i*2; //variable $i, tipo: integer
}
//función doble($i), recibe el parámetro $i y devuelve el doble de su valor

$a = TRUE;
//variable $a, tipo: boolean

$b = "xyz";
//variable $b, tipo: string

$c = 'xyz';
//variable $c, tipo: string

$d = 12;
//variable $d, tipo: integer

echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
//echo imprime lo devuelto por la función gettype(), que recibe la variabley devuelve su tipo

if (is_int($d)) {
    $d += 4;
}
//estructura condicional if, que evalua si la variable $d es de tipo integer, mediante la función is_int(), si es así, le suma 4 a su valor

if (is_string($a)) {
    echo "Cadena: $a";
}
//estructura condicional if, que evalua si la variable $a es de tipo string, mediante la función is_string(), si es así, imprime "Cadena: $a"

$d = $a ? ++$d : $d*3;
//operador ternario, evalua si la variable $a es TRUE, si es así, incrementa en 1 el valor de $d, si no, multiplica el valor de $d por 3

$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
//imprime los valores finales concatenados: "1xyzxyz184444"

//operadores utilizados: =, +=, *, ++, +, ? :
?> 