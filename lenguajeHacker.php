<?php

function tooLeetSpeak($text){
    // se crea la funcion para trasnformar las letras en numeros..
    $leetTable = [
            'a' => '4', 'b' => '8', 'c' => '(', 'd' => 'd', 'e' => '3', 'f' => 'f', 'g' => '6',
            'h' => '#', 'i' => '!', 'j' => 'j', 'k' => 'k', 'l' => '1', 'm' => 'm', 'n' => 'n',
            'o' => '0', 'p' => 'p', 'q' => 'q', 'r' => 'r', 's' => '5', 't' => '7', 'u' => 'u',
            'v' => 'v', 'w' => 'w', 'x' => 'x', 'y' => 'y', 'z' => '2',
            'A' => '4', 'B' => '8', 'C' => '(', 'D' => 'd', 'E' => '3', 'F' => 'f', 'G' => '6',
            'H' => '#', 'I' => '!', 'J' => 'j', 'K' => 'k', 'L' => '1', 'M' => 'm', 'N' => 'n',
            'O' => '0', 'P' => 'p', 'Q' => 'q', 'R' => 'r', 'S' => '5', 'T' => '7', 'U' => 'u',
            'V' => 'v', 'W' => 'w', 'X' => 'x', 'Y' => 'y', 'Z' => '2',
            '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7',
            '8' => '8', '9' => '9', '0' => '0'
    ];

    // transformamos el texto a numero

    $leetText = '';
    for( $i = 0; $i < strlen($text); $i++){
        $char = $text[$i];
        if(isset($leetTable[$char])) {
            $leetText .= $leetTable[$char];
        } else {
            $leetText .= $char;
        }
    }  
    return $leetText;
}

$inputText = "Flavio Lunari";
echo tooLeetSpeak($inputText);