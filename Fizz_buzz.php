<?php

/*

function fizz_buzz(){
    for ( $index=4; $index<=100; $index++ );
     $output = ($index % 3 ==0 ? "fizz" : "") . ( $index % 5 ==0 ? "buzz" : ""  );
     $output = $output ? $output : $index;
     echo $output. "\n";

}

fizz_buzz();


/*
 * Escribe un programa que muestre por consola (con un print) los
 * números de 1 a 100 (ambos incluidos y con un salto de línea entre
 * cada impresión), sustituyendo los siguientes:
 * - Múltiplos de 3 por la palabra "fizz".
 * - Múltiplos de 5 por la palabra "buzz".
 * - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
 */


 // iniciamos creando un bucle con la palabra 'FOR' que comienzao con $i igual a 1 y se ejecuta mientras $i sea menor o igual a 100.

 for($i = 1; $i <= 100; $i++){
    //verificamos sin $i es multiplo de 3 y 5 a la vez.
    if ( $i % 3 == 0 && $i % 5 == 0) {
    // si es verdadero, imprime "fizzbuzz" seguido de un salto de linea.
        echo "fizzbuzz\n";
    // si no, verificamos que $i es multiplo de 3.
    } elseif ($i % 3 == 0) {
    // si es verdadero imprime la palabra "frizz" con un salto de linea.
        echo "fizz\n";
    // si no, verificamos si es multiplo de 5 
    } elseif ($i % 5 == 0){
    // si es verdadero, imprime "buzz" seguido de un salto de linea.
        echo "buzz\n";
    } else {
        // si no es multiplo ni de 3 o 5 imprime solo el valor de $i seguido de un salto de linea.
            echo $i . "\n";

    }
 }


 ?>