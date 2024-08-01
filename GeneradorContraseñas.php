<?php
function generarContraseña($longitud,$incluirMayusculas = true, $incluirNumeros = true, $incluirSimbolos = true){
    if ($longitud < 8 || $longitud > 16){
        return "La logintud debe estar en 8 y 16 caracteres.";
    }

    // Definir el conjucto de caracteres 
    $minusculas = "abcdefghijklmnopqrstuvwxyz";
    $mayusuclas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numeros = "0123456789";
    $simbolos = "!@#$%^&*()_+-=[]{}|;:,.<>?";

    // iniciamos el conjunto de caracteres posibles con letras minusculas.

    $caracteresPosibles = $minusculas;

    // añadimos los parametros para generar la clave.

    if($incluirMayusculas){
        $caracteresPosibles .= $mayusuclas;
    } if($incluirNumeros){
        $caracteresPosibles .= $numeros;
     } if($incluirSimbolos){
        $caracteresPosibles .= $simbolos;
     }

     // Generamos la contraseña aleatoria.

     $contraseña = "";  
     $logintudCaracteres = strlen($caracteresPosibles);
     for($i = 0; $i < $longitud; $i++){
        $indiceAleatorio = rand(0,$logintudCaracteres - 1);
        $contraseña .= $caracteresPosibles[$indiceAleatorio];
     }

return $contraseña;

}

//ejecucuion del programa 

$longitud = 12; // entre 8 y 16 caracteres.
$incluirMayusculas = true;
$incluirNumeros = true;
$incluirSimbolos = true;

$contraseñaGenerada = generarContraseña($longitud, $incluirMayusculas, $incluirNumeros, $incluirSimbolos);


echo "Contraseña generada: " . $contraseñaGenerada; 

?>