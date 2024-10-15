<?php


/*
 Crea una funció que rebi com a paràmetres un array de paraules i un caràcter.
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.
*/

$palabras = ['casa', 'avion', 'garaje'];


//Añadir una letra 
$caracter = 'a';

function comprobarPalabrasCoincideLetra(array $palabras,string $caracter) {
    foreach($palabras as $palabra) {
        $letraPalabras = false; 
        for ($i = 0; isset($palabra[$i]); $i++) {
            if ($palabra[$i] == $caracter) {
                $letraPalabras = true;
                break;
            }
        }
        if (!$letraPalabras) {
            return false;
        }
    }
    return true;
    
}
        
$resultado = comprobarPalabrasCoincideLetra(palabras, $caracter);

if ($resultado) {
    echo "Todas las palabras contienen la letra $caracter";
}else{
    echo "Alguna o ninguna de las palabras contiene la letra $caracter ";
}


?>