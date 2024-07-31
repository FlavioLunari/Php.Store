<?php
function tennisGame($sequence){
    // sequence sera nuestro arrays de puntos.
    $scoreP1 = 0;
    $scoreP2 = 0;
    // definimos como anotar los puntos.
    $scores = [0 => "love", 1 => "15", 2 => "30", 3 => "40"];
    // se realiza un arrays con las distintas formas de consseguir puntos.
    // se realiza una funcion que muestre la puntuacion del juego como de cada jugador
    function showScore($scoreP1, $scoreP2, $scores){
        if ($scoreP1 >= 3 && $scoreP2 >= 3 ) {
            if ($scoreP1 == $scoreP2) {
                echo "empatados\n";
            } elseif ($scoreP1 == $scoreP2 +1){
                echo "Punto para P1\n";
            } elseif ($scoreP2 == $scoreP1 +1){
                echo "Punto para P2\n";
            } 
        } else {
            echo $scores[$scoreP1] . " - " .  $scores[$scoreP2] . "\n";
        }
    }
// se utiliza la palabra resevada Foreach para recorrer la secuencias de puntos ganados.
foreach ($sequence as $point){
    if ($point == "P1"){
        $scoreP1++; 
    } elseif($point == "P2"){
        $scoreP2++;
    } else {
         echo "entrada de datos inalida: " . $point . "\n";
         return;
}
}
//Verficiamos si uno de los jugadores han ganado.
if( $scoreP1 >= 4 && $scoreP1 >= $scoreP2 + 2 ){
    echo "ha ganado el player 1 \n";
    return;
} elseif ($scoreP2 >= 4 && $scoreP2 >= $scoreP1 + 2){
    echo "ha ganado el player 2 \n";
    return;
} 
// Marcador actualizado de puntos.
showScore($scoreP1, $scoreP2, $scores);
}
// ejemplo para el uso del arrays
$sequence = ["P1","P2","P1","P1","P2","P2","P1","P1"];
tennisGame($sequence);

?>